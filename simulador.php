

<html>
	<head>
		<title>Simulador - MySaving Colombia</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<meta http-equiv="Cache-control" content="no-cache">
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
									<li><a href="simulador.html">Simulador de Credito</a></li>
									<li><a href="contacto.php">Contacto</a></li>
								</ul>
							</li>
							<li><a href="#" class="button">Iniciar Sesión</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<section id="main" class="container">
					<header>
						<h2 style="color:#1465bb">Simulador de Crédito
					
						</h2>
						<p style="color:#1465bb">Ingrese los valores definidos a continuación</p>
					</header>
					<div class="box">
					<div class="row">
						
							<form action="" method="POST">
								<label for="capital">Ingrese la cantidad de dinero que desea prestar</label>
								<input type="number" step="0.01" name="valor" id="valor" class="form-control" required>
				
							  
				
								<label for="periodo">Numero de Cuotas </label>
								<select class="form-control" type="number"   name="cuotafija" id="cuotafija" class="form-control" required  > <br>
									 <br>
											 <option selected>Ingrese Numero de Cuotas</option>
															<option value=6>6</option>
															<option value=12>12</option>
															<option value=18>18</option>
															<option value=24>24</option>
															<option value=36>36</option>
															<option value=48>48</option>
															<option value=60>60</option>
									</select>
									<br>
								<input style="background-color:#1465bb" type="submit" id="calcular" name="calcular" value="Calcular" class="btn btn-success form-control">
							</form>
						</div>
						
					</div>
					<?php 
					
				
					if(isset($_POST['calcular'])){
						$prestamo = $_POST['valor'];
						
						$cuota = $_POST['cuotafija'];
				
				
						$cuotaInicial = 0.30 *$prestamo; 
						$saldoPrestamo = (0.70 * $prestamo) + 0.112 ; 
						$SubTotal = 0;
						$valorCuota = $saldoPrestamo / $cuota;
				
				
						?>
						<table class="table table-striped">
						<thead class ="thead-dark">
							<th scope="col" style="background-color:#1465bb;color:white" >Cuota Inicial</th>
							<th scope="col" style="background-color:#1465bb;color:white">Saldo Prestamo</th>
							</thead>
						  <tr>
							<td><?php echo($cuotaInicial);?> </td>
							<td><?php echo($saldoPrestamo);?></td>
						  </tr>
					   <tbody>
				
								
						<table class="table table-striped" >
							<thead class ="thead-dark">
							<th scope="col" style= "background-color:#1465bb;color:white">No Cuotas </th>
							<th scope="col"style="background-color:#1465bb;color:white">Valor Cuota</th>
							<th scope="col"style="background-color:#1465bb;color:white">Sub total pagado</th>
								
							</thead>
							
								<?php
									$x = 0;
									
									while($cuota > $x){
									   
										$SubTotal = $SubTotal + $valorCuota;
									   
									
										?>
										<tr>
											<td><?php echo($x+1); ?></td>
											<td><?php echo($valorCuota); ?></td>
											<td><?php echo($SubTotal); ?></td>
											
										</tr>
										<?php
										$x++;
				
									}
				
								 ?>
				
							</tbody>
						</table>
				
				
						<?php
					}
					?>
							
									
					</div>
				</section>
				</div>
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
						<li><a>Jhon Ospino.&copy; Todos los Derechos Reservados.</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>