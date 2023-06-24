@extends('layouts/app')
@section('title')
CAOL - Controle de Atividades Online - Agence Interativa
@endsection
@section('content')

<body class="font-sans antialiased">
    <div class="card w-90 mx-auto">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-12">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-1">
                            <h5>Período</h5>
                        </div>
                        <div class="col-md-11 d-flex justify-content-start align-items-center">
                            <div class="me-2">
                                <select id="selectPeriodoInicial" class="form-select shadow-sm h-72 max-h-96 w-auto">
                                    <option selected>Selecione o mês</option>
                                    <option>Jan</option>
                                    <option>Feb</option>
                                    <option>Mar</option>
                                    <option>Apr</option>
                                    <option>May</option>
                                    <option>Jun</option>
                                    <option>Jul</option>
                                    <option>Aug</option>
                                    <option>Sep</option>
                                    <option>Oct</option>
                                    <option>Nov</option>
                                    <option>Dec</option>
                                </select>
                            </div>
                            <div class="me-2">
                                <select id="selectAnoInicial" class="form-select shadow-sm h-72 max-h-96 w-auto">
                                    <option selected>Selecione o ano</option>
                                    <option>2003</option>
                                    <option>2004</option>
                                    <option>2005</option>
                                    <option>2006</option>
                                    <option>2007</option>
                                </select>
                            </div>
                            <span class="align-items-center">a</span>
                            <div class="ms-2 me-2">
                                <select id="selectPeriodoFinal" class="form-select shadow-sm h-72 max-h-96 w-auto">
                                    <option selected>Selecione o mês</option>
                                    <option>Jan</option>
                                    <option>Feb</option>
                                    <option>Mar</option>
                                    <option>Apr</option>
                                    <option>May</option>
                                    <option>Jun</option>
                                    <option>Jul</option>
                                    <option>Aug</option>
                                    <option>Sep</option>
                                    <option>Oct</option>
                                    <option>Nov</option>
                                    <option>Dec</option>
                                </select>
                            </div>
                            <div class="me-2">
                                <select id="selectAnoFinal" class="form-select shadow-sm h-72 max-h-96 w-auto">
                                    <option selected>Selecione o ano</option>
                                    <option>2003</option>
                                    <option>2004</option>
                                    <option>2005</option>
                                    <option>2006</option>
                                    <option>2007</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-4">
                            <label for="selectConsultores">Consultores:</label>
                            <select id="select1" class="form-select shadow-sm h-72 max-h-96 w-90 min-width-40 sortable" multiple="multiple">
                                @foreach ($consultors as $consultor)
                                <option value="{{ $consultor['co_usuario'] }}">{{ $consultor['no_usuario'] }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2">
                            <div class="d-flex flex-column justify-content-center align-items-center mb-3">
                                <button type="button" id="undo_redo_rightAll" class="btn btn-secondary btn-sm my-2"><i class="fas fa-angle-double-right"></i></button>
                                <button type="button" id="undo_redo_rightSelected" class="btn btn-secondary btn-sm my-2"><i class="fas fa-angle-right"></i>
                                </button>
                                <button type="button" id="undo_redo_leftSelected" class="btn btn-secondary btn-sm my-2">
                                    <i class="fas fa-angle-left"></i></button>
                                <button type="button" id="undo_redo_leftAll" class="btn btn-secondary btn-sm my-2"><i class="fas fa-angle-double-left"></i></button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="selectConsultoresSelecionados">Consultores Selecionados:</label>
                            <select name="to[]" id="undo_redo_to" class="form-select shadow-sm h-72 max-h-96 w-90 min-width-40" multiple="multiple" onchange="updateHiddenFields()"></select>
                        </div>
                        <div class="col-md-2">
                            <div class="d-flex flex-column justify-content-center align-items-center mb-3 btn-group">
                                <form id="form-relatorio" method="POST" action="{{ route('relatorio') }}">
                                    @csrf
                                    <input type="hidden" name="consultores_disponibles[]" id="consultoresDisponiveisArray">
                                    <input type="hidden" name="mesInicio" id="mesInicio">
                                    <input type="hidden" name="anioInicio" id="anioInicio">
                                    <input type="hidden" name="mesFin" id="mesFin">
                                    <input type="hidden" name="anioFin" id="anioFin">
                                    <button type="submit" id="relatorio" class="btn btn-secondary btn-sm mb-2 custom-btn-size">
                                        <i class="fas fa-file-alt"></i> Relatório
                                    </button>

                                </form>

                                <form id="form-grafico" method="POST" action="{{ route('grafico') }}">
                                    @csrf
                                    <input type="hidden" name="consultores_disponibles[]" id="consultoresDisponiveisArrayGrafico">
                                    <input type="hidden" name="mesInicio" id="mesInicioGrafico">
                                    <input type="hidden" name="anioInicio" id="anioInicioGrafico">
                                    <input type="hidden" name="mesFin" id="mesFinGrafico">
                                    <input type="hidden" name="anioFin" id="anioFinGrafico">
                                    <button type="submit" id="graficobutton" class="btn btn-secondary btn-sm mb-2 custom-btn-size">
                                        <i class="fas fa-chart-bar"></i> Gráfico
                                    </button>

                                </form>
                                <form id="form-pizza" method="POST" action="{{ route('pizza') }}">
                                    @csrf
                                    <input type="hidden" name="consultores_disponibles[]" id="consultoresDisponiveisArrayPizza">
                                    <input type="hidden" name="mesInicio" id="mesInicioPizza">
                                    <input type="hidden" name="anioInicio" id="anioInicioPizza">
                                    <input type="hidden" name="mesFin" id="mesFinPizza">
                                    <input type="hidden" name="anioFin" id="anioFinPizza">
                                    <button type="submit" id="pizzabutton" class="btn btn-secondary btn-sm custom-btn-size"><i class="fas fa-chart-pie"></i> Pizza
                                    </button>
                                    </button>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

            <section id="relatorioTable" class="mt-5" style="display: none;">
                <h4>Resultados</h4>
                <table class="table table-responsive table-striped">
                    <thead>
                        <tr>
                            <th>Consultor</th>
                            <th>Receita Líquida</th>
                            <th>Costo Fijo</th>
                            <th>Comissão</th>
                            <th>Lucro</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>

            </section>

            <section id="graficoConsultores" class="mt-5 mb-5" style="display: none;">
                <h4>Gráfico</h4>
                <canvas id="grafico"></canvas>
            </section>

            <section id="graficoPizza" class="mt-5 mb-5 h-100 max-h-150" style="display: none;">
                <h4>Pizza</h4>
                <canvas id="myPizzaChart"></canvas>
            </section>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        let relatorioUrl = "{{ route('relatorio') }}";
        let graficoUrl = "{{ route('grafico') }}";
        let pizzaUrl = "{{ route('pizza') }}";
    </script>

    @endsection
</body>
