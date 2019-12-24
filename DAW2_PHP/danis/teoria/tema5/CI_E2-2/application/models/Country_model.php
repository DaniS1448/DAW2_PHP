<?php
class Country_model extends CI_Model{
    public function createCountry($name){
        $country = R::findOne('country', 'name=?', [$name]);
        
        $existeCountry = ($country != null);
        $existeName = $name != null;
        
        if (!$existeCountry && $existeName) {
            $country = R::dispense('country');
            $country -> name = $name;
            R::store($country);
        } else if ($existeCountry){
            throw new Exception('Error, country already exist');
        } else if (!$existeName){
            throw new Exception('Error, name cannot be empty');
        }
        
    }
    
    public function getCountries(){
        return R::findAll('country');
    }
    
    public function getCountryById($id){
        return R::load('country', $id);
    }
}
?>