@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Encuesta') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('survey.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="rubro">Rubro</label>
                                <select class="form-select" id="rubro" name="rubro" required>
                                    <option value="" disabled selected>Seleccione un rubro</option>
                                    @foreach ($rubros as $rubro)
                                        <option value="{{ $rubro->id }}">{{ $rubro->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="comuna">Comuna</label>
                                <select class="form-select" id="comuna" name="comuna" required>
                                    <option value="" disabled selected>Seleccione una comuna</option>
                                    @foreach ($comunas as $comuna)
                                        <option value="{{ $comuna->id }}">{{ $comuna->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection