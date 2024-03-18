@include('partials.navbar')
<div class="containerHome">
  <div class="containerTable">
  <!-- <h1> Bienvenido, {{ Auth::user()->name }}</h1> -->
  <table>
    <thead>
      <tr>
        <th>#</th>
        <th>Celular</th>
        <th>DNI</th>
        <th>Fecha</th>
      </tr>
    </thead>
    <tbody>
      @if($datos_promociones->count() > 0)
      @foreach($datos_promociones as $dato)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $dato->celular_dato_promocion }}</td>
        <td>{{ $dato->dni_dato_promocion }}</td>
        <td>{{ $dato->created_at }}</td>
      </tr>
      @endforeach
      @else
      <tr>
        <td>No existen datos</td>
      </tr>
      @endif
    </tbody>
  </table>
  <div class="pagination">
    {{ $datos_promociones->links() }}
  </div>
  <a class="btn btn-green" href="{{ route('exportar') }}">Exportar Usuarios</a>
</div>
</div>
@include('partials.footer')