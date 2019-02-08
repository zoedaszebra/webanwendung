@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bestätige deine E-Mail Adresse hier') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Ein neuer Bestätigungslink wurde an deine E-Mail gesendet.') }}
                        </div>
                    @endif

                    {{ __('Bevor du fortfährst schaue in dein E-Mail Postfach nach dem Bestätigungslink.') }}
                    {{ __('Wenn du keine Mail bekommen hast') }}, <a href="{{ route('verification.resend') }}">{{ __('klicke hier um eine neue anzufordern.') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
