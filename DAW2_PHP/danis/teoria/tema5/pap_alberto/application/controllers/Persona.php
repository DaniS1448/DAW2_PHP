<?php

class Persona extends CI_Controller
{

    public function r()
    {
        $this->load->model('persona_model');
        $datos['personas'] = $this->persona_model->getPersonas();
        $this->load->view('persona/r', $datos);
    }
}
?>