<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PruebaTecnica</title>
    <link rel="stylesheet" href="{{ asset('css/estiloLogin.css') }}">
</head>

<body>
    <div class="main">
        <h1>Inicio Sesión</h1>
        @if(Session::has('error'))
        <h3 style="color: red;">
            {{ Session::get('error') }}
        </h3>
        @endif
        <form action="{{ route('login') }}" method="POST">
        @csrf
            <label for="first">
                Correo Electronico:
            </label>
            <input type="email" id="first" name="email" placeholder="Ingresar Correo..." required>

            <label for="password">
                Contraseña:
            </label>
            <input type="password" id="password" name="password" placeholder="Ingresar Contraseña..." required>

            <div class="wrap">
                <button>
                    Ingresar
                </button>
            </div>
        </form>

    </div>
</body>

</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PruebaTecnica</title>
    <link rel="stylesheet" href="{{ asset('css/estiloLogin.css') }}">
</head>

<body>
    <div class="container">
    <a href="{{ route('inicio') }}" class="back-button">Regresar</a>

        <h1>Inicio de Sesión</h1>
        @if(Session::has('error'))
        <h3 style="color: red;">
            {{ Session::get('error') }}
        </h3>
        @endif
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Correo Electronico:</label>
                <input type="email" name="email" id="email" placeholder="Ingresar Correo..." required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" placeholder="Ingresar Contraseña..." required>
            </div>
            <button class="btn btn-green">Iniciar Sesión</button>
        </form>
    </div>
</body>

</html>