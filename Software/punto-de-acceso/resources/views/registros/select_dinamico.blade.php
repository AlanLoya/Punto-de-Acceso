
	<body>
            <label for="">Semestre</label>
			<select class="custom-select" name="materia" onchange="cambia()" style="color: black; width:300px;" class="form-control form-control-alternative" required>
				<option>Seleccione
				<option value="10">Consulta

				<option value="1">Primero
				<option value="2">Segundo
				<option value="3">Tercero
				<option value="4">Cuarto
                <option value="5">Quinto
                <option value="6">Sexto
                <option value="7">Septimo
                <option value="8">Octavo
			</select>
			<label for="">Materia</label>
			<select class="custom-select" id="materias_box" name="opt"style="color: black; width:300px;" class="form-control form-control-alternative" required>
				<option value="-">
			</select>

		<script type="text/javascript">
			//1) Definir Las Variables Correspondintes
			var opt_10 = new Array ("Consulta");
			var opt_1 = new Array ("Calculo Diferencial ACF-0901",
									"Fundamentos de Programación SCD-1008",
									"Taller de Ética ACA-0907",
									"Matemáticas Discretas AEF-1041",
									"Taller de Administración SCH-1024",
									"Fundamentos de Investigación ACC-0906",
									"Fundamentos de Telecomunicaciones AEC-1034");

			var opt_2 = new Array ("Calculo Integral ACF-0902",
									"Programación Orientada a Objetos AED-1286",
									"Contabilidad Financiera AEC-1008",
									"Química AEC-1058",
									"Algebra Lineal AEC-0903",
									"Probabilidad y Estadística AEF-1052",
									"Redes de Computadora SCD-1021");

			var opt_3 = new Array ("Calculo Vectorial ACF-0904",
									"Estructura de Datos AED-1026",
									"Cultura Empresarial SCC-1005",
									"Investigación de Operaciones SCC-1013",
									"Sistemas Operativos AEC-1061",
									"Física General SCF-1006",
									"Conmutación y Enrutamiento de Redes de Datos SCD-1004");

			var opt_4 = new Array ("Ecuaciones Diferenciales ACF-0905",
									"Tópicos Avanzados de Programación SCD-1027",
									"Fundamentos de Bases de Datos AEF-1031",
									"Métodos Numéricos SCC-1017",
									"Taller de Sistemas Operativos SCA-1026",
									"Principios Eléctricos y Aplicaciones Digitales SCD-1018",
									"Administración de Redes SCA-1002");

            var opt_5 = new Array ("Desarrollo Sustentable ACD-0908",
									"Lenguajes y Autómatas I SCD-1013",
									"Taller de Bases de Datos SCA-1025",
									"Simulación SCD-1022",
									"Fundamentos de Ingeniería de Software SCC-1007",
									"Arquitectura de Computadoras SCD-1003",
									"Programación Web AEB1055");

			var opt_6 = new Array ("Lenguajes y Autómatas II SCD-1016",
									"Taller de Investigación I ACA-0909",
									"Administración de Bases de Datos SCB-1001",
									"Graficación SCC-1010",
									"Ingeniería de Software SCD-1011",
									"Lenguajes de Interfaz SCC-1014",
									"Administración de Servidores TID-1601");

            var opt_7 = new Array ("Taller de Investigación II ACA-0910",
									"Programación Lógica Funcional SCC-1019",
									"Inteligencia Artificial SCC-1012",
									"Tecnologías Emergentes de SW TIB-1602",
									"Sistemas Programables SCD-1023");

            var opt_8 = new Array ("Gestión de Proyectos de Software SCG-1009",
									"Desarrollo de APP para Móviles TID-1603",
									"Sistemas Embebidos TID-1604",
									"Diseño y Soporte de Redes 1605",
									"Tópicos TID-1606");

			// 2) crear una funcion que permita ejecutar el cambio dinamico
			function cambia(){
				var materia;
				//Se toma el vamor de la " seleccionada"
				materia = document.formulario.materia[document.formulario.materia.selectedIndex].value;
				//se chequea si la "" esta definida
				if(materia!=0){
					//selecionamos las cosas Correctas
					mis_opts=eval("opt_" + materia);
					//se calcula el numero de cosas
					num_opts=mis_opts.length;
					//marco el numero de opt en el select
					document.formulario.opt.length = num_opts;
					//para cada opt del array, la pongo en el select
					for(i=0; i<num_opts; i++){
						document.formulario.opt.options[i].value=mis_opts[i];
						document.formulario.opt.options[i].text=mis_opts[i];
					}
					}else{
						//si no habia ninguna opt seleccionada, elimino las cosas del select
						document.formulario.opt.length = 1;
						//ponemos un guion en la unica opt que he dejado
						document.formulario.opt.options[0].value="-";
						document.formulario.opt.options[0].text="-";
					}
					//hacer un reset de las opts
					document.formulario.opt.options[0].selected = true;
				}
		</script>
