<?php
class Persona_model extends CI_Model{
    
    public function getPersonas(){
        return R::findAll('persona');
    }
    
    public function addPersona($nombre,$dni,$pais){
        
       $ok=true;
       
       if(R::findOne('persona' , 'dni = ?' , [$dni])){
           //el dni ya esta en la base de datos
           $ok=false;
       }else{
           //el dni no esta en la base de datos y vamos a añadirlo junto a la persona
           
           $paisRelacion=R::load('pais',$pais); // hacemos la relacion con la tabla pais  ,, * $pais contiene el id del pais *
           
           $persona=R::dispense('persona');
           $persona->nombre=$nombre;
           $persona->dni=$dni;
           $persona->pais_nacimiento=$paisRelacion;
           
           R::store($persona);
       }
       
       return $ok;
       
    }
    
    public function registrarVuelo($persona,$arrayCiudades){
        
        //persona tiene el id y el array tambien contiene ids
        
        $personaRelacion=R::load('persona',$persona);
        
        foreach($arrayCiudades as $ciudad){
            
            $ciudadRelacion=R::load('ciudad',$ciudad);
            
            $vuelo=R::dispense('vuelo');
            $vuelo->persona=$personaRelacion;
            $vuelo->ciudad=$ciudadRelacion;
            
            R::store($vuelo);
        }
        
        
        
    }
    
}