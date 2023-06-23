<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CaoUsuario;
use App\Models\CaoFatura;
use App\Models\CaoSalario;
use Illuminate\Support\Facades\DB;
use DateTime;

class ConsultorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $consultors = CaoUsuario::join('permissao_sistema', 'cao_usuario.co_usuario', '=', 'permissao_sistema.co_usuario')
            ->where('permissao_sistema.co_sistema', '1')->where('permissao_sistema.in_ativo', 'S')
            ->where('permissao_sistema.co_tipo_usuario', '[0,1,2]')->get();



        return view('consultores/consultores', compact('consultors'));
    }

    private function recietaLiquida($consultor, $fechaInicio, $fechaFin)
    {
        $receitaLiquida = DB::table('cao_fatura')
            ->join('cao_os', 'cao_fatura.co_os', '=', 'cao_os.co_os')
            ->join('cao_usuario', 'cao_os.co_usuario', '=', 'cao_usuario.co_usuario')
            ->where('cao_os.co_usuario', '=', $consultor)
            ->whereBetween(DB::raw('DATE_FORMAT(cao_fatura.data_emissao, "%Y-%m")'), [$fechaInicio, $fechaFin])
            ->select(DB::raw('cao_usuario.no_usuario AS consultor, DATE_FORMAT(cao_fatura.data_emissao, "%Y-%m") AS mes, SUM(cao_fatura.valor * (1 - cao_fatura.total_imp_inc / 100)) AS receitaLiquida'))
            ->groupBy('consultor', 'mes')
            ->get();

        $result = [];
        foreach ($receitaLiquida as $item) {
            $result[] = [
                'consultor' => $item->consultor,
                'mes' => $item->mes,
                'receitaLiquida' => $item->receitaLiquida
            ];
        }

        return $result;
    }

    private function costoFijo($consultor)
    {
        $custoFixo = DB::table('CAO_SALARIO')
            ->where('CO_USUARIO', '=', $consultor)
            ->value('BRUT_SALARIO');

        return $custoFixo;
    }

    public function consultoresRelatorio(Request $request)
    {
        // Obtener el valor del campo oculto para los valores seleccionados en el select
        $consultoresDisponiveisArray = json_decode($request->input('consultores_disponibles')[0], true);

        $mesInicio = $request->input('mesInicio');
        $anioInicio = $request->input('anioInicio');
        $mesFin = $request->input('mesFin');
        $anioFin = $request->input('anioFin');

        $fechaInicio = $anioInicio . '-' . $mesInicio;
        $fechaFin = $anioFin . '-' . $mesFin;

        // Calcular los resultados para cada consultor
        $results = [];
        if (!empty($consultoresDisponiveisArray)) {
            foreach ($consultoresDisponiveisArray as $consultor) {
                $result = [];

                // Obtener todas las receitas líquidas del consultor en el rango de fechas
                $receitaLiquida = $this->recietaLiquida($consultor, $fechaInicio, $fechaFin);
                $totalReceitaLiquida = 0;
                foreach ($receitaLiquida as $item) {
                    $totalReceitaLiquida += $item['receitaLiquida'];
                }

                // Obtener el nombre del consultor
                $nombreConsultor = CaoUsuario::find($consultor);

                // Obtener el costo fijo
                $custoFixo = $this->costoFijo($consultor);

                // Obtener la comisión
                $comissao = DB::table('CAO_FATURA')
                    ->join('CAO_OS', 'CAO_FATURA.CO_OS', '=', 'CAO_OS.CO_OS')
                    ->where('CAO_OS.CO_USUARIO', '=', $consultor)
                    ->whereRaw('DATE_FORMAT(CAO_FATURA.DATA_EMISSAO, "%Y-%m") BETWEEN ? AND ?', [$fechaInicio, $fechaFin])
                    ->select(DB::raw('COALESCE(SUM((CAO_FATURA.VALOR - (CAO_FATURA.VALOR * CAO_FATURA.total_imp_inc/100)) * CAO_FATURA.COMISSAO_CN/100), 0) AS total_comissao'))
                    ->value('total_comissao');

                // Calcular el lucro
                $lucro = $totalReceitaLiquida - $custoFixo - $comissao;

                // Agregar los resultados al arreglo
                $result['consultor'] = $nombreConsultor;
                $result['receitaLiquida'] = $totalReceitaLiquida;
                $result['custoFixo'] = $custoFixo;
                $result['comissao'] = $comissao;
                $result['lucro'] = $lucro;
                $results[] = $result;
            }
        }

        return response()->json(['results' => $results]);
    }

    public function graficoConsultores(Request $request)
    {
        $consultoresDisponiveisArray = json_decode($request->input('consultores_disponibles')[0], true);

        $mesInicio = $request->input('mesInicio');
        $anioInicio = $request->input('anioInicio');
        $mesFin = $request->input('mesFin');
        $anioFin = $request->input('anioFin');

        $fechaInicio = $anioInicio . '-' . $mesInicio . '-01';
        $fechaFin = $anioFin . '-' . $mesFin . '-' . date('t', strtotime($anioFin . '-' . $mesFin . '-01'));

        $totalCosto = 0;

        // Validar que la fecha final es posterior o igual a la fecha inicial
        if (strtotime($fechaFin) < strtotime($fechaInicio)) {
            return response()->json(['error' => 'La fecha final debe ser posterior o igual a la fecha inicial.']);
        }

        $chartData = [
            'labels' => [],  // Array to store the labels for X-axis (e.g., months/years)
            'datasets' => [], // Array to store the datasets for the chart
            'receitaLiquida' => [], // Array to store the receita líquida for each consultor
            'custoFixoMedio' => 0,  // Initialize to 0
            'fechaInicio' => date('M Y', strtotime($fechaInicio)),
            'fechaFin' => date('M Y', strtotime($fechaFin)),
        ];

        foreach ($consultoresDisponiveisArray as $consultor) {
            $result = [];

            // Obtener la receita líquida por mes para cada consultor dentro del rango de fechas dado
            $receitasLiquidas = $this->recietaLiquida($consultor, $fechaInicio, $fechaFin);
            //dd($receitasLiquidas);
            $receitaLiquidaPorMes = [];

            // Inicializar el arreglo con ceros para cada mes dentro del rango de fechas
            $currentDate = new DateTime($fechaInicio);
            $fechaFinObj = new DateTime($fechaFin);
            while ($currentDate <= $fechaFinObj) {
                $mesAnio = $currentDate->format('M Y');
                $receitaLiquidaPorMes[$mesAnio] = 0;
                $chartData['labels'][] = $mesAnio;
                $currentDate->modify('+1 month');
            }

            // Sumar la receita líquida para cada mes dentro del rango de fechas
            foreach ($receitasLiquidas as $receitaLiquida) {
                $mesAnio = date('M Y', strtotime($receitaLiquida['mes']));
                if (isset($receitaLiquidaPorMes[$mesAnio])) {
                    $receitaLiquidaPorMes[$mesAnio] += $receitaLiquida['receitaLiquida'];
                }
            }


            // Agregar los resultados al arreglo
            $datasets = [
                'label' => $consultor,
                'data' => array_values($receitaLiquidaPorMes),
            ];
            $chartData['datasets'][] = $datasets;
            $chartData['receitaLiquida'][$consultor] = $receitaLiquidaPorMes;


            $costo = $this->costoFijo($consultor);
            $totalCosto += $costo;
        }

        $countConsultores = count($consultoresDisponiveisArray);
        $chartData['custoFixoMedio'] = $countConsultores > 0 ? $totalCosto / $countConsultores : 0;

        return response()->json(['results' => $chartData]);
    }

    public function pizzaConsultores(Request $request)
    {
        // Obtener el valor del campo oculto para los valores seleccionados en el select
        $consultoresDisponiveisArray = json_decode($request->input('consultores_disponibles')[0], true);

        $mesInicio = $request->input('mesInicio');
        $anioInicio = $request->input('anioInicio');
        $mesFin = $request->input('mesFin');
        $anioFin = $request->input('anioFin');

        $fechaInicio = $anioInicio . '-' . $mesInicio;
        $fechaFin = $anioFin . '-' . $mesFin;

        // Calcular la receita líquida total en el rango de fechas especificado
        $receitaLiquidaTotal = 0;
        $receitasLiquidas = [];
        foreach ($consultoresDisponiveisArray as $consultor) {
            $receitasLiquidasConsultor = $this->recietaLiquida($consultor, $fechaInicio, $fechaFin);
            $receitasLiquidas = array_merge($receitasLiquidas, $receitasLiquidasConsultor);
            $receitaLiquidaTotal += array_sum(array_column($receitasLiquidasConsultor, 'receitaLiquida'));
        }

        // Calcular los resultados para cada consultor
        $results = [];
        foreach ($consultoresDisponiveisArray as $consultor) {
            $result = [];

            // Obtener la receita líquida del consultor
            $receitasLiquidasConsultor = $this->recietaLiquida($consultor, $fechaInicio, $fechaFin);

            // Calcular la receita líquida del consultor y su porcentaje en relación con la receita líquida total
            $receitaLiquidaConsultor = array_sum(array_column($receitasLiquidasConsultor, 'receitaLiquida'));
            $porcentajeReceitaLiquida = $receitaLiquidaTotal != 0 ? round(($receitaLiquidaConsultor / $receitaLiquidaTotal) * 100, 2) : 0;

            // Agregar los resultados al arreglo
            $consultor = CaoUsuario::find($consultor);
            $result['consultor'] = $consultor->no_usuario;
            $result['receitaLiquida'] = $receitaLiquidaConsultor;
            $result['porcentajeReceitaLiquida'] = $porcentajeReceitaLiquida;

            $results[] = $result;
        }

        return response()->json(['results' => $results]);
    }
}
