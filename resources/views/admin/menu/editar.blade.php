@extends('adminlte::page')
@section('content_header')
    <h1>Editar</h1>
@stop

@section('content')
    <form action="{{route('menu.update',$menu->id)}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        {{method_field('PATCH')}}
{{--        @method('PUT')--}}
        <label for="">Nombre</label>
        <input type="text" class="form-control" name="Nombre" value="{{$menu->Nombre}}">
        <br>

        <label for="fileInput">Foto: </label>
        <div class="mb-3">
            <img src="{{asset($menu->FotoMenu)}}" width="70px" alt="" name="AnteriorFotoMenu">
        </div>
        <input type="file" name="FotoMenu" class="form-control-file" id="fileInput">
        <br>

        <label for="">Descripcion</label>
        <input type="text" class="form-control" name="Descripcion" value="{{$menu->Descripcion}}">
        <br>
        <label for="">Precio</label>
        <input type="number" class="form-control" name="Precio" value="{{$menu->Precio}}">
        <br>
        <input class="btn btn-primary" type="submit" value="Actualizar">
    </form>
@stop

