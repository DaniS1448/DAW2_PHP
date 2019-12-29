<?php
class Ciudad extends CI_Controller{
    
    public function r(){
        
        $this->load->model('ciudad_model');
        $datos['ciudades']=$this->ciudad_model->getCiudades();
       
        $this->load->view('ciudad/verCiudades',$datos);
    }
    
    public function c(){
        
        //necesito los paises para poder mostrarlos en el select al crear una nueva ciudad
        $this->load->model('pais_model');
        $datos['paises']=$this->pais_model->getPaises();
        
        $this->load->view('ciudad/crearCiudad',$datos);             
    }
    
    public function cPost(){
        $nombre=isset($_POST['nombre'])?$_POST['nombre']:null;
        $pais=isset($_POST['pais'])?$_POST['pais']:null;
        
        if($nombre != null && $pais != null){
            
            $this->load->model('ciudad_model');
            if( $this->ciudad_model->addCiudad($nombre,$pais)){
                //redireccionamos a la funcion r que nos lleva a la vista de todas las ciudades
                redirect(base_url().'ciudad/r');
                
            }else{
                //MOSTRAR ERROR, NO SE HA PODIDO AÑADIR A LA BASE DE DATOS LA CIUDAD
            }
            
            
        }else{
            //MOSTRAR VISTA DE ERROR, SE HA ACCEDIDO A CPOST SIN PASAR POR EL FORMULARIO
        }
        
    }
    
}