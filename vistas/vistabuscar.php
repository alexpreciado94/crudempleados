<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Empleados PHP</title>
    <link rel="stylesheet" href="/crudempleados/empleados.css">
  </head>
  <body>
    <header>
			<a href="/crudempleados/index.php"><img src="/crudempleados/images/logo.png"></a><nav>
				<ul>
					<li><a href="/crudempleados/index.php">INICIO</a></li>
					<li><a href="https://www.php.net/manual/es/intro-whatis.php">PHP</a></li>
					<li><a href="/crudempleados/recibido.php">RESPUESTAS</a></li>
					<li><a href="/crudempleados/about.html">NOSOTROS</a></li>
				</ul>
			</nav>
		</header>
    <main>
      <aside>
        <nav>
          <ul>
            <li><a href="/crudempleados/index.php">INICIO</a></li>
  					<li><a href="https://www.php.net/manual/es/intro-whatis.php">PHP</a></li>
  					<li><a href="/crudempleados/recibido.php">RESPUESTAS</a></li>
  					<li><a href="/crudempleados/about.html">NOSOTROS</a></li>
            <li><a href="">BOTON</a></li>
            <li><a href="">BOTON</a></li>
            <li><a href="">BOTON</a></li>
            <li><a href="">BOTON</a></li>
            <li><a href="">BOTON</a></li>
            <li><a href="">BOTON</a></li>
            <li><a href="">BOTON</a></li>
            <li><a href="">BOTON</a></li>
            <li><a href="">BOTON</a></li>
            <li><a href="">BOTON</a></li>
            <li><a href="">BOTON</a></li>
          </ul>
        </nav>
      </aside>
      <section>
        <h1>Buscar Empleado</h1>
        <form method="POST">
          <div>
            <input type="text" name="dniBuscar" placeholder="DNI" pattern="[0-9]{8}[A-Z]" />
            <input type="text" name="nombreBuscar" placeholder="Nombre Apellidos" />
          </div>
          <div>
            <input type="submit" name="enviar" value="BUSCAR" />
          </div>
        </form>
        <?php
          include_once '../php/procesos.php';
          $procesoBuscar = new Procesos();
          if(isset($_POST['enviar'])){
            $procesoBuscar->buscar($_POST["dniBuscar"], $_POST["nombreBuscar"]);
          }
        ?>
      </section>
    </main>
    <footer>
      <div class="footerWrapper">
        <div class="footerMenu">
          <h3>Men??</h3>
          <ul>
            <li><a href="/crudempleados/index.php">Inicio</a></li>
            <li><a href="https://www.php.net/manual/es/intro-whatis.php">PHP</a></li>
            <li><a href="/crudempleados/about.html">Nosotros</a></li>
          </ul>
        </div>
        <div id="social">
          <img src="/crudempleados/images/social1.png">
          <img src="/crudempleados/images/social2.png">
          <img src="/crudempleados/images/social3.png">
        </div>
      </div>
      <div id="footerdown">
        <a id="privacidad" href="privacidad.txt">Politica de Privacidad</a>
        <p>?? 2021 Todos los Derechos Reservados | <a id="alex" href="https://www.instagram.com/alexpreciado94/">Alex Preciado</a></p>
      </div>
    </footer>
  </body>
</html>
