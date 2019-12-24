<?php
class Country extends CI_Controller{
    public function index(){
        $this->r();
    }
    
    public function c(){
        frame($this, 'country/c');
    }
    
    public function cpost(){
        $name = isset($_POST['name'])?$_POST['name']:null;
        $this->load->model('country_model');
        
        try {
            $this->country_model->createCountry($name);
            session_start_seguro();
            $_SESSION['_msg']['texto']='Country created!';
            $_SESSION['_msg']['uri']='country/r';
            redirect(base_url().'msg');
            
        } catch (Exception $e) {
            session_start_seguro();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='country/r';
            redirect(base_url().'msg');
        }

    }
    
    public function r(){
        $this->load->model('country_model');
        $data['countries']=$this->country_model->getCountries();
        frame($this, 'country/r', $data);
    }
    
}