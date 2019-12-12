<?php
class Aficiones extends CI_Controller{
    
    public function index(){
        $this->load->view('aficiones/index');
    }
    
    public function r(){
        $this->load->model('aficiones_model');
        $aficion=$this->aficiones_model->mostrarAficiones();
        $miArrayAficiones= ['misAficiones'=>$aficion];
        $this->load->view('aficiones/r', $miArrayAficiones);
    }
    
    
    public function c(){
        $this->load->view('aficiones/c');
        
        $af=isset($_POST['nombre'])?$_POST['nombre']:null;
        
        
        if($af!=null){
            
        $this->load->model('aficiones_model');
        $aficion=$this->aficiones_model->crearAficiones($af);
        
        }
    }
}