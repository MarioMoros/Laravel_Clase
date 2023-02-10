@extends("layout")
@section("contenido")
    <a href="{{route("productos.create")}}">Nuevo Producto</a>
    <table class="table-auto border-separate">
        <caption>Listado de productos</caption>
        <tr class="border">
            <th class="border-2">Codigo</th>
            <th class="border-2">Nombre</th>
            <th class="border-2">Nombre_Corto</th>
            <th class="border-2">Descripcion</th>
            <th class="border-2">PvP</th>
            <th class="border-2">Familia</th>
        </tr>
        @foreach($productos as $producto)
            <tr class="border">
                <td class="border">{{$producto->cod}}</td>
                <td class="border">{{$producto->nombre}}</td>
                <td class="border">{{$producto->nombre_corto}}</td>
                <td class="border">{{$producto->descripcion}}</td>
                <td class="border">{{$producto->pvp}}</td>
                <td class="border">{{$producto->familia}}</td>
                <td class="border">
                    <form action="{{route("productos.destroy", $producto->cod)}}" method="post">
                        @csrf
                        @method("delete")
                        <input type="submit" value="Borrar">
                    </form>
                </td>
                <td class="border">
                    <a href="{{route("productos.edit", $producto->cod)}}">Editar</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
