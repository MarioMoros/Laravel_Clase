@extends("layout")
@section("contenido")
    <a href="{{route("alumnos.create")}}">Nuevo Alumno</a>
    <tabla filas_serializado="{{$alumnos}}" campos_serializado="{{$campos}}" nombre="{{$nombre}}"></tabla>
@endsection
