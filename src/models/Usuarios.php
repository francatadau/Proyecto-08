<?php
namespace Daw\models;
/**
 * Plantilla vacia de Db
 */
class Usuarios extends Db
{

  public function insertarUsuario($nombre, $apellidos, $edad, $curso, $puntuacion, $correo){

     if (parent::hayError()==false) {
     $insertar="INSERT INTO usuarios(nombre, apellidos, edad, curso, puntuacion, correo) VALUES ('$nombre','$apellidos',$edad,$curso,$puntuacion,'$correo')";
     $resultado=parent::getConexion()->query($insertar);

     if (!$resultado) {
       echo "Falló la creacion de la tabla: (" . parent::getConexion()->errno .")" . parent::getConexion()->error;
       return false;
     }else {
       return $resultado;
     }
   }
 }

  public function actualizarUsuario($id,$nombre, $apellidos, $edad, $curso, $puntuacion, $correo)
   {
     if (parent::hayError()==false) {
       $actualizar="UPDATE usuarios SET nombre='" .$nombre ."', apellidos='" .$apellidos ."', edad='" .$edad ."', curso='" .$curso ."' , puntuacion='" .$puntuacion ."', correo='" .$correo ."' WHERE id='" .$id ."'";
       $resultado=parent::getConexion()->query($actualizar);
       if (!$resultado) {
         echo "Falló la actualizacion de la tabla: (" . parent::getConexion()->errno . ") " . parent::getConexion()->error;
         return false;
       }
       return true;
     }else {
       return false;
     }
   }
   //Borramos el equipo
   public function borrarUsuario($id,$nombre)
   {
     if(parent::hayError()==false)
     {
       $borrar="DELETE FROM usuarios WHERE id='".$id ."'";
       $resultado=parent::getConexion()->query($borrar);
       if (!$resultado) {
         echo "Falló el borrado del usuario: (" . parent::getConexion()->errno . ") " . parent::getConexion()->error;
         return false;
       }
       return $resultado;
     }else{
       return false;
     }
   }
   //Devolvemos la lista de equipos.
   public function mostrarUsuarios()
   {
     if (parent::hayError()==false) {
     $mostrar="SELECT * FROM usuarios";
     $resultado = parent::getConexion()->query($mostrar);

     if(!$resultado){
       echo "Falló al mostar el Usuario: (" . parent::getConexion()->errno . ") " . parent::getConexion()->error;
       return false;
     }else {
         return $resultado;
      }
    }else{
       return false;
     }
   }
}




?>
