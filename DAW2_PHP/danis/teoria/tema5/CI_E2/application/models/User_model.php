<?php
class User_model extends CI_Model{
    
    public function crearUser($dni, $nombre, $idCiudad){
        
        $elDni = R::findOne('user','dni=?',[$dni]);
        $noNulo = ($nombre != null );
        $dniNoDuplicado = ($elDni == null);
        
        if($noNulo && $dniNoDuplicado){
            $city = R::load('city', $idCiudad);
            $user = R::dispense('user');
            $user->dni=$dni;
            $user->nombre=$nombre;
            $user->born=$city;
            R::store($user);
            /*
            $born = R::dispense('born');
            $born -> user = $user;
            $born -> city = $city;
            
            R::store($born);
            */
        }
        if(!$noNulo){
            throw new Exception('Campo vacío');
        } else if (!$dniNoDuplicado){
            throw new Exception('DNI Duplicado');
        }
        
    }
    
    public function getUsers(){
        return R::findAll('user');
    }
}
?>