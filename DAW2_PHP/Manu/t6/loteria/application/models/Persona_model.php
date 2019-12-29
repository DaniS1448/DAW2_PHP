<?php

class Persona_model extends CI_Model{
    
    public function addPersona($nombre,$pwd){
        
        $ok=true;
        
        if(R::findOne('persona', "nombre = ?",[$nombre])!=null){
            $ok=false;
        }        
        
        if($ok){        
            $persona=R::dispense('persona');
            $persona->nombre=$nombre;
            $persona->pwd=$pwd;
            R::store($persona);
        }
        
        return $ok;
    }
    
    public function comprobarUsuario($nombre,$pwd){
        
       $ok=false;
        
       $usuario=R::findOne('persona', "nombre = ?",[$nombre]);
       
       if($usuario != null && $usuario->pwd == $pwd){
           $ok=true;
       }
       
       return $ok;
    }
    
    public function getPersonaId($nombre){
        return R::findOne( 'persona', "nombre = ?",[$nombre]);
        
    }
    
    public function getPersonas(){
        return R::findAll('persona');
    }
    
    public function getBoletoPersona($nombre){
       return R::findOne('personaboletos',"id_persona = ?",[$nombre]);
    }
   
    
}

