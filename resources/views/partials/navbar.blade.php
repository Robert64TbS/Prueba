<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home - PruebaTecnica</title>
  <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>

<body>
  <div class="navbar">
    <a href="{{ route('home') }}">Inicio</a>
    <a href="{{ route('register') }}">Usuarios</a>
    <div class="navbar-right">
      <form id="logoutForm" action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
        @csrf
        @method('DELETE')
        <a href="#" onclick="document.getElementById('logoutForm').submit()">Cerrar Sesión</a>
      </form>
    </div>
  </div>