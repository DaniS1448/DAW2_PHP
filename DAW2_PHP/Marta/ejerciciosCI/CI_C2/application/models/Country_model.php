<?php
class Country_model extends CI_Model{
    
    public function c($nombre){
        
        $nombreDuplicado=R::findOne('country', 'name=?', [$nombre]);
        
        if($nombre!=null && $nombreDuplicado==null){
            $country=R::dispense('country');
            $country->name=$nombre;
            R::store($country);
        }
        else if($nombreDuplicado){
            throw new Exception('Mistake, the country exists');
        }
        else if($nombre==null){
            throw new Exception('Mistake, the field can´t be empty');
        }
    }
    
    public function r(){
        return R::findAll('country');
    }
}

?>
