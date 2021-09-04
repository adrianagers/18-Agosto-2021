@extends('layouts.app');

@section('contenido')
    <div class="container">
        <div class="col-md-6">

            <form action="{{route('users.store')}}" method="post">
                @csrf    
                <div class="card-body">
                        <table class="responsive">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th> <input type="text" class="form-control" name="names" value=""></th>
                                </tr>
                                <tr>
                                    <th>Apellido</th>
                                    <th><input type="text" class="form-control" name="lastnames" value=""></th>
                                </tr>
                                <tr>
                                    <th>Correo</th>
                                    <th><input type="text" class="form-control" name="email" value=""></th>
                                </tr>
                                <tr>
                                    <th>Telefono</th>
                                    <th> <input type="text" class="form-control" name="phone" value=""></th>
                                </tr>
                            </thead>
                        </table>
                        <button type="submit" class="btn btn-warning btn-sm">crear Registro </button>
                        <a href="{{route('users.index')}}" class="btn btn-info btn-sm" >Volver al inicio</a>
                </div>
             </form>
        </div>
    </div>
@endsection
