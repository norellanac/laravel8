@extends('layouts.adminLTE3')
@section('header-buttons')
    <div class="btn-group breadcrumb float-sm-right">
        <a href="{{ url('/admin/roles/create') }}" class="btn bg-gradient-secondary">
            <i class="fas fa-plus"></i>
            Nuevo
        </a>
        <a href="{{ url('/admin/roles/') }}" class="btn bg-gradient-secondary">
            <i class="fas fa-sync"></i>
            Refrescar
        </a>
        <a href="{{ url('/admin/roles/') }}" class="btn bg-gradient-secondary">
            <i class="fas fa-times"></i>
            Cerrar
        </a>
    </div>
@endsection
@section('content')
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="#">Permisos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Usuarios</a>
            </li>
        </ul>
        <div class="row mt-3">
            <div class="col-5">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre de perfil</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Escriba el nombre">
                </div>
            </div>
            <div class="col-5">
                <div class="form-group">
                    <label>Descripcion</label>
                    <textarea class="form-control" rows="1" placeholder="Descripcion..."></textarea>
                </div>
            </div>
            <div class="col-2">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                    <label class="custom-control-label" for="customSwitch1">Activo?</label>
                </div>
            </div>

        </div>
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="bg-light" id="headingOne">
                    <p class="mb-0 text-dark h5 ml-2">
                        <span class="nav-link text-left" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            Sistema
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </p>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        Some placeholder content for the first accordion panel. This panel is shown by default, thanks to
                        the <code>.show</code> class.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="bg-light" id="headingTwo">
                    <p class="mb-0 text-dark h5 ml-2">
                        <span class="nav-link text-left collapsed" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="false" aria-controls="collapseTwo">
                            Usuario
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </p>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        Some placeholder content for the second accordion panel. This panel is hidden by default.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="bg-light" id="headingThree">
                    <p class="mb-0 text-dark h5 ml-2">
                        <span class="nav-link text-left collapsed" data-toggle="collapse" data-target="#collapseThree"
                            aria-expanded="false" aria-controls="collapseThree">
                            Configuracion
                            <i class="fas fa-angle-right"></i>
                        </span>
                    </p>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                    data-parent="#accordionExample">
                    <div class="card-body">
                        {{-- {!! Form::open(['route' => 'roles.store', 'method' => 'POST']) !!}
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    <strong>Permission:</strong>
                                    <br />
                                    @foreach ($permission as $value)
                                        <label>{{ Form::checkbox('permission[]', $value->id, false, ['class' => 'name']) }}
                                            {{ $value->name }}</label>
                                        <br />
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-xs-2 col-sm-2 col-md-2">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    <strong>Permission:</strong>
                                    <br />
                                    @foreach ($permission as $value)
                                        <label>{{ Form::checkbox('permission[]', $value->id, false, ['class' => 'name']) }}
                                            {{ $value->name }}</label>
                                        <br />
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-xs-2 col-sm-2 col-md-2">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    <strong>Permission:</strong>
                                    <br />
                                    @foreach ($permission as $value)
                                        <label>{{ Form::checkbox('permission[]', $value->id, false, ['class' => 'name']) }}
                                            {{ $value->name }}</label>
                                        <br />
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-xs-2 col-sm-2 col-md-2">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    <strong>Permission:</strong>
                                    <br />
                                    @foreach ($permission as $value)
                                        <label>{{ Form::checkbox('permission[]', $value->id, false, ['class' => 'name']) }}
                                            {{ $value->name }}</label>
                                        <br />
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-xs-2 col-sm-2 col-md-2">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    <strong>Permission:</strong>
                                    <br />
                                    @foreach ($permission as $value)
                                        <label>{{ Form::checkbox('permission[]', $value->id, false, ['class' => 'name']) }}
                                            {{ $value->name }}</label>
                                        <br />
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        {!! Form::close() !!} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
