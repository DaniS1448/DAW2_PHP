<?php
class User extends CI_Controller{
    
    public function c(){
        $this->load->model('city_model');
        $datos['cities']=$this->city_model->r();
        frame($this, 'user/c', $datos);
    }
    
    public function cPost(){
        $nombre=isset($_POST['nombre'])?$_POST['nombre']:null;
        $dni=isset($_POST['dni'])?$_POST['dni']:null;
        $idCityBorn=isset($_POST['idCity'])?$_POST['idCity']:null;
        
        $this->load->model('user_model');
        $this->user_model->c($nombre, $dni, $idCityBorn);
        
        redirect(base_url().'user/r');
    }
    
    public function r(){
        $this->load->model('user_model');
        $datos['users']=$this->user_model->r();
        frame($this, 'user/r', $datos);
        
    }
    
    public function registrarViaje(){
        $this->load->model('user_model');
        $datos['users']=$this->user_model->r();
        $this->load->model('city_model');
        $datos['cities']=$this->city_model->r();
        frame($this, 'user/registrarViaje', $datos);
    }
    
    public function registrarViajePost(){
        $idUser=isset($_POST['idUser'])?$_POST['idUser']:null;
        $idCities=isset($_POST['idCities'])?$_POST['idCities']:[];
        
        $this->load->model('user_model');
        $this->user_model->viajar($idUser, $idCities);
        
        redirect(base_url().'user/r');
    }
    
    
}
?>