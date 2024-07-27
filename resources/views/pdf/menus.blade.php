<h1>Lista productos</h1>
<table class="table" border="1">
    <thead>
    <tr>
        <th scope="col">Nº</th>
        <th scope="col">Nombre</th>
        <th scope="col">Foto</th>
        <th scope="col">Desripcion</th>
        <th scope="col">Precio</th>
    </tr>
    </thead>
    <tbody class="table-group-divider">
    @foreach($menus as $menu)
        <tr>
            <th scope="row">{{$menu->id}}</th>
            <td>{{$menu->Nombre}}</td>
{{--            @if()--}}
                <td><img src="{{$menu->FotoMenu}}" alt="" width="70px"></td>
{{--            @endif--}}
            <td>{{$menu->Descripcion}}</td>
            <td>{{$menu->Precio}} Bs</td>
        </tr>
    @endforeach
    </tbody>
</table>
