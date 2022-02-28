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
    <div class="row">
        <div class="col-12">
            <!-- /.card -->

            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">

                    <table id="myDataTable" class="table table-bordered table-striped">
                        <div class="row">
                            <div class="col-6 mb-n5 d-none">
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
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Activo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($records)
                                @forelse ($records as $record)
                                    <tr>
                                        <td>{{ $record->name }}</td>
                                        <td>{{ $record->name }}</td>
                                        <td>
                                            <div>
                                                Sí
                                                <a type="button" href="{{ url('admin/roles/' . $record->id) }}/edit"
                                                    class="btn btn-xs btn-info"><i class="fas fa-edit"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <div>
                                        {{-- modal para confirmar submit --}}
                                        <div class="modal fade" id="modal-delete-{{ $record->id }}">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Continue...</h4>

                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div>Delete record {{ $record->description }}
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-default"
                                                            data-dismiss="modal">Close</button>
                                                        <form method="post" action="/admin/roles/{{ $record->id }}">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-danger"><i
                                                                    class="fa fa-trash"></i>Delete
                                                                record</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- modal para confirmar submit --}}
                                    </div>
                                @empty
                                    <tr>
                                        <td>Empty table</td>
                                        <td>1</td>
                                        <td>2</td>
                                    </tr>
                                @endforelse
                            @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    {{-- <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($roles as $key => $role)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $role->name }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('roles.show', $role->id) }}">Show</a>
                    @can('role-edit')
                        <a class="btn btn-primary" href="{{ route('roles.edit', $role->id) }}">Edit</a>
                    @endcan
                    @can('role-delete')
                        {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id], 'style' => 'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    @endcan
                </td>
            </tr>
        @endforeach
    </table>


    {!! $roles->render() !!} --}}


    <p class="text-center text-primary"><small>Tutorial by GateForLearner.com</small></p>
@endsection
