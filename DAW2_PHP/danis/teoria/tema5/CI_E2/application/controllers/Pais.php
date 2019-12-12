<?php
class Pais extends CI_Controller{
    public function index(){
        $this->load->view('pais/index');
    }
    
    public function c(){
        $this->load->view('pais/c');
    }
    
    public function cpost(){
        $nombre = isset($_POST['nombre'])?$_POST['nombre']:null;
        $this->load->model('pais_model');
        
        try {
            $this->pais_model->crearPais($nombre);
            redirect(base_url() . "pais/paisCreado?nombre=$nombre");
        } catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto'] = $e->getMessage();
            $_SESSION['_msg']['url']  = 'pais/r';
            redirect(base_url() . 'msg');
        }
        
        //$this->load->view('pais/paisCreado', ['pais' => $nombre]);
        
    }
    
    public function cpostExamen(){
        $nombre = isset($_POST['nombre'])?$_POST['nombre']:null;
        $this->load->model('pais_model');
        $this->pais_model->crearPais($nombre);
        $datos=[];
        $datos['pais'] = $nombre;
        $this->load->view('pais/paisCreado', $datos);
    }
    
    public function paisCreado(){
        $nombre = isset($_GET['nombre'])?$_GET['nombre']:null;
        $datos=[];
        $datos['pais'] = $nombre;
        $this->load->view('pais/paisCreado', $datos);
    }
    
    public function r(){
        $this->load->model('pais_model');
        $datos['paises'] = $this->pais_model->getPaises();
        $this->load->view('pais/r', $datos);
    }
}
?>