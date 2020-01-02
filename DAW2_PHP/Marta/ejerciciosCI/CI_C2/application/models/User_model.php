<?php
class User_model extends CI_Model{
    
    public function c($nombre, $dni, $idCityBorn){
        
        $dniDuplicado=R::findOne('user', 'dni=?', [$dni]);
        
        if($nombre!=null && $dni!=null && $dniDuplicado==null){
            $user=R::dispense('user');
            $user->name=$nombre;
            $user->dni=$dni;
            $city=R::load('city', $idCityBorn);
            $user->born=$city;
            R::store($user);
        }
    }
    
    public function r(){
        return R::findAll('user');
    }
    
    public function viajar($idUser, $idCities){
        $user=R::load('user', $idUser);
        
        
        foreach($idCities as $idCity){
            $city=R::load('city', $idCity);
            
            $viaje= R::dispense('travels');
            $viaje->user=$user;
            $viaje->city=$city;
            R::store($viaje);
        }
        
        
    }
}
?>