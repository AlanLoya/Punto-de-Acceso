<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Card stats -->
            <div class="row">
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <span class="h2 font-weight-bold mb-0">Registros</span>
                                    <br><br>
                                    <h5 class="card-title text-uppercase text-muted mb-0">Total: {{$count}}</h5>
                                    <h5 class="card-title text-uppercase text-muted mb-0">Clases: {{$countCla}}</h5>
                                    <h5 class="card-title text-uppercase text-muted mb-0">Consulta: {{$countCon}}</h5>
                                    <h5 class="card-title text-uppercase text-muted mb-0">Practica: {{$countPra}}</h5>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <span class="h2 font-weight-bold mb-0">Usuarios</span>
                                    <br><br>
                                    <h5 class="card-title text-uppercase text-muted mb-0">Total: {{$count1}}</h5>
                                    <h5 class="card-title text-uppercase text-muted mb-0">Docentes: {{$count2}}</h5>
                                    <h5 class="card-title text-uppercase text-muted mb-0">Alumnos:  {{$count3}}</h5>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                        <i class="fas fa-users"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="card card-stats mb-4 mb-xl-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <span class="h2 font-weight-bold mb-0">Excel</span><br><br>
                                    <button type="submit"  name="" class="btn btn-outline-success" onclick="location.href='/export-registros'">
						                           Generar<br><i class="ni ni-book-bookmark"></i></button>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                        <i class="far fa-file-excel"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
