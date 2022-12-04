<?php


/*Impide que se muestra la pantalla a usuario no autorizado*/

require_once 'validarSession.php';



/* Declarando variables para capturar valores del formulario Cuentas */
$id = isset($_POST['ID']) ? $_POST['ID'] : '';
$identero = intval($id);
$cuenta = isset($_POST['numcuenta']) ? $_POST['numcuenta'] : '';
$cuentaentero = intval($cuenta);
$tipoCuenta = isset($_POST['tipoCuenta']) ? $_POST['tipoCuenta'] : '';
$identificacion = isset($_POST['identificacion']) ? $_POST['identificacion'] : '';
$identificacionentero= intval($identificacion);
$saldo = isset($_POST['saldo']) ? $_POST['saldo'] : '';
$saldodecimal = floatval($saldo);
$accion = isset($_POST['accion']) ? $_POST['accion'] : '';

include 'conexion/conexion.php';


/* Consultar tabla Clientes  */
$queryCLientes = $pdo->prepare('SELECT * FROM `clientes` WHERE 1');

$queryCLientes->execute();

$arrayCLientes = $queryCLientes->fetchALL(PDO::FETCH_ASSOC);

/* Fin Consulta Tabla Clientes */



/*Inicio Consulta tabla Cuentas */

$queryCuentaBancaria = $pdo->prepare('SELECT * FROM `cuentas` WHERE 1');

$queryCuentaBancaria->execute();

$ArregloCuentaBancarias = $queryCuentaBancaria->fetchALL(PDO::FETCH_ASSOC);





/*Fin Consulta tabla Cuentas*/






/* Control de la acción deseada por el usuario, CREAR,ACTUALIZAR, ELIMINAR */

