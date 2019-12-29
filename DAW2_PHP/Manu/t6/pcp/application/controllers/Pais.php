<?php
class Pais extends CI_Controller{
    
    public function c(){
        $this->load->view('pais/crearPais');
    }
    
    public function cPost(){
        $nombre=isset($_POST['nombre'])?$_POST['nombre']:null;
        
        if($nombre!=null){
            
            $this->load->model('pais_model');
            if( $this->pais_model->addPais($nombre)){
                //redireccionar a la funcion r
                redirect(base_url().'pais/r');
            }else{
                //CARGAR VISTA ERROR, EL PAIS ES DUPLICADO
                $this->load->view('pais/errorPais');
            }
            
        }else{
            //CARGAR VISTA ERROR, HA ACCEDIDO A CPOST SIN PASAR POR EL FORMULARIO
        }
        
    }
    
    public function r(){
        
        $this->load->model('pais_model');
        $datos['paises']=$this->pais_model->getPaises();
        
        $this->load->view('pais/verPaises',$datos);
    }
}