<?php
class Usuario_model extends CI_Model{
    
    public function crearUsuario($nombre, $dni){
        
        $persona=R::dispense('usuario');
        $persona->nombre=$nombre;
        $persona->dni=$dni;
        R::store($persona);
    }
}
?>