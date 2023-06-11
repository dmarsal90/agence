@extends('layouts/app')
@section('title')
CAOL - Controle de Atividades Online - Agence Interativa
@endsection
@section('content')

<body class="font-sans antialiased">
    <div class="container my-5">
        <div class="card shadow-lg border-4">
            <div class="card-body">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-4">
                        <select name="from[]" id="undo_redo" class="form-control shadow-sm h-72 max-h-96 w-auto" multiple="multiple">
                            @foreach ($consultores as $consultor)
                            <option value="{{ $consultor['id'] }}">{{ $consultor['no_usuario'] }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-2">
                        <div class="d-flex flex-column justify-content-center align-items-center mb-3">
                            <button type="button" id="undo_redo_undo" class="btn btn-primary btn-sm"><i class="fa fa-undo"></i></button>

                            <button type="button" id="undo_redo_rightAll" class="btn btn-secondary btn-sm my-2"><i class="fa fa-angle-double-right"></i></button>

                            <button type="button" id="undo_redo_rightSelected" class="btn btn-secondary btn-sm my-2"><i class="fa fa-angle-right"></i></button>

                            <button type="button" id="undo_redo_leftSelected" class="btn btn-secondary btn-sm my-2"><i class="fa fa-angle-left"></i></button>

                            <button type="button" id="undo_redo_leftAll" class="btn btn-secondary btn-sm my-2"><i class="fa fa-angle-double-left"></i></button>

                            <button type="button" id="undo_redo_redo" class="btn btn-warning btn-sm my-2"><i class="fa fa-repeat"></i></button>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <select name="to[]" id="undo_redo_to" class="form-control shadow-sm h-72 max-h-96 w-auto" multiple="multiple"></select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.ui.multiselect/1.13.6/jquery.multiselect.css">
    <script src="https://cdn.jsdelivr.net/jquery.ui.multiselect/1.13.6/jquery.multiselect.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#undo_redo').multiselect({
                keepRenderingSort: true,
                afterMoveToRight: function() {
                    $('#undo_redo_to').multiselect('refresh');
                },
                afterMoveToLeft: function() {
                    $('#undo_redo_to').multiselect('refresh');
                }
            });
            $('#undo_redo_to').multiselect({
                keepRenderingSort: true,
                afterMoveToRight: function() {
                    $('#undo_redo').multiselect('refresh');
                },
                afterMoveToLeft: function() {
                    $('#undo_redo').multiselect('refresh');
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#undo_redo_rightAll').click(function() {
                $('#undo_redo').multiselect('selectAll');
                return false;
            });
            $('#undo_redo_rightSelected').click(function() {
                $('#undo_redo').multiselect('getChecked').each(function() {
                    $(this).trigger('click');
                });
                return false;
            });
            $('#undo_redo_leftSelected').click(function() {
                $('#undo_redo_to').multiselect('getChecked').each(function() {
                    $(this).trigger('click');
                });
                return false;
            });
            $('#undo_redo_leftAll').click(function() {
                $('#undo_redo_to').multiselect('selectAll');
                return false;
            });
            $('#undo_redo_undo').click(function() {
                $('#undo_redo').multiselect('destroy');
                $('#undo_redo_to').multiselect('destroy');
                $('#undo_redo option').prop('selected', false);
                $('#undo_redo_to option').prop('selected', false);
                $('#undo_redo').multiselect({
                    keepRenderingSort: true,
                    afterMoveToRight: function() {
                        $('#undo_redo_to').multiselect('refresh');
                    },
                    afterMoveToLeft: function() {
                        $('#undo_redo_to').multiselect('refresh');
                    }
                });
                $('#undo_redo_to').multiselect({
                    keepRenderingSort: true,
                    afterMoveToRight: function() {
                        $('#undo_redo').multiselect('refresh');
                    },
                    afterMoveToLeft: function() {
                        $('#undo_redo').multiselect('refresh');
                    }
                });
                return false;
            });
            $('#undo_redo_redo').click(function() {
                $('#undo_redo').multiselect('destroy');
                $('#undo_redo_to').multiselect('destroy');
                $('#undo_redo option').prop('selected', false);
                $('#undo_redo_to option').prop('selected', false);
                $('#undo_redo_to').multiselect({
                    keepRenderingSort: true,
                    afterMoveToRight: function() {
                        $('#undo_redo').multiselect('refresh');
                    },
                    afterMoveToLeft: function() {
                        $('#undo_redo').multiselect('refresh');
                    }
                });
                $('#undo_redo').multiselect({
                    keepRenderingSort: true,
                    afterMoveToRight: function() {
                        $('#undo_redo_to').multiselect('refresh');
                    },
                    afterMoveToLeft: function() {
                        $('#undo_redo_to').multiselect('refresh');
                    }
                });
                return false;
            });
        });
    </script>

    @endsection
