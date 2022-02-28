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
        <div class="card-body login-card-body ml-5 mr-5">
            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <div class="input-group mb-3">
                    <input id="email" class="form-control form-control-border" type="email" name="email"
                        value="{{ old('email', $request->email) }}" required autofocus placeholder="Correo electronico" />
                </div>
                <div class="input-group mb-3">
                    <input id="password" class="form-control form-control-border" type="password" name="password" required
                        placeholder="Nueva Contraseña">
                </div>
                <div class="input-group mb-3">
                    <input id="password_confirmation" type="password" name="password_confirmation" required
                        class="form-control form-control-border" placeholder="Confirmar Contraseña">
                </div>

                <!-- /.col -->
                <div class="">
                    <button type="submit" class="btn btn-danger btn-block btn-sm"><span class="text-light">Actualizar
                            contraseña
                        </span></button> </button>
                </div>
            </form>
        </div>
        <!-- /.login-card-body -->
    </div>
@endsection
