<?php
class Country extends CI_Controller{
    
    public function c(){
        frame($this, 'country/c');
    }
    
    public function cPost(){
        $nombre=isset($_POST['nombre'])?$_POST['nombre']:null;
        $this->load->model('country_model');
        
        
        try {
            $this->country_model->c($nombre);
            session_start_seguro();
            $_SESSION['_msg']['texto']='Country create ok';
            $_SESSION['_msg']['uri']='country/r';
            redirect(base_url().'mensajes');
        } catch (Exception $e) {
            session_start_seguro();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='country/r';
            redirect(base_url().'mensajes');
        }
        redirect(base_url().'country/r');
    }
    
    public function r(){
        $this->load->model('country_model');
        $datos['paises']=$this->country_model->r();
        
        frame($this, 'country/r', $datos);
        
    }
}
?>