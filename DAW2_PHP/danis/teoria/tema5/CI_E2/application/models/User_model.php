<?php
class User_model extends CI_Model{
    
    public function crearUser($nombre, $idCiudad){
        
        $city = R::load('city', $idCiudad);
        
        if($nombre != null ){
            $user = R::dispense('user');
            $user->nombre=$nombre;
            //$user->city=$city;
            R::store($user);
            
            $born = R::dispense('born');
            $born -> user = $user;
            $born -> city = $city;
            
            R::store($born);
            
        } else {
            throw new Exception('Campo vacío');
        }
        
    }
    
    public function getUsers(){
        return R::findAll('user');
    }
}
?>