<?php
class Country_model extends CI_Model{
    public function createCountry($nombre){
        $country = R::findOne('country', 'nombre=?', [$nombre]);
        
        $noExisteCountry = ($country == null);
        
        if ($noExisteCountry && $nombre != null) {
            $country = R::dispense('country');
            $country -> nombre = $nombre;
            R::store($country);
        }
        
    }
}
?>