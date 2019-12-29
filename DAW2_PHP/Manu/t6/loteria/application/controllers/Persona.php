<?php
session_start();
class Persona extends CI_Controller{
    
    
    public function r(){
        $this->load->model('persona_model');
        $datos['persona'] = $this->persona_model->getPersonaId($_SESSION['_activo']);
        
        //necesito los boletos repartidos
        $this->load->model('boleto_model');
        $datos['repartidos']=$this->boleto_model->getBoletosRepartidos($_SESSION['_activo']);
        
        
        $this->load->view('persona/logIndex.php',$datos);
    }
    
    public function log(){
        $nombre=isset($_POST['nombre'])?$_POST['nombre']:null;
        $pwd=isset($_POST['pwd'])?$_POST['pwd']:null;
        
        
        if ($nombre != null && $pwd != null){
            $this->load->model('persona_model');
            if($this->persona_model->comprobarUsuario($nombre,$pwd)){
                
                //usuario correcto
                $_SESSION['_activo']=$nombre;                                
                redirect(base_url().'persona/r');
                
            }else{
                //usuario incorrecto
                $this->load->view('persona/logError.php');
            }
            
            
        }
    }
  
    public function reg(){
        $this->load->view('persona/registrar.php');
    }
    
    public function regPost(){
        $nombre=isset($_POST['nombre'])?$_POST['nombre']:null;
        $pwd=isset($_POST['pwd'])?$_POST['pwd']:null;
        
        if ($nombre != null && $pwd != null){
            $this->load->model('persona_model');
            if($this->persona_model->addPersona($nombre,$pwd)){
                //usuario registrado correctamente
                redirect(base_url().'home/index');
            }else{
                //vista ya existe el usuario
                $this->load->view('persona/regError.php');
            }
        }
    }
    
}