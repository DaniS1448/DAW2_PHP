<?php
class City_model extends CI_Model{
    public function crearCityMejorado($nombre, $idPais){
        
        $pais = R::findOne('city', 'nombre=?', [$nombre]);
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
    
    public function crearCity($nombre, $idPais){
        
        $pais = R::load('pais', $idPais);
        
        if($nombre != null ){
            $city = R::dispense('city');
            $city->nombre=$nombre;
            $city->pais=$pais;
            R::store($city);
        } else {
            throw new Exception('Campo vacío');
        }
        
    }
    
    public function getCities(){
        return R::findAll('city');
    }
}
?>