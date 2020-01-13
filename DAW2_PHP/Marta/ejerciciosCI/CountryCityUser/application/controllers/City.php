<?php
class City extends CI_Controller{
    
    public function c(){
        $this->load->model('country_model');
        $datos['paises']=$this->country_model->r();
        frame($this, 'city/c', $datos);
    }
    
    public function cPost(){
        $nombre=isset($_POST['nombre'])?$_POST['nombre']:null;
        $idPais=isset($_POST['idPais'])?$_POST['idPais']:null;
        
        $this->load->model('city_model');
        $this->city_model->c($nombre, $idPais);
        
        redirect(base_url().'city/r');
    }
    
    public function r(){
        $this->load->model('city_model');
        $datos['cities']=$this->city_model->r();
        
        frame($this, 'city/r', $datos);
        
    }
    
}
?>