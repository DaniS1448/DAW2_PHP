<?php
class Aficiones_model extends CI_Model{
    public function mostrarAficiones(){
       return R::findAll('aficiones'); 
    }
    
    public function crearAficiones($nombre){
        $aficion=R::dispense('aficiones');
        $aficion->nombre=$nombre;
        R::store($aficion);
    }
}