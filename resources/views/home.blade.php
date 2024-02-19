@extends('layouts.app')

@section('content')
<div class="container1">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Logeado') }}</div>

                <div class="card-body" style="background-size: cover; background-color: #3592bd; color: #000;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Ha sido loggeado con exito') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
