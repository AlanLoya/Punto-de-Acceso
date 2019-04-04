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
        </div>
    </div>
  </div>
</div>
  <table id="customers">
    <tr>
      <th><strong>RFID</strong></th>
      <th><strong>No. Control</strong></th>
      <th><strong>Nombre(s)</strong></th>
      <th><strong>Apellido(s)</strong></th>
      <th><strong>Tipo de Usuario</strong></th>
      <th><strong>Materia</strong></th>
      <th><strong>Actividad</strong></th>
      <th><strong>Entrada</strong></th>
      <th><strong>Salida</strong></th>
      <th><strong>Tiempo Uso</strong></th>
    </tr>

    <tr>
      <td>321321</td>
      <td>15040110</td>
      <td>Alan</td>
      <td>Loya</td>
      <td>Alumno</td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td><a href="libros/0/edit" style="font-size:24px;color:#495057" class="fas fa-pencil-alt"></a></td>
      <td><a style="font-size:24px;color: #de0000 " type="reset" class="fas fa-trash-alt" OnClick="if ( confirm('Esta Seguro que Desea Borrar ? 0: ')) return location.href='libros/delete/0'"></a></td>
     </tr>
     <tr>
       <td>321321</td>
       <td>15040110</td>
       <td>Alan</td>
       <td>Loya</td>
       <td>Alumno</td>
       <td> </td>
       <td> </td>
       <td> </td>
       <td> </td>
       <td> </td>
       <td><a href="libros/0/edit" style="font-size:24px;color:#495057" class="fas fa-pencil-alt"></a></td>
       <td><a style="font-size:24px;color: #de0000 " type="reset" class="fas fa-trash-alt" OnClick="if ( confirm('Esta Seguro que Desea Borrar ? 0: ')) return location.href='libros/delete/0'"></a></td>
      </tr>

  </table>
        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
