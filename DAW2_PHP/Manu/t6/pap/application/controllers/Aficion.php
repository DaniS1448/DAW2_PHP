<?php
class Aficion extends CI_Controller {
    
    public function r()
    {
        $this->load->model('aficion_model');
        $datos['aficiones'] = $this->aficion_model->getAficiones();
        frame($this,'aficion/r', $datos);
    }
    
    public function c(){
       frame($this,'aficion/c');
    }
    
    public function cPost(){
        $nombreAficion=isset($_POST['nombre'])?$_POST['nombre']:null;
        
        if($nombreAficion!=null){
            $this->load->model('aficion_model');
           
            if( $this->aficion_model->createAficion($nombreAficion)){
                //vista aficion insertado
                redirect(base_url().'aficion/r');
            }else{
                //vista aficion error
               frame($this,'aficion/cError');
            }
        }
    }
    
    public function d(){
        $id=isset($_POST['id'])?$_POST['id']:null;
        
        $this->load->model('aficion_model');
        $this->aficion_model->deleteAficionId($id);
        redirect(base_url().'aficion/r');
        
    }
    
    public function u(){
        $id=isset($_POST['id'])?$_POST['id']:null;
        
        $this->load->model('aficion_model');
        $datos['aficion'] = $this->aficion_model->getAficionId($id);
        
       frame($this,'aficion/u',$datos);
    }
    
    public function uPost(){
        $id=isset($_POST['id'])?$_POST['id']:null;
        $nombreAficion=isset($_POST['nombre'])?$_POST['nombre']:null;
        
        if($nombreAficion!=null){
            $this->load->model('aficion_model');
            
            if( $this->aficion_model->updateAficion($id,$nombreAficion)){
                //vista aficion insertado
                redirect(base_url().'aficion/r');
            }else{
                //vista aficion error
                frame($this,'aficion/cError');  
            }
        }
    }
}
?>