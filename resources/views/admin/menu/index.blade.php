@extends('adminlte::page')
@section('content_header')
    <h1>Menus</h1>
    @include ('plugins.iconsBootstrap')

@stop

@section('content')

    <a href="{{ route('menu.create') }}" class="btn btn-primary" role="button">Nuevo Menu</a>

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
                    <a href="/menu/{{$menu->id}}/edit" role="button" class="btn btn-primary"> Editar</a>
                </div>
                <form action="/menu/{{$menu->id}}" method="post">
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
