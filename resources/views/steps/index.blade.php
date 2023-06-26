@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/steps.css') }}">


<div class="container"></div>,<div class="container">
  
<div class="stepwizard col-md-offset-3">
    <div class="stepwizard-row setup-panel">
      <div class="stepwizard-step">
        <a href="#paso-1" type="button" class="btn btn-primary btn-circle">1</a>
        <p>Paso 1</p>
      </div>
      <div class="stepwizard-step">
        <a href="#paso-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
        <p>Step 2</p>
      </div>
      <div class="stepwizard-step">
        <a href="#paso-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
        <p>Step 3</p>
      </div>
    </div>
  </div>
  
    <div class="row setup-content" id="paso-1">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
            
            <h3> Paso 1</h3>
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Constituir una empresa</h5>
                    <p class="card-text">Para constituir tu empresa, entra al siguiente enlace: </p>
                    <a href="https://www.registrodeempresaysociedades.cl/" class="card-link">Registro de Empresas y Sociedades</a>
                </div>
            </div>
          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Siguiente</button>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="paso-2">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3> Paso 2</h3>
          <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Formalizar Ante el SII</h5>
                    <p class="card-text">Formaliza ante el SII creando una cuenta de usuario en el portal del SII e ingresando la información solicitada. Puedes acceder al portal del SII aquí: </p>
                    <a href="https://homer.sii.cl/" class="card-link">Portal del SII</a>
                </div>
          </div>
          <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Anterior</button>
          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Siguiente</button>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="paso-3">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3> Paso 3</h3>
          <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">Documentos</h5>
                <p class="card-text">Dirígete al municipio de tu comuna y presenta la documentación solicitada. Para su caso debe tener los siguientes documentos: </p>
                    <ul>
                    @foreach ($documentos as $documento)
                        <li> {{ $documento->name }}</li>
                    @endforeach
                    </ul>
            </div>
          </div>
          <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Anterior</button>
        </div>
      </div>
    </div>
  
</div>
<script src="{{ asset('js/steps.js') }}"></script>
@endsection