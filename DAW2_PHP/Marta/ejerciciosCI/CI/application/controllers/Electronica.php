<?php
class Electronica extends CI_Controller{
    public function ordenadores(){
        echo "ordenadores";
    }
    
    public function modelos(){
        require_once 'pruebaOrdenadores.php';
        
            
    }
}
?>