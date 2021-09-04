@extends('layouts.plantilla');

@section('contenido')
    <div class="container">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                        <table class="responsive">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>{{$user->names}}</th>
                                </tr>
                                <tr>
                                    <th>Apellido</th>
                                    <th>{{$user->lastnames}}</th>
                                </tr>
                                <tr>
                                    <th>Correo</th>
                                    <th>{{$user->email}}</th>
                                </tr>
                                <tr>
                                    <th>Telefono</th>
                                    <th>{{$user->phone}}</th>
                                </tr>
                            </thead>
                        </table>
                        <a href="{{route('users.index')}}" class="btn btn-info btn-sm" >Volver al inicio</a>
                        <a href="" class="btn btn-warning btn-sm">Editar producto</a>
                </div>
            </div>
        </div>
    </div>
@endsection
