@extends('layouts.app')

@section('content')
  <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="background-image: url(../argon/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
  <!-- Mask -->
  <span class="mask bg-gradient-default opacity-8"></span>
  <!-- Header container -->
  <div class="container-fluid d-flex align-items-center">
      <div class="row">
          <div class="col-md-12 col-lg-7">
              <h1 class="display-2 text-white">Registros</h1>
              <button type="submit" onclick="location.href='/agregar-registro'" class="btn btn-outline-secondary"><i style="font-size:26px;color:#1965be;vertical-align: middle;" class="ni ni-fat-add">
              </i>Agregar</button><br>

        </div>
    </div>
  </div>
</div>
<br>
<div align="center">{{ $registro->links() }}</div>
<div class="table-responsive">
  <table class="table align-items-center table-dark">
  <thead class="thead-dark">
    <tr align="center">
      <th><strong>RFID <i class="icon fa fa-credit-card"></i></strong></th>
      <th><strong>No. Control</strong></th>
      <th><strong>Nombre(s)</strong></th>
      <th><strong>Apellido Paterno</strong></th>
      <th><strong>Apellido Materno</strong></th>
      <th><strong>Tipo de Usuario</strong></th>
      <th><strong>Carrera</strong></th>
      <th><strong>Materia <i class="icon ni ni-book-bookmark"></i></strong></th>
      <th><strong>Ubicación</strong></th>
      <th><strong>Actividad</strong></th>
      <th><strong>Entrada</strong></th>
      <th><strong>Salida</strong></th>
      <th><strong>Uso <i style="vertical-align: middle;" class="ni ni-time-alarm"></i></strong></th>
    </tr>
  </thead>
  <tbody>
@foreach ($registro as $reg)
    <tr align="center">
      <td>{{$reg->rfid}}</td>
      <td>{{$reg->no_control}}</td>
      <td>{{$reg->nombre}}</td>
      <td>{{$reg->apellido}}</td>
      <td>{{$reg->apellido1}}</td>
      <td>{{$reg->tipo}}</td>
      <td>{{$reg->carrera}}</td>
      <td>{{$reg->materia}}</td>
      <td>{{$reg->ubicacion}}</td>
      <td>{{$reg->actividad}}</td>
      <td>{{$reg->entrada}}</td>
      <td>
        @if (empty($reg->salida))
          <button type="submit" onclick="location.href='/salida/{{$reg->id}}'" class="btn btn-danger"><i style="vertical-align: middle;" class="ni ni-user-run">
          </i> Salida</button>
        @endif
        {{$reg->salida}}
      </td>
      <td>{{$reg->uso}}</td>
       <td><a href="registros/{{$reg->id}}/edit" style="font-size:24px;color:white" class="fas fa-pencil-alt"></a></td>
       <td><a style="font-size:24px;color: white " type="reset" class="fas fa-trash-alt" OnClick="if ( confirm('Esta Seguro que Desea Borrar ? {{$reg->rfid}}:{{$reg->nombre}} {{$reg->actividad}} {{$reg->entrada}} ')) return location.href='registros/delete/{{$reg->id}}'"></a></td>
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
