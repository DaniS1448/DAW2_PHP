<?php

class Persona extends CI_Controller
{

    public function r()
    {
        $this->load->model('persona_model');
        $datos['personas'] = $this->persona_model->getPersonas();
        frame($this,'persona/r', $datos);
    }
    
    public function c(){
        
        $this->load->model('pais_model');
        $datos['paises'] = $this->pais_model->getPaises();
        
        $this->load->model('aficion_model');
        $datos['aficiones'] = $this->aficion_model->getAficiones();
        
        frame($this,'persona/c',$datos);
    }
    
    public function cPost(){
        $nombrePersona=isset($_POST['nombre'])?$_POST['nombre']:null;
        $idPaisNacimiento=isset($_POST['nacimiento'])?$_POST['nacimiento']:null;
        $idPaisReside=isset($_POST['reside'])?$_POST['reside']:null;
        
        $arrayAficionesGusta=isset($_POST['aficionesGusta'])?$_POST['aficionesGusta']:[];
        $arrayAficionesOdia=isset($_POST['aficionesOdia'])?$_POST['aficionesOdia']:[];
        
        $imagen = isset($_FILES['imagen'])?$_FILES ['imagen']['name']:null;
        $carpeta = "assets\img\\"; //Debe tener “apache” permiso de escritura en ella
        
        
        if($nombrePersona!=null && $idPaisNacimiento!=null && $idPaisReside!=null && $imagen!=null){
            
            $this->load->model('persona_model');
           
            if( $this->persona_model->createPersona($nombrePersona,$idPaisNacimiento,$idPaisReside,$arrayAficionesGusta,$arrayAficionesOdia,$imagen)){
                //vista persona insertado
                copy ( $_FILES ['imagen'] ['tmp_name'], $carpeta . $imagen );
               // $this -> r();  asi esta mal, mejor usar el redirect
                redirect(base_url().'persona/r');
            }else{
                //vista persona error
               frame($this,'persona/cError');  ///NO ESTA CREADA ESTA VISTA 
            }
        }  
         
    }
    
    public function d(){
        $id=isset($_POST['id'])?$_POST['id']:null;
        
        $this->load->model('persona_model');
        $this->persona_model->deletePersonaId($id);
        redirect(base_url().'persona/r');
        
    }
    
    public function u(){
        $id=isset($_POST['id'])?$_POST['id']:null;
        
        $this->load->model('persona_model');
        $datos['persona'] = $this->persona_model->getPersonaId($id);
        
        $this->load->model('pais_model');
        $datos['paises'] = $this->pais_model->getPaises();   //necesito los paises 
        
        $this->load->model('aficion_model');
        $datos['aficiones'] = $this->aficion_model->getAficiones(); //necesito las aficiones
        
        frame($this,'persona/u',$datos);
    }
    
    public function uPost(){
        $id=isset($_POST['id'])?$_POST['id']:null;
        $nombrePersona=isset($_POST['nombre'])?$_POST['nombre']:null;
        $idPaisNacimiento=isset($_POST['nacimiento'])?$_POST['nacimiento']:null;
        $idPaisReside=isset($_POST['reside'])?$_POST['reside']:null;
        
        $arrayAficionesGusta=isset($_POST['aficionesGusta'])?$_POST['aficionesGusta']:[];
        $arrayAficionesOdia=isset($_POST['aficionesOdia'])?$_POST['aficionesOdia']:[];
        
        $imagen = isset($_FILES['imagen'])?$_FILES ['imagen']['name']:null;
        $carpeta = "assets\img\\"; //Debe tener “apache” permiso de escritura en ella
        
        
        if($nombrePersona!=null && $idPaisNacimiento!=null && $idPaisReside!=null){
            
            $this->load->model('persona_model');
            
            if( $this->persona_model->updatePersona($id,$nombrePersona,$idPaisNacimiento,$idPaisReside,$arrayAficionesGusta,$arrayAficionesOdia,$imagen)){
                //vista persona insertado
                copy ( $_FILES ['imagen'] ['tmp_name'], $carpeta . $imagen );
                // $this -> r();  asi esta mal, mejor usar el redirect
                redirect(base_url().'persona/r');
            }else{
                //vista persona error
                redirect(base_url().'persona/r');
               // $this->load->view('persona/cError');  ///NO ESTA CREADA ESTA VISTA
            }
        }  
    }
}
?>