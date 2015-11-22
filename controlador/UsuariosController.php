<?php

include "../datos/UsuariosDatos.php";
class UsuariosController
{
    function insertar_usuarios($usuario, $pass)
    {
        $obj = new UsuariosDatos();
        return $obj->insertar_usuarios($usuario, $pass);
    }
    function validar($usuario, $pass)
    {
        $obj = new UsuariosDatos();
        return $obj->validar($usuario, $pass);
    }
}