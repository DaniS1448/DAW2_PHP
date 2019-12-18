<?php 
class Country extends CI_Controller {
    
    public function create(){
        frame($this, 'country/create');
    }
    
    public function createPost(){
        $name = isset($_POST['name']) && ! empty($_POST['name']) ? $_POST['name'] : null;
        if ($name != null) {
            $this->load->model('country_model');
            $ok = $this->country_model->create($name);
            if ($ok) {
                $data=[];
                $data['name'] = $name;
                frame($this, 'country/createOK', $data);
            } else {
                $data['name'] = $name;
                frame($this, 'country/createERROR', $data);
            }
        }
    }
    
//=====================================================================================

    public function read(){
        $this->load->model('country_model');
        $data ['countries'] = $this->country_model->read();
        frame($this, 'country/read', $data);    
    }   
}
    
?>