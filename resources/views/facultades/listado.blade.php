@extends('adminlte::page')

@section('title', 'Facultades')

@section('content_header')
    <h1>Facultades</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header d-flex align-items-center justify-content-between">
                    <h3 class="card-title text-center mb-0">Tabla de Facultades</h3>
                    <a href="#" class="btn btn-success ml-auto"><i class="fas fa-plus"></i> Registrar</a>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>COD001</td>
                                <td>Facultad de Ingeniería</td>
                                <td>
                                    <button href="#" class="btn btn-primary"><i class="fas fa-edit"></i></button>
                                    <button href="#" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>COD002</td>
                                <td>Facultad de Ciencias Empresariales</td>
                                <td>
                                    <a href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>COD003</td>
                                <td>Facultad de Ciencias de la Salud</td>
                                <td>
                                    <a href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
