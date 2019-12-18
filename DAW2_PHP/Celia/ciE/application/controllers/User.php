<?php

class User extends CI_Controller{

    public function travel(){
        $this->load->model('city_model');
        $data['cities'] = $this->city_model->read();
        frame($this, 'user/travel',$data);
    }

    public function registerTravelPost(){
        $dni = isset($_POST['dni']) && ! empty($_POST['dni']) ? $_POST['dni'] : null;
        $cities_id = isset($_POST['city']) ? $_POST['city'] : [];
        
        if ($dni!= null) {
            $this->load->model('user_model');
            $ok = $this->user_model->travelled($dni, $cities_id);
            
            if ($ok) {
                frame($this, 'user/travelOK');
            } 
            else {
                $data['dni'] = $dni;
                frame($this, 'user/travelERROR', $data);
            }
        }
    }

//================================================================================================  

    public function create(){
        $this->load->model('user_model');
        $this->load->model('city_model');
        $data['cities'] = $this->city_model->read();
        frame($this, 'user/create', $data);
    }
    
    public function createPost(){
        $dni = isset($_POST['dni']) && ! empty($_POST['dni']) ? $_POST['dni'] : null;
        $name = isset($_POST['name']) && ! empty($_POST['name']) ? $_POST['name'] : null;
        $city = isset($_POST['city']) && ! empty($_POST['city']) ? $_POST['city'] : null;
        
        if($name != null){
            $this->load->model('user_model');
            $ok = $this->user_model->create($dni, $name, $city);
            
            if($ok) {
                $data = [];
                $data['name'] = $name;
                frame($this, 'user/createOK', $data);
            }
            else {
                $data['name'] = $name;
                frame($this, 'user/createERROR', $data);
            }
        }
    }
    
//================================================================================================  
    
    public function read(){
        $this->load->model('user_model');
        $this->load->model('city_model');
        $data['users'] = $this->user_model->read();
        $data['cities'] = $this->city_model->read();
        frame($this, 'user/read', $data);
    }
    
    
}

?>