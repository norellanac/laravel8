@extends('layouts.guest')
@section('content')
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
            {{ $error }}.
        </div>
    @endforeach

    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Escribe tu correo electronico para poder recuperar la contraseña.</p>

            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="input-group mb-3">
                    <input type="email" name="email" value="{{ old('email') }}" required autofocus
                        class="form-control form-control-border" placeholder="Email">
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-warning btn-block"><span class="text-light">Reiniciar
                                contrasaeña</span></button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <p class="mt-3 mb-1 text-center">
                <a href="{{ url('login') }}">Iniciar sesión</a>
            </p>
            <p class="mb-0">
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
@endsection
