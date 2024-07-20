@extends('adminlte::page')
@section('content_header')
    <h1>Rep. Usuarios</h1>
@stop
@section('content')
    <table class="table table-striped table-hover">
        <thead class="header">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Usuario</th>
            <th scope="col">Nombre</th>
            <th scope="col">Permiso</th>
            <th scope="col">Estado</th>
            <th scope="col">Opciones</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Admin123</td>
            <td>Ejemplo</td>
            <td>Admin</td>
            <td>Activo</td>
            <td><button class="btn btn-danger">Eliminar</button></td>
        </tr>

        </tbody>
    </table>
@stop
