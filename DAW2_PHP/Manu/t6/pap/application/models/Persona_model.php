<?php
class Persona_model extends CI_Model {
    public function getPersonas() {
        return R::findAll('persona');
    }
    
    public function getPersonaId($id){
       return R::load('persona',$id);
    }
    
    public function createPersona($nombrePersona,$paisNacimiento,$paisReside,$arrayAficionesGusta,$arrayAficionesOdia,$imagen){
        
        $nombrePaisNacimiento=R::load( 'pais',$paisNacimiento);
        $nombrePaisReside=R::load( 'pais',$paisReside);        
       
        $persona=R::dispense('persona');
        $persona ->nombre=$nombrePersona;
        $persona ->paisNacimiento=$nombrePaisNacimiento;
        $persona ->paisReside=$nombrePaisReside;
        $persona ->imagen=$imagen;

        
        //CREA TABLAS DE AFICIONES QUE GUSTA Y ODIA LA PERSONA        
        foreach($arrayAficionesGusta as $aGusta){
            $aficionNombre=R::load('aficion',$aGusta);
            $a= R::dispense('aficiongusta');
            $a->persona=$persona;
            $a->aficion=$aficionNombre;
            R::store($a);
        }
        
        foreach($arrayAficionesOdia as $aOdia){
            $aficionNombre=R::load('aficion',$aOdia);
            $a= R::dispense('aficionodia');
            $a->persona=$persona;
            $a->aficion=$aficionNombre;
            R::store($a);
        } 
            
        return  R::store($persona);
        
    }
    
    public function updatePersona($id,$nombrePersona,$paisNacimiento,$paisReside,$arrayAficionesGusta,$arrayAficionesOdia,$imagen=null){
        $persona=R::load('persona',$id);
        $persona->nombre=$nombrePersona;
        
        $nombrePaisNacimiento=R::load( 'pais',$paisNacimiento);
        $nombrePaisReside=R::load( 'pais',$paisReside);        
        
        $persona ->paisNacimiento=$nombrePaisNacimiento;
        $persona ->paisReside=$nombrePaisReside;
        
        $imagen!=null? $persona ->imagen=$imagen:null;
        
        $filasGusta=R::findAll('aficiongusta');
        foreach($filasGusta as $f){
            if($f->persona_id == $id){
                R::trash($f);
            }
        }
      
        $filasOdia=R::findAll('aficionodia');
        foreach($filasOdia as $f){
            if($f->persona_id == $id){
                R::trash($f);
            }
        }
        
     //CREA TABLAS DE AFICIONES QUE GUSTA Y ODIA LA PERSONA
        foreach($arrayAficionesGusta as $aGusta){
            $aficionNombre=R::load('aficion',$aGusta);
            $a= R::dispense('aficiongusta');
            $a->persona=$persona;
            $a->aficion=$aficionNombre;
            R::store($a);
        }
        
        foreach($arrayAficionesOdia as $aOdia){
            $aficionNombre=R::load('aficion',$aOdia);
            $a= R::dispense('aficionodia');
            $a->persona=$persona;
            $a->aficion=$aficionNombre;
            R::store($a);
        }
        
        return  R::store($persona);
    }
    
    public function deletePersonaId($id){
        $persona=R::load('persona',$id);
        return R::trash($persona);        
    }
}
?>
