@extends('layouts.app');

@section('contenido')
    <div class="container">
    <a href="{{route('users.create')}}"class="btn btn-sm btn-info m-4">Crear nuevo usuario</a>

        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>APELLIDO</th>
                                <th>CORREO</th>
                                <th>TELEFONO</th>
                                <th>ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                    <tr>
                                        <td> {{ $user->id}} </td>
                                        <td> {{ $user->names}} </td>
                                        <td> {{ $user->lastnames}} </td>
                                        <td> {{ $user->email}} </td>
                                        <td> {{ $user->phone}} </td>
                                        <td>
                                            <form action="{{route('users.destroy',$user->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{route('users.show',$user->id)}}"class="btn btn-sm btn-info">Detalles</a>
                                                <a href="{{route('users.edit',$user->id)}}" class="btn btn-sm btn-warning">Editar</a>
                                                <button class="btn btn-sm btn-danger">Eliminar</button>                       
                                            </form>
                                        </td>
                                    </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
@endsection