switch ($accion) {
    case 'btnAgregarCliente':
       
		if (!empty($cuenta) && !empty($tipoCuenta) && !empty($identificacion) && !empty($saldo)){


			$cadena = $pdo->prepare(
				'INSERT INTO cuentas(numero,tipoCuenta,idcliente,saldo) VALUES (:numero,:tipoCuenta,:idcliente,:saldo) '
			);
		   
			$cadena->bindParam(':numero', $cuenta);
			$cadena->bindParam(':tipoCuenta', $tipoCuenta);
			$cadena->bindParam(':idcliente', $identificacion);
			$cadena->bindParam(':saldo', $saldo);
	
			$cadena->execute();
			header('Location: administrarCuentas.php');
			break;
	


			
		} else
		{
			echo 'No es permitido ingresar campos vacíos.';
			
		}
       
		break;

    case 'btnModificarCliente':

        /*script para modificar Cuentas Bancanarias */
                $cadena = $pdo->prepare('UPDATE cuentas SET numero=:numero,tipoCuenta=:tipoCuenta,idcliente=:idcliente,saldo=:saldo
                 WHERE id=:id');

        $cadena->bindParam(':id', $identero);
        $cadena->bindParam(':numero', $cuentaentero);
        $cadena->bindParam(':tipoCuenta', $tipoCuenta);
        $cadena->bindParam(':idcliente',$identificacionentero);
        $cadena->bindParam(':saldo', $saldodecimal);

        $cadena->execute();

        header('Location: administrarCuentas.php');
		
        break;

    case 'btnEliminarCliente':
        echo 'presiono boton eliminar';

        /*Bloque de codigo para Eliminar los productos */

        $cadena = $pdo->prepare('DELETE FROM  cuentas WHERE  id=:id');
        /*Pasamos los valores que tenemos almacenados en las variables temporales*/

        $cadena->bindParam(':id',$identero);

        $cadena->execute();

        header('Location: administrarCuentas.php');
        break;
}









?>


<!DOCTYPE HTML>

<html>
	<head>
		<title>Gestion de Cuentas Bancarias</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel ="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>


     
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/poppers.js/1.12.9/udm/popper.min.js" > </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"> </script>
	</head>
	<body class="is-preload" style="background-color:#b9ffff">
		<div id="page-wrapper">

			<!-- Header -->
			<header id="header">
					<h1><a style="font-size:medium" href="index.html">My Saving Colombia</a><img class="icosaving" style="max-width:60px;max-height:80%;float:left"src="images/ico01.png" alt="" /></h1>
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
						<h2>Gestion de Cuentas Bancarias</h2>
						<p>Registre información veraz </p>
					</header>
					<div class="row">
						<div class="col-12">


              <!--Generar formularios mediante arreglos y clases -->

				 <!-- INICIO DEL FORMULARIO -->


				 <div class="container">
    <form action="" method="post" enctype="multipart/form-data"> 
    
					<div class="modal fade" id="cuentasClientesModal" tabindex="-1" role="dialog" aria-labelledby="cuentasClientesModal" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
								<h5 class="modal-title" id="cuentasClientesModal">Gestion de Cuentas Bancarias</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
					<div class="modal-body">

						<div class="form-row">


						<label for="">ID</label>
							<input class="form-control" type="number" name="ID"  value= "<?php echo $id; ?>" placeholder="" id="ID" require="" autocomplete="off" readonly>
							<br>


						<label for="">Numero de Cuenta</label>
							<input class="form-control" type="number" name="numcuenta"  value= "<?php echo $cuenta; ?>" placeholder="" id="numcuenta" require="" autocomplete="off">
							<br>

							<label for="">Tipo de Cuenta</label>
								<select class="form-control" type="text" name="tipoCuenta" id="tipoCuenta" value= "<?php echo $tipoCuenta; ?>" aria-label="Default select example" required="" >
									<br>
															<option selected=""><?php echo $tipoCuenta; ?></option>
															<option value="Cuenta Nomina"> Cuenta Nomina</option>
															<option value="Cuenta Ahorro"> Cuenta Ahorro</option>
															<option value="Cuenta Corriente"> Cuenta Corriente</option>
															
															
									</select>

							<br>
							<br>
							<label for="">Numero de Identificación </label>
								<select class="form-control" type="number" name="identificacion" id="identificacion" aria-label="Default select example" value= "<?php echo $identificacion; ?>" required="">
								<br>
                        				<option selected=""><?php echo $identificacion; ?></option>
											<?php foreach ($arrayCLientes as $idCliente):
												echo '<option value="' .
													$idCliente['id'] .
													'">' .
													$idCliente['identificacion'] .
													'</option>';
												endforeach; ?>
								</select>
								<br>

							<label for="">Saldo de la Cuenta:</label>
							
							<input class="form-control" type="number" name="saldo" placeholder="" id="saldo"  value= "<?php echo $saldo; ?>" require="" autocomplete="off">
							<br>

						</div>

						
					</div>


					<div class="modal-footer">

						<button value="btnAgregarCliente"  class="btn btn-success" type="submit" name="accion"> Agregar </button>
						<button value="btnModificarCliente" class="btn btn-warning" type="submit" name="accion"> Modificar </button>
						<button value="btnEliminarCliente" class="btn btn-danger" type="submit" name="accion"> Eliminar </button>
						<button value="btnCancelarCliente" class="btn btn-primary" type="submit" name="accion"> Cancelar </button>
							
						</div>
					</div>
					
					</div>
				</div>
				</div>

					<!-- Button trigger modal -->
					<div>

						<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#cuentasClientesModal" >
								Gestinar Cuentas Bancarias+ 
								</button>
					</div>
						

					
					


												

							 
	</form>

      <br>
	  <hr>
	  
				<!-- Inicio de la tabla -->


		<pre>

			<table class="table-wrapper" name="mostrarTabla"  value="MostrarP">
				<thead> 
					<tr>
						<th>ID</th>
						<th>Numero de Cuenta Bancaria</th>
						<th>Tipo de Cuenta Bancaria</th>
						<th>Numero Identificación</th>
						<th>Saldo</th>
						<th>Acciones</th>
					</tr>
				</thead>

				<?php foreach ($ArregloCuentaBancarias as $Cuentas) { ?>
					<tr>
						<td> <?php echo $Cuentas['id']; ?> </td>
						<td> <?php echo $Cuentas['numero']; ?> </td>
						<td> <?php echo $Cuentas['tipoCuenta']; ?> </td>
						<td> <?php echo $Cuentas['idcliente']; ?> </td>
						<td> <?php echo $Cuentas['saldo']; ?> </td>
						


						<!--Bloque de codigo que permite seleccionar registro de la tabla cuentas y enviarlos al formulario-->
						<td> 
								
							<form action ="" method= "post">

							<input type="hidden" name="ID"  id= "ID" value= "<?php echo $Cuentas[
								'id'
							]; ?>">
							<input type="hidden" name="numcuenta" id= "numcuenta" value="<?php echo $Cuentas[
								'numero'
							]; ?>">
							<input  type="hidden" name="tipoCuenta" value="<?php echo $Cuentas[
								'tipoCuenta'
							]; ?>">
							
							<input  type="hidden" name="identificacion" value="<?php echo $Cuentas[
								'idcliente'
							]; ?>">
							<input type="hidden" name="saldo" value="<?php echo $Cuentas[
								'saldo'
							]; ?>">
							

						
								<input  class="button special small" type="submit" value="Seleccionar" name="accion" id="accion"  >
							
								

							</form>
							</td>
						<!--Finaliza Bloque de codigo seleccinar registro productos para enviarlo a formulario de podructos-->

					</tr>

				<?php } ?>


			</table>
		</pre>					

		<?php include 'session_parrafo.php'; ?>


</div>






















</section>



						<!-- FIN DEL FORMULARIO -->			

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