<?php
class City_model extends CI_Model{
    public function createCity($name, $country){
        $existeName = $name != null;
        
        $cityTemp = R::findOne('city', 'name=?', [$name]);
        $existeCity= ($cityTemp != null);
        $cityDuplicado = ($cityTemp->country->id == $country->id);

        if ($existeName && ( !$existeCity || !$cityDuplicado)) {
            $city = R::dispense('city');
            $city -> name = $name;
            $city -> country = $country;
            R::store($city);
        } else if (!$existeName){
            throw new Exception('Error, name cannot be empty');
        } else if ($cityDuplicado){
            throw new Exception('Error, city already exist in this country');
        }
    }
    
    public function getCities(){
        return R::findAll('city');
    }
    
    public function getCityById($id){
        return R::load('city', $id);
    }
    
    public function getCitiesByIds($idsArray){
        
        $cities=[];
        foreach ($idsArray as $id){
            array_push($cities, R::load('city', $id));
        }
        
        return $cities;
    }
}
?>