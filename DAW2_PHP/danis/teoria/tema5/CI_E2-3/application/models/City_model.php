<?php
class City_model extends CI_Model{
    public function c($name, $country){
        
        $cityTemp = R::findOne('city', 'name=?', [$name]);
        $existName = $name != null;
        $existeCity = $cityTemp != null;
        $cityCuplicado = ($cityTemp->country->id == $country->id);
        
        if (!$existeCity && $existName != null && !$cityCuplicado) {
            $city = R::dispense('city');
            $city->name = $name;
            $city->country=$country;
            R::store($city);
        } else if ($cityCuplicado){
            throw new Exception('City duplicate');
        } else if (!$existName){
            throw new Exception('Name empty');
        }  
    }
    
    public function getCities(){
        return R::findAll('city');
    }
    
}
?>