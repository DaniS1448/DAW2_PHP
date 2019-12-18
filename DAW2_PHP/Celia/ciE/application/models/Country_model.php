<?php 

class Country_model extends CI_Model{
    
    public function create($name){
        $ok = false;
        
        $bean = R::findOne('country','name=?',[$name]);
        $ok = ($bean == null);
        
        if ($ok) {
            $country = R::dispense('country');
            $country->name = $name;
            R::store($country);
        }
        return $ok;
    }
    
//=====================================================================================
    
    public function read() {
        return R::findAll('country');
    }
    
    public function getCountryById($id) {
        return R::findOne('country', 'id=?', [$id]);
    }
    
}
?>