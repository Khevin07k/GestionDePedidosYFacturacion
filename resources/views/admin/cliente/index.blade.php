@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
    <h1>Lista de Clientes</h1>
    @include('plugins.iconsBootstrap')
@stop
@section('content')
    <a href="{{route('clientes.create')}}" class="btn btn-primary" role="button">Nuevo Cliente</a>
    <br>
    <br>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Nº</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Nit</th>
            <th scope="col">Dirrecion</th>
            <th scope="col">Email</th>
            <th scope="col">Telefono</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
        @foreach($clientes as $cliente)
            <tr>
                <th scope="row">{{$cliente->id}}</th>
                <td>{{$cliente->Nombre}}</td>
                <td>{{$cliente->Apellido}}</td>
                <td>{{$cliente->Nit}}</td>
                <td>{{$cliente->Direccion}}</td>
                <td>{{$cliente->Email}}</td>
                <td>{{$cliente->Telefono}}</td>
                <td>
                    <div class="mb-3">
                        <a href="{{route('clientes.edit',$cliente->id)}}" role="button" class="btn btn-primary"> Editar</a>
                    </div>
                    <form action="{{route('clientes.destroy',$cliente->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="Eliminar">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop
