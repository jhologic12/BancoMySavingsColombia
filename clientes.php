

<!DOCTYPE HTML>

<html>
	<head>
		<title>Registro de Clientes</title>
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
									<li><a href="buscarClientes.php">Buscar Clientes</a></li>
									<li><a href="simulador.php">Simulador de Credito</a></li>
									<li><a href="contacto.html">Contacto</a></li>
								</ul>
							</li>
							<li><a href="login.php" class="button">Iniciar Sesión</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<section id="main" class="container">
					<header>
						<h2>Registrar Clientes</h2>
						<p>Favor diligenciar cada uno de los campos a continuación </p>
					</header>
					<div class="row">
						<div class="col-12">


              <!--Generar formularios mediante arreglos y clases -->



			  <?php
include ("generarElementos.php");
$Identificacion = array ("Numero de Documento");
$tipoIdentificacion = array ("cedula ciudadania","cedula extranjeria","pasaporte","tarjeta de identidad","registro civil","permiso especial de permanencia");
$NombreYApellido= array("Nombre y Apellidos Completos");
$FechaNacimiento= array("Fecha Nacimiento");
$otrosDatos = array ("Numero Celular", "Direccion Residencia","Departamento Residencia","Ciudad de Residencia");
$EstadoCivil = array ("Soltero","Casado", "Union Libre");
$email = array ("correo electronico");
?>
<section class="box">
 <div class="container">
<form action="guardarClientes.php" method="post">
    <?php

    $ElementsForm = new OBJElementosForm ();
    echo $ElementsForm-> CrearTypeInputNumber($Identificacion);

    echo "<label> Tipo de Documento </label>";
    echo   $ElementsForm-> crearTipoDocumento($tipoIdentificacion,"tipoIdentificacion");
    echo "<br>";
	
    echo   $ElementsForm-> CrearTypeInputText($NombreYApellido);
    echo "<br>";
    echo   $ElementsForm-> CrearTypeFecha($FechaNacimiento);
    echo "<br>";
    echo   $ElementsForm-> CrearTypeInputText($otrosDatos);
    echo "<br>";
    echo   $ElementsForm-> crearTipoDocumento($EstadoCivil,"Estado Civil");
    echo "<br>";
    
    echo $ElementsForm-> CrearTypeInputText($email);
    echo "<br>";
    
    ?>

    <input  type="submit" value ="Enviar"  name="submit"/>
    <input type="reset" value ="Limpiar"/>

</div>
</form>





							

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

		</div>

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

	</body>
</html>