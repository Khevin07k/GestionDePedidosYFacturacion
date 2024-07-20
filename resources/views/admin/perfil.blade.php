@extends('adminlte::page')
@section('content_header')
    <h1>Rep. Usuarios</h1>
@stop
@section('content')
    <table class="table table-striped table-hover">
        <thead class="header">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Perfil</th>
            <th scope="col">Opciones</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Administrador</td>
            <td><button class="btn btn-danger">Eliminar</button></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Cliente</td>
            <td><button class="btn btn-danger">Eliminar</button></td>
        </tr>

        </tbody>
    </table>
@stop
