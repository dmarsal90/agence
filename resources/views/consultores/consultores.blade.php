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

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('#undo_redo').multiselect();
        });
    </script>

    @endsection
