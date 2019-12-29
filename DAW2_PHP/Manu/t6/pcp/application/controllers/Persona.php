<?php
class Persona extends CI_Controller{
    
    public function r(){        
        $this->load->model('persona_model');
        $datos['personas']=$this->persona_model->getPersonas();
        
        $this->load->view('persona/verPersonas',$datos);
    }
    
    public function c(){
        $this->load->model('pais_model');
        $datos['paises']=$this->pais_model->getPaises();
        
        $this->load->view('persona/crearPersona',$datos);
    }
    
    public function cPost(){
        $nombre=isset($_POST['nombre'])?$_POST['nombre']:null;
        $dni=isset($_POST['dni'])?$_POST['dni']:null;
        $pais=isset($_POST['pais'])?$_POST['pais']:null;
        
        if($nombre != null && $dni != null && $pais != null){
            
            $this->load->model('persona_model');
            if( $this->persona_model->addPersona($nombre,$dni,$pais)){
                //redireccionamos a la funcion r que nos lleva a la vista de todas las persona
                redirect(base_url().'persona/r');
                
            }else{
                //MOSTRAR ERROR, YA HAY UNA PERSONA CON EL DNI INTRODUCIDO
                $this->load->view('persona/errorPersona');
            }
            
            
        }else{
            //MOSTRAR VISTA DE ERROR, SE HA ACCEDIDO A CPOST SIN PASAR POR EL FORMULARIO
        }
        
    }
    
    public function registrarVuelo(){
        
        $this->load->model('persona_model');
        $datos['personas']=$this->persona_model->getPersonas();
        
        $this->load->model('ciudad_model');
        $datos['ciudades']=$this->ciudad_model->getCiudades();
        
        $this->load->view('persona/registrarVuelo',$datos);
        
    }
    
    public function registrarVueloPost(){
        
        $persona=isset($_POST['persona'])?$_POST['persona']:null;
        $arrayCiudades=isset($_POST['ciudades'])?$_POST['ciudades']:[];
        
        if($persona != null){
            
            $this->load->model('persona_model');
            $this->persona_model->registrarVuelo($persona,$arrayCiudades);
            
            //redireccionamos a la funcion r que nos lleva a la vista de todas las persona
            redirect(base_url().'persona/r');
           
            
        }else{
            //MOSTRAR VISTA DE ERROR, SE HA ACCEDIDO A CPOST SIN PASAR POR EL FORMULARIO
        }
        
        
    }
}