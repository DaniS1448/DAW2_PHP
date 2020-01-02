<?php
class Usuario extends CI_Controller{
    
    public function index(){
        $this->load->view('usuario/index');
    }
    
    public function c(){
        
        $this->load->model('usuario_model');
        $datos['datosUsuario']=$this->usuario_model->crearUsuario();
        $this->load->view('usuario/c', $datos);
    }
    
    public function cpost(){ 
        $nombre=isset($_POST['nombre'])?$_POST['nombre']:null;
        $dni=isset($_POST['dni'])?$_POST['dni']:null;
        
        $this->load->model('usuario_model');
        $this->usuario_model->crearUsuario($nombre, $dni);
        
    }
}
?>