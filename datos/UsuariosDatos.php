<?php
include "../entidades/usuarios.php";
include "conexion.php";

class UsuariosDatos
{
    function insertar_usuarios($usuario, $pass)
    {
        $dbname = "formLogin";
        $cnn = new Conexion();
        $con = $cnn->conectar();
     
        $usuarios = new Usuarios();
        
        $usuarios->usuario = $usuario;
        $usuarios->contrasena = $pass;
        
        mysqli_select_db($con, $dbname);
        
        $sql = "INSERT INTO usuarios(usuario, contrasena) VALUES('".$usuarios->usuario."', '".$usuarios->contrasena."')";
        if(mysqli_query($con, $sql))
        {
            return true;
        }
        else
        {
            return false;
        }
        mysqli_close($con);
    }
    
    function validar($usuario, $pass)
    {
        
        //Obtener la conexion
        $cnn = new Conexion();
        $con = $cnn->conectar();
        
        //Crear un objeto de Usuario y asignar valores pasados en los parametros 
        $usuarios = new Usuarios();
        $usuarios->usuario = $usuario;
        $usuarios->contrasena = $pass;
        
        //Seleccionar la base de datos
        
        mysqli_select_db($con, 'formLogin');
        
        //Obtener informacion de la base de datos;
        
       $sql = "SELECT * FROM usuarios WHERE usuario='". $usuarios->usuario."'and contrasena='". $usuarios->contrasena."'";
      
       #hacemos la consulta
       $consulta = mysqli_query($con, $sql);
       
       #la almacenamos en un arreglo
       $fila = mysqli_fetch_array($consulta);
       
       if($fila>0)
       {
           if($fila["usuario"] == $usuarios->usuario && $fila['contrasena']==$usuarios->contrasena)
           {
               return true;
           }
       }
       else
       {
           return false;
       }
    }
} 
/*$obj = new UsuariosDatos();
if($obj->insertar_usuarios("uno", "miContrasena"))
{
    echo "todo va bien";
}
else 
{
    echo "hay algun problema";
}*/