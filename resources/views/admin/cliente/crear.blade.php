@extends('adminlte::page')

@section('title', 'Nuevo Menu')

@section('content_header')
    <h1>Nuevo Cliente</h1>
    @include('plugins.iconsBootstrap')
@stop
@section('content')

    <form action="{{route('clientes.store')}}" method="POST">
        @csrf
        <label for="">Nombre</label>
        <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="bi-person-circle"></i>
            </span>
            <input type="text" class="form-control" name="Nombre" placeholder="Nombre">
        </div>

        <label for="">Apellidos</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">
            <i class="bi bi-person-circle"></i>
            </span>
            <input type="text" class="form-control" name="Apellido"
                   placeholder="Apellido">
        </div>

        <label for="">Nit/C.I.</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">
            <i class="bi bi-clipboard-fill"></i>
            </span>
            <input type="text" class="form-control" name="Nit" placeholder="Nit / C.I.">
        </div>

        <label for="" class="form-label">Direccion</label>
        <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="bi bi-house-fill"></i>
            </span>
            <input type="text" class="form-control" name="Direccion" placeholder="Direccion">
        </div>

        <label for="Email">Correo</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">
            <i class="bi bi-envelope-at-fill"></i>
            </span>
            <input type="email" class="form-control" name="Email" placeholder="example@gmail.com">
        </div>

        <label for="">Telefono</label>
        <div class="input-group">
            <span class="input-group-text" id="basic-addon1">
                <i class="bi bi-phone-fill"></i>
            </span>
            <input type="text" class="form-control" name="Telefono" placeholder="Nº Telefono">
        </div>
        <br>
        <input type="submit" class="btn btn-primary" value="Crear">
    </form>
@stop
