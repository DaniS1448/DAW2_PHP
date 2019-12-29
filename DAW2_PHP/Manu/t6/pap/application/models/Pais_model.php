<?php
class Pais_model extends CI_Model {
    public function getPaises() {
        return R::findAll('pais');
    }
    
    public function getPaisId($id){
        return R::load('pais',$id);
    }
    
    public function createPais($nombrePais){
        $ok=true;
        if(R::findOne( 'pais', "nombre = ?",[$nombrePais])!=null){
            $ok=false;
        }
        
        if($ok){
            $pais=R::dispense('pais');
            $pais ->nombre=$nombrePais;
            
            R::store($pais);
      
        }
        return $ok;
    }
    
    public function deletePaisId($id){
        $pais=R::load('pais',$id);
        return R::trash($pais);  
    }
    
    public function updatePais($id,$nombrePais){
        $pais=R::load('pais',$id);
        $pais->nombre=$nombrePais;
        return R::store($pais);
    }
}
?>
