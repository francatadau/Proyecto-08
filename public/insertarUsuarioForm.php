<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario</title>
  </head>
  <body>
<form action="insertarUsuario.php" method="post">

  Nombre:
  <input type="text" name="nombre"><br><br>

  Apellidos:
  <input type="text" name="apellidos"><br><br>

  Edad:
  <input type="text" name="edad"><br><br>

  Curso:
  <input type="text" name="curso"><br><br>

  Puntuacion:
  <input type="text" name="puntuacion"><br><br>

  Correo:
  <input type="text" name="correo"><br><br>

  <input type="submit" value="Crear usuario">

</form>
<form action="mostrarUsuario.php">
    <input type="submit" value="Volver">
</form>
  </body>
</html>
