@extends('layouts.guest')
@section('content')
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-exclamation-triangle"></i> Atención!</h5>
            {{ $error }}.
        </div>
    @endforeach
    <div class="card">
        <div class="card-body login-card-body ml-5 mr-5">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-group mb-3">
                    <input class="form-control form-control-border" placeholder="Usuario / Teléfono" id="email" type="text"
                        name="email" required autofocus {{ config('app.debug') ? "value=gcastillo@homeland.com.gt" : '' }} />
                </div>
                <div class="input-group mb-3">
                    <input id="password" type="password" name="password" required class="form-control form-control-border"
                        placeholder="Contraseña" {{ config('app.debug') ? "value='12341234'" : '' }}>
                </div>
                <!-- /.col -->
                <div class="">
                    <button type="submit" class="btn btn-danger btn-block btn-sm"><span class="text-light">Iniciar
                            Sesión</span></button> </button>
                </div>
                <!-- /.col -->
                <div class="text-center">
                    <div class="form-group form-check mt-3">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="remember">Mantener la sesion</label>
                    </div>
                    <div class="mt-n2">
                        <a class="text-seconday" href="{{ route('password.request') }}">Olvidé mi contraseña</a>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.login-card-body -->
    </div>
@endsection
