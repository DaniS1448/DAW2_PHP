<?php
class Country extends CI_Controller{
    
    public function c(){
        frame($this, 'country/c');
    }
    
    public function cPost(){
        $nombre=isset($_POST['nombre'])?$_POST['nombre']:null;
        $this->load->model('country_model');
        $this->country_model->c($nombre);
        
        redirect(base_url().'country/r');
    }
    
    public function r(){
        $this->load->model('country_model');
        $datos['paises']=$this->country_model->r();
        
        frame($this, 'country/r', $datos);
        
    }
}
?>