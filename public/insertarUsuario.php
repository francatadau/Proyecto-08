<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\Usuarios;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Insertando Usuarios</title>
  </head>
  <body>
    <?php
    //Ejemplo de uso de modelos
    $t=new Usuarios();

    $nombre=$_POST["nombre"];
    $apellidos=$_POST["apellidos"];
    $edad=$_POST["edad"];
    $curso=$_POST["curso"];
    $puntuacion=$_POST["puntuacion"];
    $correo=$_POST["correo"];

    $resultado=$t->insertarUsuario($nombre,$apellidos,$edad,$curso,$puntuacion,$correo);
    $listar=$t->mostrarUsuarios();
    ?>
    <h1>Lista de Usuarios</h1>
    <?php

    // $consulta=$conector->query("INSERT INTO usuarios (nombre,apellidos,edad,curso,puntuacion,correo) VALUES ('$nombre','$apellidos',$edad,$curso,$puntuacion,'$correo')");
    // $consulta2=$conector->query("SELECT * FROM usuarios");

    foreach ($listar as $fila) {
      echo "<b>Nombre:</b> ".$fila['nombre']."<br>";
      echo "<b>Apellidos:</b> ".$fila['apellidos']."<br>";
      echo "<b>Edad:</b> ".$fila['edad']."<br>";
      echo "<b>Curso:</b> ".$fila['curso']."<br>";
      echo "<b>Puntuación:</b> ".$fila['puntuacion']."<br>";
      echo "<b>Correo:</b> ".$fila['correo']."<br>";
      echo "<br>";
    }

    ?>

    <form action="insertarUsuarioForm.php">
      <input type="submit" value="Crear Usuarios">
    </form><br>

    <form action="borrarUsuarioForm.php">
      <input type="submit" value="Borrar Usuarios">
    </form><br>

    <form action="actualizarUsuarioForm.php">
      <input type="submit" value="Actualizar Usuarios">
    </form>
  </body>
</html>
