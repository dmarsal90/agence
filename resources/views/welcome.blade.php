@extends('layouts.app')

@section('content')
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('img/caol.png') }}" alt="">
    </a>
</nav>
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-3">Protótipo para Avaliação de Candidato</h5>
                    <p class="card-text">A Avaliação consiste no desenvolvimento da funcionalidade <span class="text-danger">"Performance Comercial"</span> (Comercial -> Performance Comercial).</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
