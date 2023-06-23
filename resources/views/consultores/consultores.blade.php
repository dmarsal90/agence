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
                                    <option>Fev</option>
                                    <option>Mar</option>
                                    <option>Abr</option>
                                    <option>Mai</option>
                                    <option>Jun</option>
                                    <option>Jul</option>
                                    <option>Ago</option>
                                    <option>Set</option>
                                    <option>Out</option>
                                    <option>Nov</option>
                                    <option>Dez</option>
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
                                    <option>Fev</option>
                                    <option>Mar</option>
                                    <option>Abr</option>
                                    <option>Mai</option>
                                    <option>Jun</option>
                                    <option>Jul</option>
                                    <option>Ago</option>
                                    <option>Set</option>
                                    <option>Out</option>
                                    <option>Nov</option>
                                    <option>Dez</option>
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
                <h4>Grfico</h4>
                <canvas id="myChart"></canvas>
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
            $('#graficobutton').click(function() {
                let valores = $('#undo_redo_to option').map(function() {
                    return $(this).val();
                }).get();
                console.log(valores);
                actualizarCamposOcultos();
                //  $('#form-grafico').submit();
                enviarFormularioGrafico();
            });

            $('#pizzabutton').click(function() {
                let valores = $('#undo_redo_to option').map(function() {
                    return $(this).val();
                }).get();
                console.log(valores);
                actualizarCamposOcultos();
                //  $('#form-grafico').submit();
                enviarFormularioPizza();
            });

        });


        selectPeriodoInicial.addEventListener('change', actualizarCamposOcultos);
        selectAnoInicial.addEventListener('change', actualizarCamposOcultos);
        selectPeriodoFinal.addEventListener('change', actualizarCamposOcultos);
        selectAnoFinal.addEventListener('change', actualizarCamposOcultos);

        function actualizarCamposOcultos() {
            // Actualizar los valores de los campos ocultos con los valores seleccionados en los selects
            document.getElementById('mesInicio').value = selectPeriodoInicial.value;
            document.getElementById('anioInicio').value = selectAnoInicial.value;
            document.getElementById('mesFin').value = selectPeriodoFinal.value;
            document.getElementById('anioFin').value = selectAnoFinal.value;

            // Actualizar el campo oculto de consultoresDisponiveisArray con todos los valores del dropdown
            var consultoresDisponiveisArray = document.getElementById('consultoresDisponiveisArray');
            var valoresSelect = $('#undo_redo_to option').map(function() {
                return $(this).val();
            }).get();
            consultoresDisponiveisArray.value = JSON.stringify(valoresSelect);

        }

        function actualizarCamposOcultosGrafico() {
            // Actualizar los valores de los campos ocultos con los valores seleccionados en los selects
            document.getElementById('mesInicioGrafico').value = selectPeriodoInicial.value;
            document.getElementById('anioInicioGrafico').value = selectAnoInicial.value;
            document.getElementById('mesFinGrafico').value = selectPeriodoFinal.value;
            document.getElementById('anioFinGrafico').value = selectAnoFinal.value;

            // Actualizar el campo oculto de consultoresDisponiveisArray con todos los valores del dropdown
            var consultoresDisponiveisArray = document.getElementById('consultoresDisponiveisArrayGrafico');
            var valoresSelect = $('#undo_redo_to option').map(function() {
                return $(this).val();
            }).get();
            consultoresDisponiveisArray.value = JSON.stringify(valoresSelect);

        }

        function actualizarCamposOcultosPizza() {
            // Actualizar los valores de los campos ocultos con los valores seleccionados en los selects
            document.getElementById('mesInicioPizza').value = selectPeriodoInicial.value;
            document.getElementById('anioInicioPizza').value = selectAnoInicial.value;
            document.getElementById('mesFinPizza').value = selectPeriodoFinal.value;
            document.getElementById('anioFinPizza').value = selectAnoFinal.value;

            // Actualizar el campo oculto de consultoresDisponiveisArray con todos los valores del dropdown
            var consultoresDisponiveisArray = document.getElementById('consultoresDisponiveisArrayPizza');
            var valoresSelect = $('#undo_redo_to option').map(function() {
                return $(this).val();
            }).get();
            consultoresDisponiveisArray.value = JSON.stringify(valoresSelect);

        }

        function enviarFormulario() {
            // Actualizar los campos ocultos antes de enviar el formulario
            actualizarCamposOcultos();

            // Obtener el formulario
            var formulario = document.getElementById('form-relatorio');

            // Enviar el formulario
            formulario.submit();
        }


        function enviarFormularioGrafico() {
            // Actualizar los campos ocultos antes de enviar el formulario
            actualizarCamposOcultosGrafico();
            // Obtener el formulario
            var formulario = document.getElementById('form-grafico');
            // Enviar el formulario
            formulario.submit();
        }

        function enviarFormularioPizza() {
            // Actualizar los campos ocultos antes de enviar el formulario
            actualizarCamposOcultosPizza();
            // Obtener el formulario
            var formulario = document.getElementById('form-pizza');
            // Enviar el formulario
            formulario.submit();
        }
    </script>
    <script>
        $(document).ready(function() {
            $('#form-relatorio').on('submit', function(event) {
                event.preventDefault();
                var formData = $(this).serialize();

                $.ajax({
                    method: 'POST',
                    url: '{{ route("relatorio") }}',
                    data: formData,
                    success: function(response) {
                        console.log(response);
                        $('#relatorioTable').show();
                        $('#graficoConsultores').hide();
                        $('#graficoPizza').hide();

                        // Limpiar la tabla antes de agregar nuevas filas
                        $('#relatorioTable tbody').empty();

                        // Agregar una nueva fila a la tabla por cada resultado
                        $.each(response.results, function(index, result) {
                            var row = $('<tr>');
                            $('<td>').html(result.consultor.no_usuario).appendTo(row);
                            $('<td>').html(result.comissao).appendTo(row);
                            $('<td>').html(result.custoFixo ? result.custoFixo : 0).appendTo(row);
                            $('<td>').html(result.lucro).appendTo(row);
                            $('<td>').html(result.receitaLiquida).appendTo(row);
                            $('#relatorioTable tbody').append(row);
                        });
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                    }
                });
            });
        });
    </script>
    <script>
       $(document).ready(function() {
    $('#form-grafico').on('submit', function(event) {
        event.preventDefault();
        var formData = $(this).serialize();

        $.ajax({
            method: 'POST',
            url: '{{ route("grafico") }}',
            data: formData,
            success: function(response) {
                console.log(response);
                var chartData = response.results;

                // Parse the start and end dates
                var startDate = new Date(chartData.fechaInicio);
                var endDate = new Date(chartData.fechaFin);

                // Generate an array of dates between the start and end dates
                var dates = [];
                var currentDate = new Date(startDate.getFullYear(), startDate.getMonth(), 1);
                while (currentDate <= endDate) {
                    dates.push(currentDate);
                    currentDate = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 1);
                }

                // Format the date labels based on the range of dates
                var dateLabels = dates.map(function(date) {
                    return date.toLocaleString('default', {
                        month: 'short',
                        year: 'numeric'
                    });
                });

                // Create an array of revenue data for each consultant
                var datasets = [];
                for (var i = 0; i < chartData.labels.length; i++) {
                    var consultantRevenue = Array(dates.length).fill(0);
                    if (Array.isArray(chartData.receitaLiquida[i])) {
                        for (var j = 0; j < chartData.receitaLiquida[i].length; j++) {
                            var dateIndex = dates.indexOf(new Date(chartData.receitaLiquida[i][j][0]));
                            if (dateIndex >= 0) {
                                consultantRevenue[dateIndex] = chartData.receitaLiquida[i][j][1];
                            }
                        }
                    }
                    datasets.push({
                        label: chartData.labels[i],
                        data: consultantRevenue,
                        backgroundColor: getRandomColor(i),
                        borderWidth: 1,
                        type: 'bar'
                    });
                }

                // Create an array of fixed cost data for each month
                var fixedCostData = Array(dates.length).fill(chartData.custoFixoMedio);

                $('#relatorioTable').hide();
                $('#graficoPizza').hide();
                $('#graficoConsultores').show();
                $('#graficoConsultores').html('<canvas id="myChart"></canvas>');

                var ctx = document.getElementById('myChart').getContext('2d');

                var chart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: dateLabels,
                        datasets: [{
                            label: 'Custo Fixo Médio',
                            data: fixedCostData,
                            backgroundColor: 'rgba(0, 0, 0, 0.1)',
                            borderWidth: 1,
                            type: 'line'
                        }].concat(datasets)
                    },
                    options: {
                        scales: {
                            xAxes: [{
                                stacked: false
                            }],
                            yAxes: [{
                                type: 'linear',
                                display: true,
                                position: 'left',
                                id: 'y-axis-1',
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Receita Líquida / Custo Fixo Médio'
                                },
                                ticks: {
                                    beginAtZero: true,
                                    max: 32000,
                                    callback: function(value, index, values) {
                                        return 'R$' + value.toFixed(2);
                                    }
                                }
                            }, {
                                type: 'linear',
                                display: true,
                                position: 'right',
                                id: 'y-axis-2',
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Custo Fixo Médio'
                                },
                                ticks: {
                                    beginAtZero: true,
                                    max: 32000,
                                    callback: function(value, index, values) {
                                        return 'R$' + value.toFixed(2);
                                    }
                                }
                            }]
                        },
                        title: {
                            display: true,
                            text: 'Performance Comercial'
                        },
                        plugins: {
                            legend: {
                                labels: {
                                    generateLabels: function(chart) {
                                        var data = chart.data;
                                        if (data.labels.length && data.datasets.length) {
                                            return data.datasets.map(function(dataset, i) {
                                                // Add label for revenue data
                                                return {
                                                    text: dataset.label,
                                                    fillStyle: dataset.backgroundColor,
                                                    strokeStyle: dataset.borderColor,
                                                    lineWidth: dataset.borderWidth,
                                                    hidden: dataset.hidden,
                                                    index: i
                                                };
                                            });
                                        }
                                        return [];
                                    }
                                }
                            }
                        }
                    }
                });
            },
            error: function(xhr, textStatus, errorThrown) {
                console.log('Error en la solicitud ajax: ' + textStatus);
            }
        });
    });

    function getRandomColor(index) {
        var colors = [
            'rgba(255, 99, 132, 0.5)',
            'rgba(54, 162, 235, 0.5)',
            'rgba(255, 206, 86, 0.5)',
            'rgba(75, 192, 192, 0.5)',
            'rgba(153, 102, 255, 0.5)',
            'rgba(255, 159, 64, 0.5)'
        ];
        return colors[index % colors.length];
    }
});
    </script>

    <script>
        $(document).ready(function() {
            $('#form-pizza').on('submit', function(event) {
                event.preventDefault();
                var formData = $(this).serialize();

                $.ajax({
                    method: 'POST',
                    url: '{{ route("pizza") }}',
                    data: formData,
                    success: function(response) {
                        console.log(response);
                        $('#relatorioTable').hide();
                        $('#graficoConsultores').hide();
                        $('#graficoPizza').show();

                        var results = response.results;

                        // Generate an array of labels and values for each consultant
                        var labels = [];
                        var values = [];
                        results.forEach(function(result) {
                            labels.push(result.consultor);
                            values.push(result.receitaLiquida);
                        });

                        // Generate an array of random colors for each dataset
                        var colors = [];
                        for (var i = 0; i < labels.length; i++) {
                            colors.push(getRandomColor());
                        }

                        // Create the data object for the chart
                        var data = {
                            labels: labels,
                            datasets: [{
                                data: values,
                                backgroundColor: colors
                            }]
                        };

                        // Create the options object for the chart
                        var options = {};

                        // Create the chart
                        var ctx = document.getElementById('myPizzaChart').getContext('2d');
                        new Chart(ctx, {
                            type: 'pie',
                            data: data,
                            options: options
                        });
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            });
        });

        // Function to generate a random color
        function getRandomColor() {
            var letters = '0123456789ABCDEF';
            var color = '#';
            for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }
    </script>


    @endsection
</body>
