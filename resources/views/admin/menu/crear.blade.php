@extends('adminlte::page')

@section('title', 'Nuevo Menu')

@section('content_header')
    <h1>Crear un Nuevo Plato</h1>
@stop
@section('content')

    <form action="{{route('menu.store')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <label for="">Nombre</label>
        <input type="text" class="form-control" name="Nombre">
        <br>
        <label for="fileInput">Foto: </label>
        <input type="file" name="FotoMenu" class="form-control-file" id="fileInput">
        <br>
        <label for="">Descripcion</label>
        <input type="text" class="form-control" name="Descripcion">
        <br>
        <label for="">Precio</label>
        <input type="number" class="form-control" name="Precio">
        <br>
        <input class="btn btn-primary" type="submit" value="Crear">
    </form>
@stop
