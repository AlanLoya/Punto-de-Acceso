@extends('layouts.app')

@section('content')
  <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="background-image: url(../argon/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
  <!-- Mask -->
  <span class="mask bg-gradient-default opacity-8"></span>
  <!-- Header container -->
  <div class="container-fluid d-flex align-items-center">
      <div class="row">
          <div class="col-md-12 col-lg-7">
              <h1 class="display-2 text-white">Usuarios</h1>
              <button type="submit" onclick="location.href='/agregar-usuario'" class="btn btn-outline-secondary"><i style="font-size:26px;color:#1965be;vertical-align: middle;" class="ni ni-fat-add">
              </i>Agregar</button>
        </div>
    </div>
  </div>
</div>
<br>
<div align="center">{{ $usuario->links() }}</div>
<div class="table-responsive">
  <table class="table align-items-center table-dark">
  <thead class="thead-dark">
    <tr align="center">
      <th scope="col">RFID</th>
      <th scope="col">No. Control</th>
      <th scope="col">Nombre(s)</th>
      <th scope="col">Apellido Paterno</th>
      <th scope="col">Apellido Materno</th>
      <th scope="col">Tipo de Usuario</th>
      <th scope="col">Carrera</th>
      <th></th>
      <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach ($usuario as $usr)
      <tr align="center">
        <td>{{$usr->rfid}}</td>
        <td>{{$usr->no_control}}</td>
        <td>{{$usr->nombre}}</td>
        <td>{{$usr->apellido}}</td>
        <td>{{$usr->apellido1}}</td>
        <td>{{$usr->tipo}}</td>
        <td>{{$usr->carrera}}</td>
        <td><a href="usuarios/{{$usr->rfid}}/edit" style="font-size:24px;color:white" class="fas fa-pencil-alt"></a></td>
        <td><a style="font-size:24px;color: white " type="reset" class="fas fa-trash-alt" OnClick="if ( confirm('Esta Seguro que Desea Borrar ? {{$usr->no_control}} : {{$usr->nombre}}')) return location.href='usuarios/delete/{{$usr->rfid}}'"></a></td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
