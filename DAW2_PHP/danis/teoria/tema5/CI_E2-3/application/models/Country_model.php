<?php
class Country_model extends CI_Model{
    public function c($name){
        $country = R::findOne('country', 'name=?', [$name]);
        $existName = $name != null;
        $existCountry = $country != null;
        
        if (!$existCountry && $existName != null) {
            $country = R::dispense('country');
            $country->name = $name;
            R::store($country);
        } else if ($existCountry){
            throw new Exception('Country duplicate');
        } else if (!$existName){
            throw new Exception('Name empty');
        }  
    }
    
    public function getCountries(){
        return R::findAll('country');
    }
    
    public function getCountryById($idCountry){
        return R::load('country', $idCountry);
    }
}
?>