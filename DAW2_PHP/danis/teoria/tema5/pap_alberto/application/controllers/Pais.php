<?php

class Pais extends CI_Controller
{

    public function c()
    {
        frame($this,'pais/c');
        //$this->load->view('pais/c');
    }

    public function cPost()
    {
        $this->load->model('pais_model');
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        try {
            $this->pais_model->crearPais($nombre);
            redirect(base_url() . 'pais/r');
        }
        catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='pais/c';
            redirect(base_url() . 'msg');
        }
    }

    public function r()
    {
        $this->load->model('pais_model');
        $datos['paises'] = $this->pais_model->getPaises();
        frame($this,'pais/r',$datos);
        //$this->load->view('pais/r', $datos);
    }
}
?>