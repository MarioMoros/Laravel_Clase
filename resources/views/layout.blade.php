<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite("resources/css/app.css")
</head>
<body>
<header class="h-17vh bg-blue-200 border-2 p-5
                flex flex-row justify-between content-center">
    <img src="{{asset("img/logo.png")}}" alt="">
    <h1>Datos jugosos</h1>
    @guest
    <div>
        <form action="login" method="post">
            @method('post')
            @csrf
            <input type="text" name="email" placeholder="email" id=""><br>
            <input type="text" name="password" placeholder="password" id=""><br>
            <input type="submit" value="Login"><br>
        </form>
        <a href="register">Register</a>
    </div>
    @endguest
    @auth
        Conectado como {{auth()->User()->name}}
        <form action="logout" method="post">
            @csrf
            <input type="submit" value="Logout">
        </form>
    @endauth
</header>
<nav class="h-12vh bg-emerald-300 border-2 px-10
                flex flex-row justify-between content-center">
    <a class="h-1" href="alumnos">Alumnos</a>
    <a class="h-1" href="producto">Productos</a>
{{--    <a href="tiendas">Tiendas</a>--}}
{{--    <a href="familias">Familias</a>--}}
</nav>
<main class="bg-red-300 border-2 justify-between ">
    @yield('contenido')
</main>
<footer class="h-12vh bg-yellow-300 border-2
                flex flex-row justify-between content-center">
    @copyright con fosquitos
</footer>
</body>
</html>
