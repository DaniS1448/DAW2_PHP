<?php 

class City_model extends CI_Model{
    
    public function create($name, $country){
        $ok = true;
            
        if ($ok) {
            $city = R::dispense('city');
            $city->name = $name;
            $city->country = R::load('country', $country);
            R::store($city);
        }
        return $ok;
    }

//=====================================================================================
    
    public function read() {
        return R::findAll('city');
    }
    
    public function getCityById($id){
        return R::findOne('city', 'id=?', [$id]);
    }
    
}
?>