@extends('layouts.adminLTE3')
@section('content')
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                    aria-controls="collapseOne">Datos personales</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                    aria-controls="collapseTwo">Documentos</a>
            </li>
        </ul>
        <div class="accordion" id="accordionExample">
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <form action="{{ url('admin/users') }}" method="post">
                    @csrf
                    <div class="row mt-3 d-flex justify-content-center">
                        <div class="col-5">
                            <div class="form-group">
                                <label>Tipo de cuenta</label>
                                <select class="form-control">
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-2 mt-4 d-flex">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch1" name="active">
                                <label class="custom-control-label" for="customSwitch1">Activo?</label>
                            </div>
                        </div>

                    </div>

                    <div class="card-body">
                        <p class="h5 text-primary mb-n3">Datos Personales</p>
                        <hr>
                        <div class="row ml-5 mr-5">
                            <div class="col-12 col-md-5">
                                <div class="form-group row">
                                    <label for="name" class="col-5 col-form-label">Primer Nombre</label>
                                    <div class="col-7">
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Primer Nombre">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-5 ml-md-5">
                                <div class="form-group row">
                                    <label for="second_name" class="col-5 col-form-label">Segundo Nombre</label>
                                    <div class="col-7">
                                        <input type="text" class="form-control" id="second_name" name="second_name"
                                            placeholder="Segundo Nombre">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ml-5 mr-5">
                            <div class="col-12 col-md-5">
                                <div class="form-group row">
                                    <label for="lastname" class="col-5 col-form-label">Primer Apellido</label>
                                    <div class="col-7">
                                        <input type="text" class="form-control" id="lastname" name="lastname"
                                            placeholder="Primer Apellido">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-5 ml-md-5">
                                <div class="form-group row">
                                    <label for="second_lastname" class="col-5 col-form-label">Segundo Apellido</label>
                                    <div class="col-7">
                                        <input type="text" class="form-control" id="second_lastname"
                                            name="second_lastname" placeholder="Segundo Apellido">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ml-5 mr-5">
                            <div class="col-12 col-md-5">
                                <div class="form-group row">
                                    <label for="gender" class="col-5 col-form-label">Genero</label>
                                    <div class="col-7">
                                        <div class="form-group" name="gender" id="gender">
                                            <select class="form-control">
                                                <option>Masculino</option>
                                                <option>Femenino</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-5 ml-md-5">
                                <div class="form-group row">
                                    <label for="birthday" class="col-5 col-form-label">Fecha Nacimiento</label>
                                    <div class="col-7">
                                        <input type="date" class="form-control" id="birthday" name="birthday"
                                            placeholder="Fecha Nacimiento">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ml-5 mr-5">
                            <div class="col-12 col-md-5">
                                <div class="form-group row">
                                    <label for="gender" class="col-5 col-form-label">Tipo De id.</label>
                                    <div class="col-7">
                                        <div class="form-group" name="gender" id="gender">
                                            <select class="form-control">
                                                <option>DPI</option>
                                                <option>OTROS</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-5 ml-md-5">
                                <div class="form-group row">
                                    <label for="legal_id" class="col-5 col-form-label">No. de documento</label>
                                    <div class="col-7">
                                        <input type="number" class="form-control" id="legal_id" name="legal_id" min="0"
                                            placeholder="No. de documento">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ml-5 mr-5">
                            <div class="col-12 col-md-5">
                                <div class="form-group row">
                                    <label for="legal_id_city" class="col-5 col-form-label">Lugar de emision.</label>
                                    <div class="col-7">
                                        <div class="form-group" name="legal_id_city" id="legal_id_city">
                                            <select class="form-control">
                                                <option>Departamentos</option>
                                                <option>Municipios</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-5 ml-md-5">
                                <div class="form-group row">
                                    <label for="birthday" class="col-5 col-form-label">NIT</label>
                                    <div class="col-7">
                                        <input type="number" class="form-control" id="birthday" name="birthday" min="0"
                                            placeholder="No. de documento">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ml-5 mr-5">
                            <div class="col-12 col-md-5">
                                <div class="form-group row">
                                    <label for="job_position" class="col-5 col-form-label">Profesión u oficio</label>
                                    <div class="col-7">
                                        <div class="form-group" name="job_position" id="job_position">
                                            <select class="form-control">
                                                <option>Puesto</option>
                                                <option>Otros</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-5 ml-md-5">
                                <div class="form-group row">
                                    <label for="email" class="col-5 col-form-label">Correo Electrónico</label>
                                    <div class="col-7">
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Correo Electrónico">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ml-5 mr-5">
                            <div class="col-12 col-md-5">
                                <div class="form-group row">
                                    <label for="phone" class="col-5 col-form-label">Celular</label>
                                    <div class="col-7">
                                        <input type="text" class="form-control" id="phone" name="phone"
                                            placeholder="Celular">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-5 ml-md-5">
                                <div class="form-group row">
                                    <label for="emergency_phone" class="col-5 col-form-label">Segundo Nombre</label>
                                    <div class="col-7">
                                        <input type="text" class="form-control" id="emergency_phone"
                                            name="emergency_phone" placeholder="Segundo Nombre">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ml-5 mr-5">
                            <div class="col-12 col-md-5">
                                <div class="form-group row">
                                    <label for="job_position" class="col-5 col-form-label">Tipo de vivienda</label>
                                    <div class="col-7">
                                        <div class="form-group" name="job_position" id="job_position">
                                            <select class="form-control">
                                                <option>Propia</option>
                                                <option>Renta</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-5 ml-md-5">
                                <div class="form-group row">
                                    <label for="address" class="col-5 col-form-label">Dirección</label>
                                    <div class="col-7">
                                        <input type="address" class="form-control" id="address" name="address"
                                            placeholder="Dirección">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="h5 text-primary mb-n3">Datos Laborales</p>
                        <hr>
                        <div class="row ml-5 mr-5">
                            <div class="col-12 col-md-5">
                                <div class="form-group row">
                                    <label for="name" class="col-5 col-form-label">Inicio de Labores</label>
                                    <div class="col-7">
                                        <input type="date" class="form-control" id="name" name="name"
                                            placeholder="Inicio de Labores">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-5 ml-md-5">
                                <div class="form-group row">
                                    <label for="second_name" class="col-5 col-form-label">Sueldo</label>
                                    <div class="col-7">
                                        <input type="number" class="form-control" id="second_name" name="second_name"
                                            placeholder="Sueldo" min="0">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ml-5 mr-5">
                            <div class="col-12 col-md-5">
                                <div class="form-group row">
                                    <label for="name" class="col-5 col-form-label">Tiempo laborado</label>
                                    <div class="col-7">
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Tiempo laborado" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-5 ml-md-5">
                                <div class="form-group row">
                                    <label for="second_name" class="col-5 col-form-label">Puesto Laboral</label>
                                    <div class="col-7">
                                        <input type="text" class="form-control" id="second_name" name="second_name"
                                            placeholder="Puesto Laboral">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="h5 text-primary mb-n3">Cuenta</p>
                        <hr>
                        <div class="row ml-5 mr-5">
                            <div class="col-12 col-md-5">
                                <div class="form-group row">
                                    <label for="name" class="col-5 col-form-label">Usuario</label>
                                    <div class="col-7">
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Usuario">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-5 ml-md-5">
                                <div class="form-group row">
                                    <label for="second_name" class="col-5 col-form-label">Contraseña</label>
                                    <div class="col-7">
                                        <input type="text" class="form-control" id="second_name" name="second_name"
                                            placeholder="Contraseña">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="h5 text-primary mb-n3">Perfiles de acceso</p>
                        <hr>
                        <div class="row ml-5 mr-5">
                            <div class="col-12 col-md-5">
                                <div class="form-group row">
                                    <label for="name" class="col-5 col-form-label">Perfil</label>
                                    <div class="col-7">
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Perfil">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-5 ml-md-5">
                                <div class="form-group row">
                                    <label for="second_name" class="col-5 col-form-label">Descripcion</label>
                                    <div class="col-7">
                                        <input type="text" class="form-control" id="second_name" name="second_name"
                                            placeholder="Descripcion">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </form>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="container">
                    <table id="" class="table table-bordered table-striped">
                        <div class="row ml-5 mr-5">
                            <div class="col-6 mb-n4 d-none">
                                <div class="form-group">
                                    <label>Sort Order:</label>
                                    <select class="select2" style="width: 100%;">
                                        <option selected>ASC</option>
                                        <option>DESC</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <thead>
                            <tr>
                                <th>Tipo de Documento</th>
                                <th>Imagen</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>DPI Frontal</td>
                                <td><img src="..." alt="DPI Frontal" class="img-thumbnail"></td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group" aria-label="...">
                                        <a type="button" href="{{ url('admin/roles/') }}/edit"
                                            class="btn btn-xs btn-success"><i class="fas fa-download"></i></a>
                                        <a type="button" href="{{ url('admin/roles/') }}/edit"
                                            class="btn btn-xs btn-info"><i class="fas fa-edit"></i></a>
                                        <a type="button" href="{{ url('admin/roles/') }}/edit"
                                            class="btn btn-xs btn-danger"><i class="fas fa-trash-alt"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>DPI Reverso</td>
                                <td><img src="..." alt="DPI Reverso" class="img-thumbnail"></td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group" aria-label="...">
                                        <a type="button" href="{{ url('admin/roles/') }}/edit"
                                            class="btn btn-xs btn-success"><i class="fas fa-download"></i></a>
                                        <a type="button" href="{{ url('admin/roles/') }}/edit"
                                            class="btn btn-xs btn-info"><i class="fas fa-edit"></i></a>
                                        <a type="button" href="{{ url('admin/roles/') }}/edit"
                                            class="btn btn-xs btn-danger"><i class="fas fa-trash-alt"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Fotografía</td>
                                <td><img src="..." alt="Fotografía" class="img-thumbnail"></td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group" aria-label="...">
                                        <a type="button" href="{{ url('admin/roles/') }}/edit"
                                            class="btn btn-xs btn-success"><i class="fas fa-download"></i></a>
                                        <a type="button" href="{{ url('admin/roles/') }}/edit"
                                            class="btn btn-xs btn-info"><i class="fas fa-edit"></i></a>
                                        <a type="button" href="{{ url('admin/roles/') }}/edit"
                                            class="btn btn-xs btn-danger"><i class="fas fa-trash-alt"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
@endsection
