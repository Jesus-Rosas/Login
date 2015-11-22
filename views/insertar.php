<?php
include "../controlador/UsuariosController.php";
#validamos si las variables existen
if(isset($_GET['usuario']) || isset($_GET['pass'])){
    #Validamos si los campos estan vacios
    if(trim($_GET['usuario']) == "" || trim($_GET['pass']) == "")
    {
        echo "false";
    }
    else
    {
        $usuariosCon = new UsuariosController();
        if($usuariosCon->insertar_usuarios($_GET['usuario'], $_GET['pass']))
        {
            echo "True";
        }
        else{
             echo "False";  
        }
    }
}
else 
{
    echo "false";
}