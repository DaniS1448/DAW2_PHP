<?php
class Aficion_model extends CI_Model {
    public function getAficiones() {
        return R::findAll('aficion');
    }
    
    public function getAficionId($id){
        return R::load('aficion',$id);
    }
    
    public function deleteAficionId($id){
        $aficion=R::load('aficion',$id);
        return R::trash($aficion);  
    }
    
    public function createAficion($nombreAficion){
        $ok=true;
        if(R::findOne( 'aficion', "nombre = ?",[$nombreAficion])!=null){
            $ok=false;
        }
        
        if($ok){
            $pais=R::dispense('aficion');
            $pais ->nombre=$nombreAficion;
            
            R::store($pais);
            
        }
        return $ok;
    }
    
    public function updateAficion($id,$nombreAficion){
        $aficion=R::load('aficion',$id);
        $aficion->nombre=$nombreAficion;
       return R::store($aficion);
    }
}
?>
