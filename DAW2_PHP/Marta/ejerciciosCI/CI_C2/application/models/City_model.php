<?php
class City_model extends CI_Model{
    
    public function c($nombre, $idPais){
        $city=R::dispense('city');
        $city->name=$nombre;
        $country=R::load('country', $idPais);
        $city->country=$country;
        
        R::store($city);
        
        session_start_seguro();
        $_SESSION['_msg']['texto']='City  create ok';
        redirect(base_url().'mensajes');
    }
    
    public function r(){
        return R::findAll('city');
    }
}
?>