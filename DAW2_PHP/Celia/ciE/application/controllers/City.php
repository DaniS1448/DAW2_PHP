
<?php
class City extends CI_Controller{

    public function create(){
        $this->load->model('country_model');
        $data['countries'] = $this->country_model->read();
        frame($this, 'city/create', $data);
    }
    
    public function createPost(){
        $name = isset($_POST['name']) && ! empty($_POST['name']) ? $_POST['name'] : null;
        $country = isset($_POST['country']) && ! empty($_POST['country']) ? $_POST['country'] : null;
        
        if ($name != null) {
            $this->load->model('city_model');
            $ok = $this->city_model->create($name, $country);
            
            if ($ok) {
                $data=[];
                $data['name'] = $name;
                frame($this, 'city/createOK', $data);
            } else {
                $data['name'] = $name;
                frame($this, 'city/createERROR', $data);
            }
        }
    }

//=====================================================================================

    public function read(){
        $this->load->model('city_model');
        $data['cities'] = $this->city_model->read();
        frame($this, 'city/read', $data);
    }
    
}
?>