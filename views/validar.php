<?php
include "../controlador/UsuariosController.php";
#validamos si las variables existen
if(isset($_POST['usuario']) || isset($_POST['pass'])){
    #Validamos si los campos estan vacios
    if(trim($_POST['usuario']) == "" || trim($_POST['pass']) == "")
    {
        echo "false";
    }
    else
    {
        $usuariosCon = new UsuariosController();
        if($usuariosCon->validar($_POST['usuario'], $_POST['pass']))
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