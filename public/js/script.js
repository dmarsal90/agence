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
$(document).ready(function() {
    $('#form-relatorio').on('submit', function(event) {
        event.preventDefault();
        var formData = $(this).serialize();

        $.ajax({
            method: 'POST',
            url: relatorioUrl,
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
$(document).ready(function() {
    $('#form-grafico').on('submit', function(event) {
        event.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            method: 'POST',
            url: graficoUrl,
            data: formData,
            success: function(response) {
                // Mostrar el contenedor del gráfico y ocultar otros elementos
                $('#relatorioTable').hide();
                $('#graficoConsultores').show();
                $('#graficoPizza').hide();

                var labels = response.results.labels;
                var datasets = response.results.datasets;
                var custoFixoMedio = response.results.custoFixoMedio;

                // Crear un arreglo de colores aleatorios para los consultores
                var colores = [];
                for (var i = 0; i < datasets.length; i++) {
                    colores.push(getRandomColor());
                }

                // Asignar un color aleatorio a cada dataset
                for (var i = 0; i < datasets.length; i++) {
                    datasets[i].backgroundColor = colores[i];
                    datasets[i].borderColor = colores[i];
                    datasets[i].borderWidth = 1;
                }

                // Eliminar las etiquetas repetidas del eje x
                var uniqueLabels = [];
                for (var i = 0; i < labels.length; i++) {
                    if (!uniqueLabels.includes(labels[i])) {
                        uniqueLabels.push(labels[i]);
                    }
                }

                var config = {
                    type: 'bar',
                    data: {
                        labels: uniqueLabels,
                        datasets: datasets
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Performance Comercial'
                        },
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    max: 32000,
                                    stepSize: 4000
                                },
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Receita líquida (R$)'
                                }
                            }],
                            xAxes: [{
                                barPercentage: 0.8,
                                offset: true,
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Mês/Ano'
                                }
                            }]
                        }
                    }
                };

                // Agregar una línea para el costo fijo promedio
                var custoFixoDataset = {
                    label: 'Custo fixo médio',
                    data: Array(uniqueLabels.length).fill(custoFixoMedio),
                    borderColor: 'rgba(255, 0, 0, 1)',
                    borderWidth: 2,
                    fill: false,
                    type: 'line',
                    yAxisID: 'custoFixoAxis'
                };
                config.data.datasets.push(custoFixoDataset);

                // Agregar un eje y para el costo fijo promedio
                config.options.scales.yAxes.push({
                    id: 'custoFixoAxis',
                    position: 'right',
                    ticks: {
                        min: 0,
                        max: 2 * custoFixoMedio,
                        stepSize: custoFixoMedio
                    },
                    gridLines: {
                        drawOnChartArea: false
                    },
                    scaleLabel: {
                        display: true,
                        labelString: 'Custo fixo médio (R$)'
                    }
                });

                // Crear el gráfico
                var ctx = document.getElementById('grafico').getContext('2d');
                var myChart = new Chart(ctx, config);
            }
        });

    });
});
$(document).ready(function() {
    $('#form-pizza').on('submit', function(event) {
        event.preventDefault();
        var formData = $(this).serialize();

        $.ajax({
            method: 'POST',
            url: pizzaUrl,
            data: formData,
            success: function(response) {
                console.log(response);
                $('#relatorioTable').hide();
                $('#graficoConsultores').hide();
                $('#graficoPizza').show();

                var results = response.results;

                // Generate an array of labels and values for each consultant
                var labels = [];
                var percentages = [];
                results.forEach(function(result) {
                    labels.push(result.consultor);
                    percentages.push(result.porcentajeReceitaLiquida);
                });

                // Generate an array of random colors for each dataset
                var colors = [];
                for (var i = 0; i < labels.length; i++) {
                    colors.push(getRandomColor());
                }

                var options = {
                    title: {
                        display: true,
                        text: 'Participacao na Receita Liquida'
                    }
                };

                // Create the data object for the chart
                var data = {
                    labels: labels,
                    datasets: [{
                        data: percentages,
                        backgroundColor: colors,
                        options: options
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
