<?php
class User extends CI_Controller{
    public function r(){
        $this->load->model('user_model');
        $data['users'] = $this->user_model->getUsers();
        frame($this, 'user/r', $data);
    }
    
    public function c(){
        $this->load->model('country_model');
        $data['countries'] = $this->country_model->getCountries();
        frame($this, 'user/c', $data);
    }
    
    public function cPost(){
        $dniUser = isset($_POST['dniUser'])?$_POST['dniUser']:null;
        $nameUser = isset($_POST['nameUser'])?$_POST['nameUser']:null;
        $idCountryBorn = isset($_POST['idCountryBorn'])?$_POST['idCountryBorn']:null;
        
        $this->load->model('country_model');
        $countryBorn = $this->country_model->getCountryById($idCountryBorn);

        try {
            $this->load->model('user_model');
            $this->user_model->c($dniUser, $nameUser, $countryBorn);
            session_start_seguro();
            $_SESSION['_msg']['texto']='User created!';
            $_SESSION['_msg']['uri']='user/r';
            redirect(base_url().'msg');
        } catch (Exception $e) {
            session_start_seguro();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='user/r';
            redirect(base_url().'msg');
        }
    }
    
    public function registerTravell(){
        $this->load->model('user_model');
        $data['users'] = $this->user_model->getUsers();
        $this->load->model('city_model');
        $data['cities'] = $this->city_model->getCities();
        frame($this, 'user/travelled', $data);
    }
    
    public function travelledCPost(){
        $idUser = isset($_POST['idUser'])?$_POST['idUser']:null;
        $idsCititesTravelled = isset($_POST['idsCitiesTravelled'])?$_POST['idsCitiesTravelled']:[];
        
        $this->load->model('user_model');
        $user = $this->user_model->getUserById($idUser);
        
        $this->user_model->cTravelled($user, $idsCititesTravelled);
        
        session_start_seguro();
        $_SESSION['_msg']['texto']='Cities travelled created';
        $_SESSION['_msg']['uri']='user/r';
        redirect(base_url().'msg');
    }
}
?>