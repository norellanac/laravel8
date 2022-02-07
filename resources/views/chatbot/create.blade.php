@extends('layouts.adminLTE3')
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg">
                    New keyword
                </button>
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
                                    <form method="post" action={{ url('admin/chatbot') }}>
                                        @csrf
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Add yout keyword:</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                    </div>
                                                    <input type="text" name="keyword" id="keyword" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        {{-- modal para confirmar submit --}}
                                        <div class="modal fade" id="modal-sm">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Confirm action</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Continue?&hellip;</p>
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
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
