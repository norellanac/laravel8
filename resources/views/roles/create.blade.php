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
        <form action="{{ url('admin/roles') }}" method="post">
            @csrf
            <div class="row mt-3">
                <div class="col-5">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre de perfil</label>
                        <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Escriba el nombre" required>
                    </div>
                </div>
                <div class="col-5">
                    <div class="form-group">
                        <label>Descripcion</label>
                        <textarea class="form-control" rows="1" name="descripcion" placeholder="Descripcion..." required></textarea>
                    </div>
                </div>
                <div class="col-2">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1" name="active">
                        <label class="custom-control-label" for="customSwitch1">Activo?</label>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4">
                    <div class="form-group mt-3">
                    </div>
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2">
                    <div class="form-group">
                        <strong>Consultar:</strong>
                    </div>
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2">
                    <div class="form-group">
                        <strong>Crear:</strong>
                    </div>
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2">
                    <div class="form-group">
                        <strong>Modificar:</strong>
                    </div>
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2">
                    <div class="form-group">
                        <strong>Eliminar:</strong>
                    </div>
                </div>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="bg-light" id="headingOne">
                        <p class="mb-0 text-dark h5 ml-2">
                            <span class="nav-link text-left" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <div class="form-group mt-2 ml-2 h5" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <strong>Usuarios:</strong>
                                            <i class="fas fa-angle-right"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-2 col-sm-2 col-md-2">
                                        <div class="form-group">
                                            <div class="form-group form-check mt-2">
                                                <input type="checkbox" class="form-check-input"
                                                    onchange="selectColumchecks('usersList')">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-2 col-sm-2 col-md-2">
                                        <div class="form-group">
                                            <div class="form-group form-check mt-2">
                                                <input type="checkbox" class="form-check-input"
                                                    onchange="selectColumchecks('userscreate')">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-2 col-sm-2 col-md-2">
                                        <div class="form-group">
                                            <div class="form-group form-check mt-2">
                                                <input type="checkbox" class="form-check-input"
                                                    onchange="selectColumchecks('usersEdit')">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-2 col-sm-2 col-md-2">
                                        <div class="form-group">
                                            <div class="form-group form-check mt-2">
                                                <input type="checkbox" class="form-check-input" onchange="selectColumchecks('usersDelete')" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </span>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group mt-3">
                                        <strong>Perfiles de acceso:</strong>
                                    </div>
                                </div>
                                <div class="col-xs-2 col-sm-2 col-md-2">
                                    <div class="form-group">
                                        <div class="form-group form-check mt-3">
                                            <input type="checkbox" class="form-check-input" id="usersList"
                                                name="permission[]" value="{{$permission->where('name', 'role-list')->first()->id}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-2 col-sm-2 col-md-2">
                                    <div class="form-group">
                                        <div class="form-group form-check mt-3">
                                            <input type="checkbox" class="form-check-input" id="userscreate"
                                                name="permission[]" value="{{$permission->where('name', 'role-create')->first()->id}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-2 col-sm-2 col-md-2">
                                    <div class="form-group">
                                        <div class="form-group form-check mt-3">
                                            <input type="checkbox" class="form-check-input" id="usersEdit"
                                                name="permission[]" value="{{$permission->where('name', 'role-edit')->first()->id}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-2 col-sm-2 col-md-2">
                                    <div class="form-group">
                                        <div class="form-group form-check mt-3">
                                            <input type="checkbox" class="form-check-input" id="usersDelete"
                                                name="permission[]" value="{{$permission->where('name', 'role-delete')->first()->id}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group mt-3">
                                        <strong>Usuarios:</strong>
                                    </div>
                                </div>
                                <div class="col-xs-2 col-sm-2 col-md-2">
                                    <div class="form-group">
                                        <div class="form-group form-check mt-3">
                                            <input type="checkbox" class="form-check-input" id="usersList"
                                                name="permission[]" value="{{$permission->where('name', 'user-list')->first()->id}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-2 col-sm-2 col-md-2">
                                    <div class="form-group">
                                        <div class="form-group form-check mt-3">
                                            <input type="checkbox" class="form-check-input" id="userscreate"
                                                name="permission[]" value="{{$permission->where('name', 'user-create')->first()->id}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-2 col-sm-2 col-md-2">
                                    <div class="form-group">
                                        <div class="form-group form-check mt-3">
                                            <input type="checkbox" class="form-check-input" id="usersEdit"
                                                name="permission[]" value="{{$permission->where('name', 'user-edit')->first()->id}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-2 col-sm-2 col-md-2">
                                    <div class="form-group">
                                        <div class="form-group form-check mt-3">
                                            <input type="checkbox" class="form-check-input" id="usersDelete"
                                                name="permission[]" value="{{$permission->where('name', 'user-delete')->first()->id}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="bg-light" id="headingTwo">
                        <p class="mb-0 text-dark h5 ml-2">
                            <span class="nav-link text-left collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                Sistema
                                <i class="fas fa-angle-right"></i>
                            </span>
                        </p>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordionExample">
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
                            Some placeholder content for the third accordion panel. This panel is hidden by default.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>
    </div>
    <script>
        function selectColumchecks(elemtId) {
            /* this function needs an id and an elemet to start the action, when the elemte who call the funcion, this will check or uncheck all elemtes with the same id */
            let elemetList = document.querySelectorAll(`#${elemtId}`)
            for (let i = 0; i < elemetList.length; i++) {
                elemetList[i].checked = !elemetList[i].checked;
            }
        }
    </script>
@endsection
