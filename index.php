<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Empleados PHP</title>
    <link rel="stylesheet" href="empleados.css">
  </head>
  <body>
    <header>
			<a href="index.html"><img src="images/logo.png"></a><nav>
				<ul>
					<li><a href="index.html">INICIO</a></li>
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
            <li><a href="index.html">INICIO</a></li>
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
        <h1>Lista de Empleados</h1>
        <table>
      <tr>
        <th>ID</th>
        <th>DNI</th>
        <th>NOMBRE</th>
        <th>E-MAIL</th>
        <th>TELÉFONO</th>
      </tr><tr>
          <td>1</td>
          <td>00000000C</td>
          <td>Alex Preciado</td>
          <td>alexpreciado94@hotmailcom</td>
          <td>622342373</td>
          <td><a href="modificar.html?filaModificar=1">Modificar</a></td>
          <td><a href="borrar.php?filaBorrar=1">Borrar</a></td>
        </tr><tr>
          <td>2</td>
          <td>00000001D</td>
          <td>Alejandro Moreno</td>
          <td>alejandro@gmail.com</td>
          <td>666111222</td>
          <td><a href="modificar.html?filaModificar=2">Modificar</a></td>
          <td><a href="borrar.php?filaBorrar=2">Borrar</a></td>
        </tr><tr>
          <td>3</td>
          <td>00000010K</td>
          <td>Manuel Solis</td>
          <td></td>
          <td>616444555</td>
          <td><a href="modificar.php?filaModificar=3">Modificar</a></td>
          <td><a href="borrar.php?filaBorrar=3">Borrar</a></td>
        </tr><tr>
          <td>4</td>
          <td>00000100L</td>
          <td>Diego Carrion</td>
          <td>diego@msn.es</td>
          <td>696333777</td>
          <td><a href="modificar.html?filaModificar=4">Modificar</a></td>
          <td><a href="borrar.php?filaBorrar=4">Borrar</a></td>
        </tr></table>
        <?php
          include_once 'procesos.php';
          $procesos = new Procesos();
          $procesos->listar();
        ?>
        <a class="anadir" href="anadir.php">Añadir Nuevo Empleado</a>
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
