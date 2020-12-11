<?php
class User_model extends CI_Model{
    public function c($dniUser, $nameUser, $countryBorn){
        
        
        
        $userTemp = R::findOne('user', 'dni=?', [$dniUser]);
        $existDNI = $dniUser != null;
        $existName = $nameUser != null;
        $existeUser = $userTemp != null;
        
        if (!$existeUser && $existName && $existDNI) {
            $city = R::dispense('user');
            $city->dni = $dniUser;
            $city->name = $nameUser;
            $city->born=$countryBorn;
            R::store($city);
        } else if ($existeUser){
            throw new Exception('User duplicate');
        } else if (!$existDNI){
            throw new Exception('DNI empty');
        } else if (!$existName){
            throw new Exception('Name empty');
        }
    }
    
    public function getUsers(){
        return R::findAll('user');
    }
    
    public function getUserById($id){
        return R::load('user', $id);
    }
    
    public function cTravelled($user, $idsCititesTravelled){
        
        foreach($user-> ownTravelledList as $travel){
            R::store($user);
            R::trash($travel);
        }
        
        foreach($idsCititesTravelled as $idTravelled){
            $city = R::load('city', $idTravelled);
            
            $travel = R::dispense('travelled');
            $travel->user = $user;
            $travel->city = $city;
            
            R::store($travel);
        }

    }
    
}
?>