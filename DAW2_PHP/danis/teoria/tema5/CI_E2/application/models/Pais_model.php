<?php
class Pais_model extends CI_Model{
    public function crearPais($nombre){
        
        $pais = R::findOne('pais', 'nombre=?', [$nombre]);
        $noExiste = ($pais == null);
        
        if($noExiste && $nombre != null ){
            $pais = R::dispense('pais');
            $pais->nombre=$nombre;
            R::store($pais);
        }
        
        if(!$noExiste){
           throw new Exception('Campo duplicado'); 
        } else if($nombre == null){
            throw new Exception('Campo vacío');
        }
        
    }
    
    public function crearPaisExamen($nombre){
        
        $pais = R::findOne('pais', 'nombre=?', [$nombre]);
        
        if($pais == null){
            $pais = R::dispense('pais');
            $pais->nombre=$nombre;
            R::store($pais);
        }
       
    }
    
    public function getPaises(){
        return R::findAll('pais');
    }
}
?>