<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CaoUsuario;
use App\Models\CaoFatura;
use App\Models\CaoSalario;
use Illuminate\Support\Facades\DB;

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

    public function consultoresRelatorio(Request $request)
    {
        $consultoresDisponiveis = [];
        // Obtener los consultores seleccionados en el formulario



        // Obtener el valor del campo oculto para los valores seleccionados en el select
        $consultoresDisponiveisArray = json_decode($request->input('consultores_disponibles')[0], true);


        $mesInicio = $request->input('mesInicio');
        $anioInicio = $request->input('anioInicio');
        $mesFin = $request->input('mesFin');
        $anioFin = $request->input('anioFin');

        $fechaInicio = $anioInicio . '/' . $mesInicio;
        $fechaFin = $anioFin . '/' . $mesFin;

        // dd($fechaFin);



        // Calcular los resultados para cada consultor
        $results = [];
        foreach ($consultoresDisponiveisArray as $consultor) {
            $result = [];
            //dd($consultor);

            // Obtener la receita líquida
            // Obtener la receita líquida
            $receitaLiquida = DB::table('CAO_FATURA')
                ->join('CAO_OS', 'CAO_FATURA.CO_OS', '=', 'CAO_OS.CO_OS')
                ->where('CAO_OS.CO_USUARIO', '=', $consultor)
                ->whereBetween(DB::raw('DATE_FORMAT(CAO_FATURA.DATA_EMISSAO, "%Y-%m")'), [$fechaInicio, $fechaFin])
                ->select(DB::raw('SUM(CAO_FATURA.VALOR * (1 - CAO_FATURA.TOTAL_IMP_INC / 100)) AS receitaLiquida'))
                ->value('receitaLiquida');

            // Obtener el costo fijo
            $custoFixo = DB::table('CAO_SALARIO')
                ->where('CO_USUARIO', '=', $consultor)
                ->value('BRUT_SALARIO');

            // Obtener la comisión
            $comissao = DB::table('CAO_FATURA')
                ->join('CAO_OS', 'CAO_FATURA.CO_OS', '=', 'CAO_OS.CO_OS')
                ->where('CAO_OS.CO_USUARIO', '=', $consultor)
                ->whereRaw('DATE_FORMAT(CAO_FATURA.DATA_EMISSAO, "%Y-%m") BETWEEN ? AND ?', [$fechaInicio, $fechaFin])
                ->select(DB::raw('SUM((CAO_FATURA.VALOR - (CAO_FATURA.VALOR * CAO_FATURA.total_imp_inc/100)) * CAO_FATURA.COMISSAO_CN/100) AS total_comissao'))
                ->value('total_comissao');

            // Calcular el lucro
            $lucro = $receitaLiquida - $custoFixo - $comissao;

            // Agregar los resultados al arreglo
            $result['consultor'] = CaoUsuario::find($consultor);
            $result['receitaLiquida'] = $receitaLiquida;
            $result['custoFixo'] = $custoFixo;
            $result['comissao'] = $comissao;
            $result['lucro'] = $lucro;
            $results[] = $result;
        }


        return response()->json(['results' => $results]);
    }


    public function desempenho()
    {
    }
}
