@extends("layout")
@section("contenido")
    </fieldset>
    <form action="{{route("productos.store")}}" method="post">
        @csrf
        @method('post')
        Cod <input type="text" name="cod" id=""><br>
        Nombre <input type="text" name="nombre" id=""><br>
        Nombre_Corto <input type="text" name="nombre_corto" id=""><br>
        Descripcion <input type="text" name="descripcion" id=""><br>
        PvP <input type="text" name="pvp" id=""><br>
        Familia <input type="text" name="familia" id=""><br>
        <input type="submit" value="Guardar">
    </form>
    </fieldset>
@endsection
