@extends('layouts.app')

@section('template_title')
    {{ $coch->name ?? "{{ __('Show') Coch" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Coch</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('coches.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Piloto1:</strong>
                            {{ $coch->piloto1 }}
                        </div>
                        <div class="form-group">
                            <strong>Piloto2:</strong>
                            {{ $coch->piloto2 }}
                        </div>
                        <div class="form-group">
                            <strong>Piloto3:</strong>
                            {{ $coch->piloto3 }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Coche:</strong>
                            {{ $coch->numero_coche }}
                        </div>
                        <div class="form-group">
                            <strong>N Escuderia:</strong>
                            {{ $coch->n_escuderia }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen Coche:</strong>
                            {{ $coch->imagen_coche }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
