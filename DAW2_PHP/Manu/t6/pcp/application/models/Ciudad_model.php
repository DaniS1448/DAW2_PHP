<?php
class Ciudad_model extends CI_Model{
    
    public function getCiudades(){
        return R::findAll('ciudad');
    }
    
    public function addCiudad($nombre,$pais){
        
        $paisRelacion=R::load('pais',$pais);
        
        $ciudad=R::dispense('ciudad');
        $ciudad->nombre=$nombre;
        $ciudad->pais=$paisRelacion;
        
        return R::store($ciudad);        
    }
    
}