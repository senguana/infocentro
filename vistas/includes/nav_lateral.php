<div class="sidebar">
	<div class="sidebar-background"></div>
	<div class="sidebar-wrapper scrollbar-inner">
		<div class="sidebar-content">
			<div class="user">
				<div class="avatar-sm float-left mr-2">
					<img src="./../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
				</div>
				<div class="info">
					<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
						<span>
							<?php echo $_SESSION['username_usua']; ?>
							<span class="user-level">Administrator</span>
						</span>
					</a>
					
				</div>
			</div>
			<ul class="nav">
				<li class="nav-item active">
					<a href="home.php">
						<i class="fas fa-home"></i>
						<p>Inicio</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="./usuario.php">
						<i class="fas fa-user"></i>
						<p>Usuario</p>
						
					</a>
				</li>

				<li class="nav-item">
					<a href="./representante.php">
						<i class="fas fa-user-friends"></i>
						<p>Representantes</p>
						
					</a>
					
				
				</li>
				<li class="nav-item">
					<a href="./curso.php">
						<i class="fas fa-chalkboard-teacher"></i>
						<p>Cursos</p>
						
					</a>
				</li>
				<li class="nav-item">
					<a data-toggle="collapse" href="#charts">
						<i class="fa fa-users-cog"></i>
					<p>Administrador</p>
						<span class="caret"></span>
					</a>
					<div class="collapse" id="charts">
						<ul class="nav nav-collapse">
							<li>
								<a href="./asignarCursos.php">
									<span class="sub-item">Asignar Cursos</span>
								</a>
							</li>
							<li>
								<a href="./registroCursosAlumnos.php">
									<span class="sub-item">Registro de cursos asignados</span></a>
							</li>
						</ul>
					</div>
				</li>
				<li class="nav-item">
					<a data-toggle="collapse" href="#academico">
						<i class="fas fa-users"></i>
					<p>Académico</p>
						<span class="caret"></span>
					</a>
					<div class="collapse" id="academico">
						<ul class="nav nav-collapse">
							<li>
								<a href="./alumnoBasica.php">
									<span class="sub-item">Educación Básica</span>
								</a>
							</li>
							<li>
								<a href="./alumnoSuperior.php">
									<span class="sub-item">Educación Superior</span>
								</a>
							</li>
							<li>
								<a href="./nivel.php">
									<span class="sub-item">Niveles</span>
								</a>
							</li>
							<li>
								<a href="./institucion.php">
									<span class="sub-item">Instituciones</span>
								</a>
							</li>
							<li>
								<a href="./docente.php">
									<span class="sub-item">Docentes</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="nav-item">
					<a href="./configuracion.php">
						<i class="fas fa-cog"></i>
						<p>Configuración</p>
						
					</a>
				</li>

			</ul>
		</div>
	</div>
</div