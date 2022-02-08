@extends('layouts.adminLTE3')
@section('header-buttons')
    <div class="btn-group breadcrumb float-sm-right">
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
            <i class="fas fa-plus"></i>
            New
        </button>
        <button type="button" class="btn btn-info">
            <i class="fas fa-align-center"></i>
        </button>
        <button type="button" class="btn btn-info">
            <i class="fas fa-align-right"></i>
        </button>
    </div>
@endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="modal fade" id="modal-lg">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">New record</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Chatbot</h3>
                                    </div>
                                    <form method="post" action={{ url('admin/chatbotQuestions') }}>
                                        @csrf
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Add your question:</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-paragrap"></i></span>
                                                    </div>
                                                    <input type="text" name="description" id="description"
                                                        class="form-control">
                                                </div>
                                                <input type="hidden" name="chatbot_id" id="chatbot_id"
                                                    value="{{ $chatbot->id }}">

                                            </div>
                                        </div>

                                        {{-- modal para confirmar submit --}}
                                        <div class="modal fade" id="modal-sm">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Continue</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-default"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary"><i
                                                                class="fa fa-save"></i>Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- modal para confirmar submit --}}
                                        <div class="card-footer text-center">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#modal-sm"><i class="fa fa-save"></i>
                                                Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Table records</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Keyword</th>
                                        <th>Questions</th>
                                        <th>Answers</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($records as $record)
                                        <tr>
                                            <td>{{ $record->description }}</td>
                                            <td>{{ $record->chatbot_id }}</td>
                                            <td>2</td>
                                            <td>
                                                <div>
                                                    <a type="button" href="{{ url('admin/chatbot/' . $record->id) }}"
                                                        class="btn btn-xs btn-info"><i class="fas fa-eye"></i></a>
                                                    <a data-toggle="modal" data-target="#modal-delete-{{ $record->id }}"
                                                        class="btn btn-xs btn-danger"><i class="fas fa-trash"></i></a>

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

                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
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
                                                            <form method="post" action="/admin/chatbot/{{ $record->id }}">
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
                                            <td></td>
                                        </tr>
                                    @endforelse
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Keyword</th>
                                        <th>Questions</th>
                                        <th>Answers</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->


            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>

@endsection
