@extends('adminlte::page')

@section('title', 'Restaurante')

@section('content_header')
    <h1>Nuevo Restaurante</h1>
    @include('plugins.iconsBootstrap')
@stop
@section('content')
<form action="{{route('restaurante.update',$restaurante->id)}}" method="POST">
    @csrf
    <label>Propietario</label>
    <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="fas fa-utensils"></i>
            </span>
        <input type="text" class="form-control" value="{{$restaurante->Propietario}}" name="Propietario">
    </div>

    <label>Reataurante</label>
    <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="bi bi-person-circle"></i>
            </span>
        <input type="text" class="form-control" name="Restaurante" value="{{$restaurante->Restaurante}}">
    </div>

    <label>Dirrecion</label>
    <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="bi bi-house-fill"></i>
            </span>
        <input type="text" class="form-control" value="{{$restaurante->Dirrecion}}" name="Direccion">
    </div>

    <label>Telefono</label>
    <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="bi bi-phone-fill"></i>
            </span>
        <input type="text" class="form-control" value="{{$restaurante->Telefono}}" name="Telefono">
    </div>

    <label>Nit</label>
    <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="bi bi-clipboard-fill"></i>
            </span>
        <input type="text" class="form-control" value="{{$restaurante->Nit}}" name="Nit">
    </div>

    <label>Correo</label>
    <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="bi bi-envelope-at-fill"></i>
            </span>
        <input type="email" class="form-control" value="{{$restaurante->Correo}}" name="Email">
    </div>
    <input type="submit" class="btn btn-primary" value="Crear">
</form>
@stop
