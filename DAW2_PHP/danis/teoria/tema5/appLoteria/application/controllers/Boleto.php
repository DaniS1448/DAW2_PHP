<?php
class Boleto extends CI_Controller{

    public function registrar(){
        frame($this, 'boleto/registrar');
    }
    
    public function registrarPost(){
        $numero=isset($_POST['numero'])?$_POST['numero']:null;
        $precio=isset($_POST['precio'])?$_POST['precio']:null;
        $this->load->model('boleto_model');
        
        
        try {
            session_start_seguro();
            $this->boleto_model->crearBoleto($numero, $precio, $_SESSION['usuario']);
            $_SESSION['_msg']['texto']='Boleto registrado correctamente';
            $_SESSION['_msg']['uri']='';
            redirect(base_url() . 'msg');
        }
        catch (Exception $e) {
            session_start_seguro();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='boleto/registrar';
            redirect(base_url() . 'msg');
        }
    }
    
    public function boletos(){
        session_start_seguro();
        $this->load->model('boleto_model');
        $this->load->model('home_model');
        $datos=[];
        $datos['boletos']= $this->boleto_model->getBoletos();
        $datos['usuario']=$this->home_model->devolverUsuario($_SESSION['usuario']);
        frame($this, 'boleto/lista', $datos);
    }
    
    public function compartir(){
        session_start_seguro();
        $idBoleto = isset($_GET['idBoleto'])?$_GET['idBoleto']:null;
        $idFila = isset($_GET['idFila'])?$_GET['idFila']:null;
        
        $this->load->model('boleto_model');
        $this->load->model('home_model');
        $datos=[];
        $datos['boleto']= $this->boleto_model->getBoletoById($idBoleto);
        $datos['usuario']= $this->home_model->devolverUsuario($_SESSION['usuario']);
        $datos['usuarios']= $this->home_model->getUsuarios();
        $datos['idFila']= $idFila;
        frame($this, 'boleto/compartir', $datos);
    }
    
    public function compartirPost(){
        //$idPersonaComparte = isset($_POST['idPersonaComparte'])?$_POST['idPersonaComparte']:null;
        $dineroComparte = isset($_POST['dineroComparte'])?$_POST['dineroComparte']:null;
        $idUsuarioCompartido = isset($_POST['idUsuarioCompartido'])?$_POST['idUsuarioCompartido']:null;
        $dineroCompartido = isset($_POST['dineroCompartido'])?$_POST['dineroCompartido']:null;
        $idBoleto= isset($_POST['idBoleto'])?$_POST['idBoleto']:null;
        $idFila= isset($_POST['idFila'])?$_POST['idFila']:null;
        
        $this->load->model('boleto_model');
        $this->load->model('home_model');
        
        //$personaComparte = $this->home_model->getUsuarioById($idPersonaComparte);
        $personaCompartida = $this->home_model->getUsuarioById($idUsuarioCompartido);
        $boleto = $this->boleto_model->getBoletoById($idBoleto);
        
        try {
            $this->boleto_model->compartirBoleto($boleto, $idFila, $dineroComparte, $personaCompartida, $dineroCompartido);
            session_start_seguro();
            $_SESSION['_msg']['texto']='Boleto compratido correctamente';
            $_SESSION['_msg']['uri']='boleto/boletos';
            redirect(base_url() . 'msg');
        }
        catch (Exception $e) {
            session_start_seguro();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']="boleto/compartir?idBoleto=$idBoleto&idFila=$idFila";
            redirect(base_url() . 'msg');
        }
    }
  
}
?>