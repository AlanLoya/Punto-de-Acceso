@extends('layouts.app')

@section('content')
  <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="background-image: url(/argon/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
  <!-- Mask -->
  <span class="mask bg-gradient-default opacity-8"></span>
  <!-- Header container -->
  <div class="container-fluid d-flex align-items-center">
      <div class="row">
          <div class="col-md-12 col-lg-7">
              <h1 class="display-2 text-white">Editar Usuarios</h1>
        </div>
    </div>
  </div>
</div>
<br>
<form method="POST" action="{{action("UsuariosController@update",$usuario->rfid)}}" enctype="multipart/form-data">
  @method('PUT')
  @csrf
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
      <input type="text" name="rfid" placeholder="RFID" value="{{$usuario->rfid}}" class="form-control form-control-alternative" required/>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <input type="number" name="no_control" placeholder="No. Control" value="{{$usuario->no_control}}" class="form-control form-control-alternative" required/>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
          <input type="text" name="nombre" placeholder="Nombre(s)" value="{{$usuario->nombre}}" class="form-control form-control-alternative" required/>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
          <input type="text" name="apellido" placeholder="Apellido Paterno" value="{{$usuario->apellido}}" class="form-control form-control-alternative" required/>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
          <input type="text" name="apellido1" placeholder="Apellido Materno" value="{{$usuario->apellido1}}" class="form-control form-control-alternative" required/>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <select class="custom-select" name="tipo" value="{{$usuario->tipo}}" style="color: black; width:300px;" class="form-control form-control-alternative" required>
          						<option value="Docente">Docente</option>
          						<option value="Alumno">Alumno</option>
				</select>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <select class="custom-select" name="carrera" value="{{$usuario->carrera}}" style="color: black; width:300px;" class="form-control form-control-alternative" required>
                      <option value="Sistemas">Sistemas</option>
                      <option value="Informatica">Informatica</option>
        </select>
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
        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
