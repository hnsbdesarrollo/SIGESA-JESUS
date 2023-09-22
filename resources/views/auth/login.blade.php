@extends('layouts.fullwidth')

@section('content')
    <div class="col-md-6">
        <div class="authincation-content">
            <div class="row no-gutters">
                <div class="col-xl-12">
                    <div class="auth-form">
                        <div class="text-center mb-3">
                            <a href="{{url('index')}}"><img src="{{ asset('images/logo-full.png') }}" alt=""></a>
                        </div>
                        <h4 class="text-center mb-4">Sign in your account</h4>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label class="mb-1"><strong>Usuario</strong></label>
                                <input type="text" id="email" name="email" class="form-control" value="administrador">
                            </div>
                            <div class="mb-3 position-relative">
                                <label class="mb-1"><strong>Contraseña</strong></label>
                                <input type="password" id="dz-password" name="password" class="form-control" value="44602631">
                                <span class="show-pass eye">
                                    <i class="fa fa-eye-slash"></i>
                                    <i class="fa fa-eye"></i>
                                </span>
                            </div>
                            <div class="form-row d-flex justify-content-between flex-wrap mt-4 mb-2">
                                <div class="form-group">
                                    <div class="form-check custom-checkbox ms-1">
                                        <input type="checkbox" class="form-check-input" id="basic_checkbox_1">
                                        <label class="form-check-label" for="basic_checkbox_1">recuerda mi preferencia</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <a href="{{url('page-forgot-password')}}">¿Has olvidado tu contraseña?</a>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
                            </div>
                        </form>
                        <div class="new-account mt-3">
                            <p>¿No tienes una cuenta? <a class="text-primary" href="{{url('page-register')}}">Inscribirse</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

