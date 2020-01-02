<?php
class Country_model extends CI_Model{
    
    public function c($nombre){
        
        $nombreDuplicado=R::findOne('country', 'name=?', [$nombre]);
        
        if($nombre!=null && $nombreDuplicado==null){
            $country=R::dispense('country');
            $country->name=$nombre;
            R::store($country);
        }
    }
    
    public function r(){
        return R::findAll('country');
    }
}

?>
