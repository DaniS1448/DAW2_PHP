<?php
class City extends CI_Controller{
    public function r(){
        $this->load->model('city_model');
        $data['cities'] = $this->city_model->getCities();
        frame($this, 'city/r', $data);
    }
    
    public function c(){
        $this->load->model('country_model');
        $data['countries'] = $this->country_model->getCountries();
        frame($this, 'city/c', $data);
    }
    
    public function cPost(){
        $name = isset($_POST['nameCity'])?$_POST['nameCity']:null;
        $idCountry = isset($_POST['idCountry'])?$_POST['idCountry']:null;
        
        $this->load->model('country_model');
        $country = $this->country_model->getCountryById($idCountry);

        try {
            $this->load->model('city_model');
            $this->city_model->c($name, $country);
            session_start_seguro();
            $_SESSION['_msg']['texto']='City created!';
            $_SESSION['_msg']['uri']='city/r';
            redirect(base_url().'msg');
        } catch (Exception $e) {
            session_start_seguro();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='city/r';
            redirect(base_url().'msg');
        }
    }
}
?>