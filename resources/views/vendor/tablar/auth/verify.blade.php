@extends('tablar::auth.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica tu direccion de email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un link de verificacion a sido enviado a tu correo') }}
                        </div>
                    @endif

                    {{ __('Antes de avanzar checa el enlace') }}
                    {{ __('Sino te llego el email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click para solicitar de neuvo') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
