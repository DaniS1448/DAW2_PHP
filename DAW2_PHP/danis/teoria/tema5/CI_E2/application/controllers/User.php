<?php
class User extends CI_Controller{
    public function index(){
        $this->load->view('user/index');
    }
    
    public function c(){
        $this->load->model('city_model');
        $datos=[];
        $datos['lasCiudadesDeCelia']=$this->city_model->getCities();
        $this->load->view('user/c', $datos);
    }
    
    public function cpost(){
        $nombre = isset($_POST['nombre'])?$_POST['nombre']:null;
        $idCity = isset($_POST['idCity'])?$_POST['idCity']:null;
        
        $this->load->model('user_model');
        
        try {
            $this->user_model->crearUser($nombre, $idCity);
            redirect(base_url() . "user/userCreado?nombre=$nombre");
        } catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto'] = $e->getMessage();
            $_SESSION['_msg']['url']  = 'user/r';
            redirect(base_url() . 'msg');
        }
        
        
    }
    
    public function userCreado(){
        $nombre = isset($_GET['nombre'])?$_GET['nombre']:null;
        $datos=[];
        $datos['user'] = $nombre;
        $this->load->view('user/userCreado', $datos);
    }
    
    public function r(){
        $this->load->model('user_model');
        $datos['users'] = $this->user_model->getUsers();
        $this->load->view('user/r', $datos);
    }
}
?>