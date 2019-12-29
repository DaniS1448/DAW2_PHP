<?php
class Pais extends CI_Controller {
    
    public function r()
    {
        $this->load->model('pais_model');
        $datos['paises'] = $this->pais_model->getPaises();
       frame($this,'pais/r', $datos);
    }
    
    public function c(){
       frame($this,'pais/c');       
    }
    
    public function cPost(){
        $nombrePais=isset($_POST['nombre'])?$_POST['nombre']:null;
        if($nombrePais!=null){
            $this->load->model('pais_model');
            //$this->pais_model->createPais($nombrePais);
            if( $this->pais_model->createPais($nombrePais)){
                //vista pais insertado
                redirect(base_url().'pais/r');
            }else{
                //vista pais error
                frame($this,'pais/cError');
            }
        }
    }
    
    public function d(){
        $id=isset($_POST['id'])?$_POST['id']:null;
        
        $this->load->model('pais_model');
        $this->pais_model->deletePaisId($id);
        redirect(base_url().'pais/r');
        
    }
    
    public function u(){
        $id=isset($_POST['id'])?$_POST['id']:null;
        
        $this->load->model('pais_model');
        $datos['pais'] = $this->pais_model->getPaisId($id);
        
        frame($this,'pais/u',$datos);
    }
    
    public function uPost(){
        $id=isset($_POST['id'])?$_POST['id']:null;
        $nombrePais=isset($_POST['nombre'])?$_POST['nombre']:null;
        
        if($nombrePais!=null){
            $this->load->model('pais_model');
            
            if( $this->pais_model->updatePais($id,$nombrePais)){
                //vista aficion insertado
                redirect(base_url().'pais/r');
            }else{
                //vista aficion error
                frame($this,'pais/cError');
            }
        }
    }
}
?>
