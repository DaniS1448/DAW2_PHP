<?php
session_start();
class Boleto extends CI_Controller{
   
    
    public function add(){
        $this->load->view('boleto/add.php');
    }
    
    public function addPost(){
        $numeroBoleto=isset($_POST['numeroBoleto'])?$_POST['numeroBoleto']:null;
        
        if($numeroBoleto!=null){
            $this->load->model('boleto_model');
            if ($this->boleto_model->addBoleto($numeroBoleto)){
                redirect(base_url().'persona/r');
            }
        }
        
        
    }
    
    public function repartir(){
        //necesito los boletos del usuario y una lista de todos los usuarios
        
        //boletos
       // $this->load->model('boleto_model');
      //  $datos['boletos']=$this->boleto_model->getBoletos();
        
        //usuarios
        $this->load->model('persona_model');
        $datos['personas']=$this->persona_model->getPersonas();
        
     
        $datos['persona'] = $this->persona_model->getPersonaId($_SESSION['_activo']);
        
        $this->load->view('boleto/repartir.php',$datos);
    }
    
    public function repartirDos(){
        $datos['boleto']=$_POST['boleto'];
        $datos['persona']=$_POST['persona'];
        
        //necesito saber la cantidad
        $this->load->model('boleto_model');
        $boleto=$_POST['boleto'];
        $datos['cantidad']=$this->boleto_model->getCantidad($boleto);
        
        $this->load->view('boleto/repartirDos',$datos);
    }
    
    public function repartirPost(){
        
        //conectar con modelo para crear la nueva tabla
        $boleto=$_POST['boleto'];
        $persona=$_POST['persona'];
        $cantidad=$_POST['cantidad'];
        
        $this->load->model('boleto_model');
        if($this->boleto_model->createBoletosRepartidos($boleto,$persona,$cantidad)){
            redirect(base_url().'persona/r');
        }       
        
    }
    
    public function comprobar(){
        $boleto=$_POST['boleto'];
        $this->load->model('boleto_model');
        $datos['ganador']=$this->boleto_model->comprobarBoleto($boleto);
        if($datos['ganador']!=false){
            //has ganador
            $this->load->view('boleto/ganas',$datos);
        }else{
            //no has ganado nada
            $this->load->view('boleto/pierdes');
        }
    }
   
}