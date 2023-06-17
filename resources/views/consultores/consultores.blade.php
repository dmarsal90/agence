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
                                        <option>Jan</option>
                                        <option>Fev</option>
                                        <option>Mar</option>
                                        <option>Abr</option>
                                        <option>Mai</option>
                                        <option>Jun</option>
                                        <option>Jul</option>
                                        <option>Ago</option>
                                        <option selected>Set</option>
                                        <option>Out</option>
                                        <option>Nov</option>
                                        <option>Dez</option>
                                    </select>
                                </div>
                                <div class="me-2">
                                    <select id="selectAnoInicial" class="form-select shadow-sm h-72 max-h-96 w-auto">
                                        <option>2003</option>
                                        <option>2004</option>
                                        <option>2005</option>
                                        <option>2006</option>
                                        <option selected>2007</option>
                                    </select>
                                </div>
                                <span class="align-items-center">a</span>
                                <div class="ms-2 me-2">
                                    <select id="selectPeriodoFinal" class="form-select shadow-sm h-72 max-h-96 w-auto">
                                        <option>Jan</option>
                                        <option>Fev</option>
                                        <option>Mar</option>
                                        <option>Abr</option>
                                        <option>Mai</option>
                                        <option>Jun</option>
                                        <option>Jul</option>
                                        <option>Ago</option>
                                        <option selected>Set</option>
                                        <option>Out</option>
                                        <option>Nov</option>
                                        <option>Dez</option>
                                    </select>
                                </div>
                                <div class="me-2">
                                    <select id="selectAnoFinal" class="form-select shadow-sm h-72 max-h-96 w-auto">
                                        <option>2003</option>
                                        <option>2004</option>
                                        <option>2005</option>
                                        <option>2006</option>
                                        <option selected>2007</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <div class="row justify-content-center align-items-center">
                            <div class="col-md-4">
                                <label for="selectConsultores">Consultores:</label>
                                <select id="select1"
                                    class="form-select shadow-sm h-72 max-h-96 w-90 min-width-40 sortable"
                                    multiple="multiple">
                                    @foreach ($consultors as $consultor)
                                        <option value="{{ $consultor['co_usuario'] }}">{{ $consultor['no_usuario'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2">
                                <div class="d-flex flex-column justify-content-center align-items-center mb-3">
                                    <button type="button" id="undo_redo_rightAll" class="btn btn-secondary btn-sm my-2"><i
                                            class="fas fa-angle-double-right"></i></button>
                                    <button type="button" id="undo_redo_rightSelected"
                                        class="btn btn-secondary btn-sm my-2"><i class="fas fa-angle-right"></i>
                                    </button>
                                    <button type="button" id="undo_redo_leftSelected"
                                        class="btn btn-secondary btn-sm my-2">
                                        <i class="fas fa-angle-left"></i></button>
                                    <button type="button" id="undo_redo_leftAll" class="btn btn-secondary btn-sm my-2"><i
                                            class="fas fa-angle-double-left"></i></button>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="selectConsultoresSelecionados">Consultores Selecionados:</label>
                                <select name="to[]" id="undo_redo_to"
                                    class="form-select shadow-sm h-72 max-h-96 w-90 min-width-40" multiple="multiple"
                                    onchange="updateHiddenFields()"></select>
                            </div>
                            <div class="col-md-2">
                                <div class="d-flex flex-column justify-content-center align-items-center mb-3 btn-group">
                                    <form id="form-relatorio" method="POST" action="{{ route('relatorio') }}">
                                        @csrf
                                        <input type="hidden" name="consultores_disponibles[]"
                                            id="consultoresDisponiveisArray">
                                        <input type="hidden" name="mesInicio" id="mesInicio">
                                        <input type="hidden" name="anioInicio" id="anioInicio">
                                        <input type="hidden" name="mesFin" id="mesFin">
                                        <input type="hidden" name="anioFin" id="anioFin">
                                        <button type="submit" id="relatorio"
                                            class="btn btn-secondary btn-sm mb-2 custom-btn-size">
                                            <i class="fas fa-file-alt"></i> Relatório
                                        </button>

                                    </form>

                                    <button type="button" class="btn btn-secondary btn-sm mb-2 custom-btn-size"><i
                                            class="fas fa-chart-bar"></i> Gráfico
                                    </button>
                                    <button type="button" class="btn btn-secondary btn-sm custom-btn-size"><i
                                            class="fas fa-chart-pie"></i> Pizza
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <section id="relatorio" class="mt-5" style="display: none;">
                    @include('reports/relatorio')
                </section>
            </div>
        </div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script>
            $(document).ready(function() {
                // Obtener los selectores de los select
                var select1 = $('#select1');
                var select2 = $('#undo_redo_to');

                // Función para mover los elementos seleccionados desde select1 a select2
                $('#undo_redo_rightSelected').click(function() {
                    select1.find('option:selected').appendTo(select2);
                });

                // Función para mover todos los elementos desde select1 a select2
                $('#undo_redo_rightAll').click(function() {
                    select1.find('option').appendTo(select2);
                });

                // Función para mover los elementos seleccionados desde select2 a select1
                $('#undo_redo_leftSelected').click(function() {
                    select2.find('option:selected').appendTo(select1);
                });

                // Función para mover todos los elementos desde select2 a select1
                $('#undo_redo_leftAll').click(function() {
                    select2.find('option').appendTo(select1);
                });

                // Función para deshacer el último movimiento
                $('#undo_redo_undo').click(function() {
                    select2.find('option:selected').prev().attr('selected', 'selected');
                    select2.find('option:selected').appendTo(select1);
                });

                // Función para rehacer el último movimiento deshecho
                $('#undo_redo_redo').click(function() {
                    select1.find('option:selected').appendTo(select2);
                });

                $('#relatorio').click(function() {
                    let valores = $('#undo_redo_to option').map(function() {
                        return $(this).val();
                    }).get();
                    console.log(valores);
                    actualizarCamposOcultos();
                    $('#form-relatorio').submit();
                    //enviarFormulario();
                });

            });

            function actualizarCamposOcultos() {
                // Actualizar los valores de los campos ocultos con los valores seleccionados en los selects
                document.getElementById('mesInicio').value = selectPeriodoInicial.value;
                document.getElementById('anioInicio').value = selectAnoInicial.value;
                document.getElementById('mesFin').value = selectPeriodoFinal.value;
                document.getElementById('anioFin').value = selectAnoFinal.value;

                // Actualizar el campo oculto de consultoresDisponiveisArray con todos los valores del dropdown
                var consultoresDisponiveisArray = document.getElementById('consultoresDisponiveisArray');
                var valoresDropdown = $('#undo_redo_to option').map(function() {
                    return $(this).val();
                }).get();
                consultoresDisponiveisArray.value = JSON.stringify(valoresDropdown);
            }

            function enviarFormulario() {
                // Actualizar los campos ocultos antes de enviar el formulario
                actualizarCamposOcultos();

                // Obtener el formulario
                var formulario = document.getElementById('form-relatorio');

                console.log($('#undo_redo_to option'));

                // Enviar el formulario
                formulario.submit();
            }
        </script>
    @endsection
</body>
