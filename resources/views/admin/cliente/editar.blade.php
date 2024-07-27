@extends('adminlte::page')

@section('content_header')
    <h1>Editar</h1>
    @include('plugins.iconsBootstrap')
@stop

@section('content')
    <form action="{{route('clientes.update',$cliente->id)}}" method="post">
        @csrf
        @method('PUT')
        <label for="">Nombre</label>
        <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="bi-person-circle"></i>
            </span>
            <input type="text" class="form-control" name="Nombre" value="{{$cliente->Nombre}}">
        </div>

        <label for="">Apellidos</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">
            <i class="bi bi-person-circle"></i>
            </span>
            <input type="text" class="form-control" name="Apellido" value="{{$cliente->Apellido}}"
                   placeholder="Apellido">
        </div>

        <label for="">Nit/C.I.</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">
            <i class="bi bi-clipboard-fill"></i>
            </span>
            <input type="text" class="form-control" name="Nit" value="{{$cliente->Nit}}" placeholder="Nit / C.I.">
        </div>

        <label for="" class="form-label">Direccion</label>
        <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="bi bi-house-fill"></i>
            </span>
            <input type="text" class="form-control" name="Direccion" value="{{$cliente->Direccion}}">
        </div>

        <label for="Email">Correo</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">
            <i class="bi bi-envelope-at-fill"></i>
            </span>
            <input type="email" class="form-control" name="Email" placeholder="example@gmail.com"
                   value="{{$cliente->Email}}">
        </div>

        <label for="">Telefono</label>
        <div class="input-group">
            <span class="input-group-text" id="basic-addon1">
                <i class="bi bi-phone-fill"></i>
            </span>
            <input type="text" class="form-control" name="Telefono" placeholder="Nº Telefono"
                   value="{{$cliente->Telefono}}">
        </div>
        <br>
        <input type="submit" class="btn btn-primary" value="Actulizar">
    </form>
@stop
