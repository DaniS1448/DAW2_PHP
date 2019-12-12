<?php
class City extends CI_Controller{
    public function index(){
        $this->load->view('city/index');
    }
    
    public function c(){
        $this->load->model('pais_model');
        $datos['losPaisesDeCelia']=$this->pais_model->getPaises();
        $this->load->view('city/c', $datos);
    }
    
    public function cpost(){
        $nombre = isset($_POST['nombre'])?$_POST['nombre']:null;
        $idPais = isset($_POST['idPais'])?$_POST['idPais']:null;
        
        $this->load->model('city_model');
        
        try {
            $this->city_model->crearCity($nombre, $idPais);
            redirect(base_url() . "city/cityCreado?nombre=$nombre");
        } catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto'] = $e->getMessage();
            $_SESSION['_msg']['url']  = 'city/r';
            redirect(base_url() . 'msg');
        }
        
        
    }
    
    public function cityCreado(){
        $nombre = isset($_GET['nombre'])?$_GET['nombre']:null;
        $datos=[];
        $datos['city'] = $nombre;
        $this->load->view('city/cityCreado', $datos);
    }
    
    public function r(){
        $this->load->model('city_model');
        $datos['cities'] = $this->city_model->getCities();
        $this->load->view('city/r', $datos);
    }
}
?>