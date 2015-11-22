<?php

class Conexion
{
    private $config= array(
        "Server"=>"", 
        "User"=>"",
        "Password"=>""
        );
    public function conectar()
    {
       return mysqli_connect($this->config['Server'], $this->config['User'], $this->config['Password']);
    }
}