@extends('adminlte::page')

@section('title', 'Nuevo Menu')

@section('content_header')
    <h1>Nuevo Empleado</h1>
    @include('plugins.iconsBootstrap')
@stop
@section('content')

    <form action="{{route('empleado.store')}}" id="Formulario" method="POST">
        @csrf
        <label for="">Nombre</label>
        <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="bi bi-person-circle"></i>
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

        <label for="">C.I.</label>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">
            <i class="bi bi-clipboard-fill"></i>
            </span>
            <input type="text" class="form-control" name="Ci" placeholder="C.I.">
        </div>

        <label for="">Telefono</label>
        <div class="input-group">
            <span class="input-group-text" id="basic-addon1">
                <i class="bi bi-phone-fill"></i>
            </span>
            <input type="text" class="form-control" name="Telefono" placeholder="Nº Telefono">
        </div>

        <label for="">Fecha De Contratacion</label>
        <div class="input-group date mb-3 " data-target-input="nearest">
            <span class="input-group-text" id="basic-addon1">
            <i class="bi bi-person-vcard-fill"></i>
            </span>
            <input type="date" class="form-control datatimepicker-input" name="FechaContratacion" id="Fecha">

        </div>

        <label for="">Puesto</label>
        <div class="input-group">
            <span class="input-group-text" id="basic-addon1">
                <i class="bi bi-person-standing"></i>
            </span>
            <input type="text" class="form-control" name="Puesto" placeholder="Cocinero">
        </div>

        <label for="">Correo</label>
        <div class="input-group">
            <span class="input-group-text" id="basic-addon1">
                <i class="bi bi-envelope-at-fill"></i>
            </span>
            <input type="email" class="form-control" name="Email" placeholder="exaple@gmail.com">
        </div>

        <label for="">Restaurante</label>
        <div class="input-group">
            <span class="input-group-text" id="basic-addon1">
                <i class="bi bi-phone-fill"></i>
            </span>
{{--            <input type="text" class="form-control" name="Telefono" placeholder="Nº Telefono">--}}
            <select class="form-select" aria-label="Default select example" name="RestauranteId">
                <option selected disabled>Selecione un Restaurante</option>
                @foreach($restaurante as $res)
                    <option value="{{$res->id}}">{{$res->Restaurante}} =>  {{$res->id}}</option>
                @endforeach
            </select>
        </div>
        <br>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <br>
        <input type="submit" class="btn btn-primary" value="Crear">
    </form>
@stop
