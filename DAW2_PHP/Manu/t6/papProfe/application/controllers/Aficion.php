<?php

class Aficion extends CI_Controller
{

    public function c()
    {
        $this->load->view('Aficion/c');
    }

    public function cPost()
    {
        $this->load->model('aficion_model');
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        try {
            $this->aficion_model->crearAficion($nombre);
            redirect(base_url() . 'aficion/r');
        }
        catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='aficion/c';
            redirect(base_url() . 'msg');
        }
    }

    public function r()
    {
        $this->load->model('aficion_model');
        $datos['aficiones'] = $this->aficion_model->getAficiones();
        $this->load->view('aficion/r', $datos);
    }
}
?>