<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Empleados PHP</title>
    <link rel="stylesheet" href="../empleados.css">
  </head>
  <body>
    <header>
			<a href="index.php"><img src="images/logo.png"></a><nav>
				<ul>
					<li><a href="index.php">INICIO</a></li>
					<li><a href="https://www.php.net/manual/es/intro-whatis.php">PHP</a></li>
					<li><a href="recibido.php">RESPUESTAS</a></li>
					<li><a href="about.html">NOSOTROS</a></li>
				</ul>
			</nav>
		</header>
    <main>
      <aside>
        <nav>
          <ul>
            <li><a href="index.php">INICIO</a></li>
  					<li><a href="https://www.php.net/manual/es/intro-whatis.php">PHP</a></li>
  					<li><a href="recibido.php">RESPUESTAS</a></li>
  					<li><a href="about.html">NOSOTROS</a></li>
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
        <h1>Modificar Datos del Empleado</h1>
        <?php
          echo '<form method="POST">
            <input type="text" name="newId" value="'.$_GET['idModificar'].'" placeholder="id" disabled />
            <input type="text" name="newDNI" value="'.$_GET['dniModificar'].'" placeholder="DNI" pattern="[0-9]{8}[A-Z]" />
            <input type="text" name="newNombre" value="'.$_GET['nombreModificar'].'" placeholder="Nombre Apellidos" />
            <input type="text" name="newEmail" value="'.$_GET['emailModificar'].'" placeholder="E-Mail" />
            <input type="text" name="newTelefono" value="'.$_GET['telefonoModificar'].'" placeholder="Teléfono" pattern="[0-9]{9}" />
            <input type="submit" name="enviar" value="MODIFICAR" />
          </form>';
        ?>
      </section>
    </main>
    <footer>
      <div class="footerWrapper">
        <div class="footerMenu">
          <h3>Menú</h3>
          <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="https://www.php.net/manual/es/intro-whatis.php">PHP</a></li>
            <li><a href="about.html">Nosotros</a></li>
          </ul>
        </div>
        <div id="social">
          <img src="images/social1.png">
          <img src="images/social2.png">
          <img src="images/social3.png">
        </div>
      </div>
      <div id="footerdown">
        <a id="privacidad" href="privacidad.txt">Politica de Privacidad</a>
        <p>© 2021 Todos los Derechos Reservados | <a id="alex" href="https://www.instagram.com/alexpreciado94/">Alex Preciado</a></p>
      </div>
    </footer>
  </body>
</html>
