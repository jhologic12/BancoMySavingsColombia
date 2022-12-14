<!DOCTYPE HTML>

<html>

<head>
    <title>Contacto - MySaving Colombia</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <meta http-equiv="Cache-control" content="no-cache">
	

</head>

<body class="is-preload">
    <div id="page-wrapper">

        <!-- Header -->
        <header id="header">
            <h1><a href="index.html">My Saving Colombia</a><img class="icosaving"
                    style="max-width:60px;max-height:80%;float:left" src="images/ico01.png" alt="" /></h1>
            <nav id="nav">
                <ul>
                    <li><a href="index.html">Inicio</a></li>
                    <li>
                        <a href="#" class="icon solid fa-angle-down">Servicios</a>
                        <ul>
                            <li><a href="persona.html">Personas</a></li>
                            <li><a href="empresa.html">Empresas</a></li>
                            <li><a href="buscarClientes.php">Buscar Clientes</a></li>
                            <li><a href="clientes.php">Clientes</a></li>
                            <li><a href="simulador.php">Simulador de Credito</a></li>
                            <li><a href="contacto.php">Contacto</a></li>
                        </ul>
                    </li>
                    <li><a href="login.php" class="button">Iniciar Sesión</a></li>
                </ul>
            </nav>
        </header>

        <!-- Main -->
        <section id="main" class="container medium">
            <header>
                <h2>>Atencion al Cliente</h2>
                <p>Cuéntanos lo que piensas sobre nuestro servicios.</p>
            </header>
            <div class="box">
                <form   action="contactoEnviar.php" method="post" >
                    <div class="row gtr-50 gtr-uniform">
                        <div class="col-6 col-12-mobilep">
                            <input type="text" name="name" id="name" value="" placeholder="Nombre" />
                        </div>
                        <div class="col-6 col-12-mobilep">
                            <input type="email" name="email" id="email" value="" placeholder="Email" />
                        </div>
                        <div class="col-12">
                            <input type="text" name="asunto" id="asunto" value="" placeholder="Asunto" />
                        </div>
                        <div class="col-12">
                            <textarea name="mensaje" id="mensaje" placeholder="Ingrese su mensaje" rows="6"></textarea>
                        </div>
                        <div class="col-12">
                            <ul class="actions special">
                                <li><input type="submit" name="submit" id="submit" value="Enviar Mensaje" /></li>
                            </ul>
                        </div>
                    </div>
                </form>

                <?php
                  if(isset($_GET["enviado"]) && $_GET["enviado"] == 'true')
                    {
                     echo '<script>', 'alert("Los Datos fueron enviados exitosamente.");', '</script>';

                    }
                ?>
            </div>
        </section>

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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.dropotron.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>