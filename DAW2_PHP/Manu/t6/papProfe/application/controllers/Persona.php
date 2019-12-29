<?php

class Persona extends CI_Controller
{

    public function r()
    {
        $this->load->model('persona_model');
        $datos['personas'] = $this->persona_model->getPersonas();
        $this->load->view('persona/r', $datos);
    }
    
    public function c(){
        
        $this->load->model('pais_model');
        $paisesArray['paises']=$this->pais_model->getPaises();
        $this->load->view('persona/c',$paisesArray);
        
    }
    public function cPost(){
        
    }
}
?>