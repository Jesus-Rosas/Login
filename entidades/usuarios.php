<?php

class Usuarios
{
    public $id;
    public $usuario;
    public $contrasena;
    
    public function get_id()
    {
        return $this->id;
    }
    public function set_id($id)
    {
        return $this->id = $id;
    }
    
    public function get_usuario()
    {
        return $this->usuario;
    }
    public function set_usuario($usuario)
    {
        return $this->usuario = $usuario;
    }
    public function get_contrasena()
    {
        return $this->contrasena;
    }
    public function set_contrasena($pass)
    {
        return $this->contrasena = $pass;
    }
}
