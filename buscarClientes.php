<?php
include("conexion/conexion.php");

?>


<!DOCTYPE HTML>

<html>
	<head>
		<title>Buscar Clientes</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload" style="background-color:#b9ffff">
		<div id="page-wrapper">

			<!-- Header -->
			<header id="header">
					<h1><a href="index.html">My Saving Colombia</a><img class="icosaving" style="max-width:60px;max-height:80%;float:left"src="images/ico01.png" alt="" /></h1>
					<nav id="nav">
						<ul>
							<li><a href="index.html">Inicio</a></li>
							<li>
								<a href="#" class="icon solid fa-angle-down">Servicios</a>
								<ul>
									<li><a href="persona.html">Personas</a></li>
									<li><a href="empresa.html">Empresas</a></li>
									<li><a href="clientes.php">	Clientes</a></li>
									<li><a href="simulador.php">Simulador de Credito</a></li>
									<li><a href="contacto.php">Contacto</a></li>
								</ul>
							</li>
							<li><a href="login.php" class="button">Iniciar Sesión</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<section id="main" class="container">
					<header>
						<h2>Buscar  Clientes</h2>
						<p>Favor ingresar el número de identificación del cliente que desea buscar.</p>
					</header>
					<div class="row">
						<div class="col-12">
				</section>

              <!--Generar formularios mediante arreglos y clases -->


	<section class="box">

 		<div class="container">
				<form action="" method="post">
					Número de Identificación: <input type="search" name="identificacion">
	 
					<button class="buscar_btn" type="submit" value ="Buscar"  name="submit">
						<ion-icon name="search-outline"></ion-icon>
					</button>
				</div>
				</form>



					<table class="table-wrapper" name="mostrarTabla"  value="MostrarP">
                		<thead> 
                    	<tr>
                        <th>Numero de Identificacion</th>
                        <th>Tipo de Identificacion</th>
                        <th>Nombres y Apellidos</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Ciudad de Residencia</th>
                        <th>Departamento de Residencia</th>
                        <th>Direccion Residencia</th>
                        <th>Numero de Celular</th>
                        <th>Estado Civil</th>
                        <th>Correo Electronico</th>
                    </tr>
                </thead>


				<?php
				if(isset($_POST['submit'])){

					$buscar = $_POST['identificacion'];
					$obtenerclientes= $pdo->prepare("SELECT * FROM clientes WHERE identificacion LIKE '%$buscar%'");
					$obtenerclientes->execute();
					$listadeClientes=$obtenerclientes->fetchALL(PDO::FETCH_ASSOC);
						}

						?>

						<?php if(isset($_POST['identificacion'])){ foreach ($listadeClientes as $lista){ ?>
							<tr>
								<td> <?php echo $lista['identificacion']; ?> </td>
								<td> <?php echo $lista['tipoIdentificacion']; ?> </td>
								<td> <?php echo $lista['nombres']; ?> </td>
								<td> <?php echo $lista['fechaNacimiento']; ?> </td>
								<td> <?php echo $lista['ciudad']; ?> </td>
								<td> <?php echo $lista['departamento']; ?> </td>
								<td> <?php echo $lista['direccion']; ?> </td>
								<td> <?php echo $lista['celular']; ?> </td>
								<td> <?php echo $lista['estadoCivil']; ?> </td>
								<td> <?php echo $lista['correo']; ?> </td>
						</tr>

						<?php } }?>



							</table>
		</div>

      </<section>
		
							

			<!-- Footer -->
			<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon brands fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>
					<ul class="copyright">
						<li> <a>Jhon Ospino.&copy; Todos los Derechos Reservados.</a></li>
					</ul>
				</footer>

		

		<!-- Scripts -->
			<script src="assets/js/jquery-3.6.1.min.js"></script>
			<script src="assets/js/controlCampos.js"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	</body>
</html>