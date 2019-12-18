<?php

class User_model extends CI_Model {
    
    public function travelled($dni, $cities_id) {
        $ok = false;

        $bean = R::findOne('user', 'dni=?', [$dni]);
        $ok = ($bean != null);

        if ($ok) {
            $user = R::load('user', $dni);
            foreach($cities_id as $city_id){
                $city = R::load('city', $city_id);
                $travel = R::dispense('travel');
                $travel->user = $user->id;
                $travel->travel = $city->id;
                R::store($travel);
            }
            return $ok;
        }
        
    }
    
//======================================================================================

    public function create($dni, $name, $city) {
        $ok = false;
        
        $bean = R::findOne('user', 'dni=?', [$dni]);
        $ok = ($bean == null);
        
        if($ok) {
            $user = R::dispense('user');
            $user->dni = $dni;
            $user->name = $name;
            $user->cityBorn = $city;
            
            R::store($user);
        }
        return $ok;
    }
    
//======================================================================================

    public function read(){
        return R::findAll('user');
    }
    
    public function getUserById($id){
        return R::findOne('user', 'id=?', [$id]);
    }

}