<?php
class Country extends CI_Controller{
    public function index(){
        frame($this, 'country/index');
    }
    
    public function c(){
        frame($this, 'country/c');
    }
    
    public function cpost(){
        $nombre = isset($_POST['nombre'])?$_POST['nombre']:null;
        $this->load->model('country_model');
        $this->country_model->createCountry($nombre);
        redirect(base_url().'country/error?n='.$nombre);
    }
    
    public function error(){
        echo "BIEN O MAL" . $_GET['n'];
    }
    
}