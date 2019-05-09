@extends('layouts.app')

@section('content')
  <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="background-image: url(/argon/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
  <!-- Mask -->
  <span class="mask bg-gradient-default opacity-8"></span>
  <!-- Header container -->
  <div class="container-fluid d-flex align-items-center">
      <div class="row">
          <div class="col-md-12 col-lg-7">
              <h1 class="display-2 text-white">Agregar Usuario</h1>
        </div>
    </div>
  </div>
</div>
<br>
<form method="POST" action="/usuarios">
	@csrf
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <input type="number" value="" name="rfid" placeholder="RFID" class="form-control form-control-alternative" required/>
        <button type="submit" onclick="#" class="btn btn-icon btn-3 btn-primary">
        <span class="btn-inner--icon"><i class="icon fa fa-credit-card"></i></span>
        <span class="btn-inner--text">Escanear</span></button>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <input type="number" name="no_control" placeholder="No. Control" class="form-control form-control-alternative" required/>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
          <input type="text" name="nombre" placeholder="Nombre(s)" class="form-control form-control-alternative" required/>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
          <input type="text" name="apellido" placeholder="Apellido Paterno" class="form-control form-control-alternative" required/>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
          <input type="text" name="apellido1" placeholder="Apellido Materno" class="form-control form-control-alternative" required/>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <select class="custom-select" name="tipo" style="color: black; width:300px;" class="form-control form-control-alternative" required>
          						<option selected value="">Tipo de Usuario:</option>
          						<option value="Docente">Docente</option>
          						<option value="Alumno">Alumno</option>
				</select>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <select class="custom-select" name="carrera" style="color: black; width:300px;" class="form-control form-control-alternative" required>
                      <option selected value="">Carrera:</option>
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
