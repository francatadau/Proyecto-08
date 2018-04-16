<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\Usuarios;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de usuarios</title>
  </head>
  <body>
    <?php
    //Ejemplo de uso de modelos
    $t=new Usuarios();


    $resultado=$t->mostrarUsuarios();
    ?>
    <h1>Lista de Usuarios</h1>
    <?php
    foreach ($resultado as $fila) {
      echo "<b>Usuario:</b> ".$fila['nombre']."<br>";
      echo "<b>Apellidos:</b> ".$fila['apellidos']."<br>";
      echo "<b>Edad:</b> ".$fila['edad']."<br>";
      echo "<b>Curso:</b> ".$fila['curso']."<br>";
      echo "<b>Puntuación:</b> ".$fila['puntuacion']."<br>";
      echo "<b>Correo:</b> ".$fila['correo']."<br>";
      echo "<br>";
    }
    ?>
    <form action="insertarUsuarioForm.php">
      <input type="submit" value="Insertar Usuarios">
    </form><br>

    <form action="borrarUsuarioForm.php">
      <input type="submit" value="Borrar Usuarios">
    </form><br>

    <form action="actualizarUsuarioForm.php">
      <input type="submit" value="Actualizar Usuarios">
    </form>
  </body>
</html>
