<?php
class Pais_model extends CI_Model{
    
    public function getPaises(){
        return R::findAll('pais');
    }
    
    public function addPais($nombre){
        
        $ok=true;
        
        if(R::findOne('pais' , 'nombre = ?' , [$nombre])){
            //el pais existe en la base de datos
            $ok=false;
        }else{
            //el pais no esta en la bbdd y lo añadimos
            $pais= R::dispense('pais');
            $pais->nombre=$nombre;
            R::store($pais);
        }
        return $ok;
    }
}