@extends('adminlte::page')
@section('content_header')
    <h1>Menus</h1>
    @include ('plugins.iconsBootstrap')

@stop

@section('content')
    @auth
        <a href="{{ route('menu.create') }}" class="btn btn-primary" role="button">Nuevo Menu</a>
    @else
        <div class="text-bg-danger">Nesecitas iniciar seccion para agregar menus</div>
    @endauth
    <a href="{{route('menuReporteGeneral')}}" class="btn btn-info" role="button">Generar Pdf</a>
    <br>
    <br>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Nº</th>
            <th scope="col">Nombre</th>
            <th scope="col">Foto</th>
            <th scope="col">Desripcion</th>
            <th scope="col">Precio</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
        @foreach($menus as $menu)
        <tr>
            <th scope="row">{{$menu->id}}</th>
            <td>{{$menu->Nombre}}</td>
            <td><img src="{{asset($menu->FotoMenu)}}" alt="" width="70px"></td>
            <td>{{$menu->Descripcion}}</td>
            <td>{{$menu->Precio}} Bs</td>
            <td>
                <div class="mb-3">
                    <a href="{{route('menu.edit',$menu->id) }}" role="button" class="btn btn-primary"> Editar</a>
                </div>
                <form action="{{route('menu.destroy',$menu->id)}}" method="post">
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
@section('script')

@stop
