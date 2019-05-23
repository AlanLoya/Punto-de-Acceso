@extends('layouts.app')

@section('content')
  <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="background-image: url(/argon/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
  <!-- Mask -->
  <span class="mask bg-gradient-default opacity-8"></span>
  <!-- Header container -->
  <div class="container-fluid d-flex align-items-center">
      <div class="row">
          <div class="col-md-12 col-lg-7">
              <h1 class="display-2 text-white">Editar Registro</h1>
        </div>
    </div>
  </div>
</div>
<br>
<form name="formulario" method="POST" action="{{action("RegistrosController@update",$registro->id)}}" enctype="multipart/form-data">
  @method('PUT')
  @csrf
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <input type="text" name="rfid" placeholder="RFID" value="{{$registro->rfid}}" class="form-control form-control-alternative"readonly required/>      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <input type="number" name="no_control" placeholder="No. Control" value="{{$registro->no_control}}" class="form-control form-control-alternative"readonly required/>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
          <input type="text" name="nombre" placeholder="Nombre(s)" value="{{$registro->nombre}}" class="form-control form-control-alternative"readonly required/>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
          <input type="text" name="apellido" placeholder="Apellido Paterno" value="{{$registro->apellido}}" class="form-control form-control-alternative"readonly required/>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
          <input type="text" name="apellido1" placeholder="Apellido Materno" value="{{$registro->apellido1}}" class="form-control form-control-alternative"readonly required/>
      </div>
    </div>
  </div>
<div class="row">
    <div class="col-md-6">
      <div class="form-group">
      <input type="text" name="tipo" placeholder="Tipo de Usuario" value="{{$registro->tipo}}" class="form-control form-control-alternative"readonly required/>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <input type="text" name="carrera" placeholder="Apellido Materno" value="{{$registro->carrera}}" class="form-control form-control-alternative"readonly required/>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <select class="custom-select" name="actividad" value="{{$registro->actividad}}" style="color: black; width:200px;" class="form-control form-control-alternative" required>
                      <option value="Clase">Clase</option>
                      <option value="Consulta">Consulta</option>
                      <option value="Practica">Practica</option>
                  </select>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        @include('registros.select_dinamico')
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <select class="custom-select" name="ubicacion" value="{{$registro->ubicacion}}" style="color: black; width:200px;" class="form-control form-control-alternative"readonly required>
                      <option value="Microcontroladores">Microcontroladores</option>
                      <option value="Lab. Linux">Lab. Linux</option>
                      <option value="Lab. Redes">Lab. Redes</option>
                      <option value="Lab. iMac">Lab. iMac</option>
                      <option value="Centro de Desarrollo de Software">Centro de Desarrollo de Software</option>
                  </select>
      </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
      <div class="form-group">
          <input type="datetime" name="entrada" placeholder="Entrada" value="{{$registro->entrada}}" class="form-control form-control-alternative" required/>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
          <input type="datetime-local" name="salida" placeholder="Salida" value="{{$registro->salida}}" class="form-control form-control-alternative" required/>
      </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <button type="submit" class="btn btn-icon btn-3 btn-primary">
				<span class="btn-inner--icon"><i class="icon fa fa-save fa-lg "></i></span>
        <span class="btn-inner--text">Guardar</span></button>
    </div>
  </div>
</div>
</form>

    </div>
@endsection
@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
