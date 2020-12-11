<?php
class Home extends CI_Controller{
    public function index(){
        frame($this, 'home/index');
    }
    
    public function mensaje(){
        session_start_seguro();
        $_SESSION['_msg']['texto']='Mensaje genérico';
        $_SESSION['_msg']['uri']='';
        redirect(base_url().'msg');
    }
}
?>