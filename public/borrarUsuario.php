<?php
require_once __DIR__.'/../vendor/autoload.php';
use Daw\models\Usuarios;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actualización de usuarios</title>
  </head>
  <body>
    <?php
    //Ejemplo de uso de modelos
    $t=new Usuarios();

    $id=$_POST['id'];
    $nombre=$_POST["nombre"];

    $resultado=$t->borrarUsuario($id,$nombre);
    $listar=$t->mostrarUsuarios();

    echo "El usuario que has borrado es: <b>".$nombre."</b>";
    ?>

    <form action="mostrarUsuario.php">
      <input type="submit" value="Volver">
    </form>
  </body>
</html>
