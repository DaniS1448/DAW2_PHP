<?php
class User extends CI_Controller{
    public function index(){
        $this->r();
    }
    
    public function c(){
        
        $this->load->model('city_model');
        $data['cities']=$this->city_model->getCities();
        frame($this, 'user/c', $data);
    }
    
    public function cpost(){
        $name = isset($_POST['name'])?$_POST['name']:null;
        $dni = isset($_POST['dni'])?$_POST['dni']:null;
        $idCityBorn = isset($_POST['idCityBorn'])?$_POST['idCityBorn']:null;
        
        $this->load->model('city_model');
        $cityBorn = $this->city_model->getCityById($idCityBorn);
        
        try {
            $this->load->model('user_model');
            $this->user_model->createUser($name, $dni, $cityBorn);
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
    
    public function r(){
        $this->load->model('user_model');
        $data['users']=$this->user_model->getUsers();
        frame($this, 'user/r', $data);
    }
    
    public function regTravel(){
        $this->load->model('user_model');
        $this->load->model('city_model');
        
        $data['users']=$this->user_model->getUsers();
        $data['cities']=$this->city_model->getCities();
        
        frame($this, 'user/regTravelConAjax', $data);
    }
    
    public function ajaxTravelled(){
        $this->load->model('user_model');
        $this->load->model('city_model');
        
        $data['users']=$this->user_model->getUsers();
        $data['cities']=$this->city_model->getCities();
        
        $this->load->view('user/ajaxTravelled', $data);
    }
    
    public function regTravelPost(){
        $this->load->model('user_model');
        $idUser= isset($_POST['idUser'])?$_POST['idUser']:null;
        $user= $this->user_model->getUserById($idUser);
        
        //$this->load->model('city_model');
        $idsTravelled= isset($_POST['travelled'])?$_POST['travelled']:[];
        //$citiesTravelled=$this->city_model->getCitiesByIds($idsTravelled);;

        try {
            //$this->user_model->regTravelleds($user, $citiesTravelled, $idsTravelled);
            $this->user_model->regTravelleds($user, $idsTravelled);
            session_start_seguro();
            $_SESSION['_msg']['texto']='Travels created!';
            $_SESSION['_msg']['uri']='user/r';
            redirect(base_url().'msg');
            
        } catch (Exception $e) {
            session_start_seguro();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='user/r';
            redirect(base_url().'msg');
        }
    }
}
?>