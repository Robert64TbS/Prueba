@include('partials.navbar')
<div class="containerHome">
    <h1>Registar Usuario</h1>
    @if(Session::has('success'))
    <div>
        {{ Session::get('success') }}
    </div>
    @endif
    <form class="formUsuarios" action="{{ route('register') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nombre:</label>
            <input class="inputFormUsuarios field" type="text" name="name" id="name" placeholder="Nombre..." required>
        </div>
        <div>
            <label for="email">Correo Electronico:</label>
            <input class="inputFormUsuarios field" type="email" name="email" id="email" placeholder="Correo..." required>
        </div>
        <div>
            <label for="password">Contraseña:</label>
            <input class="inputFormUsuarios field" type="password" name="password" id="password" required>
        </div>
        <div>
            <p class="center-content">
                <button class="btn btn-green">Registrar</button>
            </p>
        </div>
    </form>
    <div class="containerTableUsuario">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Contraseña</th>
                </tr>
            </thead>
            <tbody>
                @if($users->count() > 0)
                @foreach($users as $rs)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $rs->name }}</td>
                    <td>{{ $rs->email }}</td>
                    <td>{{ $rs->password }}</td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td>No existen usuarios</td>
                </tr>
                @endif
            </tbody>
        </table>
        <div>
        </div>
        @include('partials.footer')