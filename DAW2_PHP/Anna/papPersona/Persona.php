<?php

class Persona extends CI_Controller
{

    public function r()
    {
        $this->load->model('persona_model');
        $datos['personas'] = $this->persona_model->getPersonas();
        $this->load->view('persona/r', $datos);
    }
    
/*     public function subirFichero()
    {
    $nombre = $_FILES ['f'] ['name'];
    $carpeta = 'C:/xampp/htdocs/ejercicios/t6/pap/assets/img/';
    copy ( $_FILES ['f'] ['tmp_name'], $carpeta.$nombre );
    } */
    
    public function c()
    {
        $this->load->model('pais_model');
        $datos['paises'] = $this->pais_model->getPaises();
        $this->load->model('aficion_model');
        $datos['aficiones'] = $this->aficion_model->getAficiones();
        $this->load->view('persona/c',$datos);
    }
    
    public function cPost()
    {
        $nombreFichero = $_FILES ['f'] ['name'];
        //$carpeta = 'C:/xampp/htdocs/ejercicios/t6/pap/assets/img/';
        $carpeta = base_url().'assets/img/';
        copy ( $_FILES ['f'] ['tmp_name'], $carpeta.$nombreFichero );
        $this->load->model('persona_model');
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
        $idPaisNace = isset($_POST['idPaisNace']) ? $_POST['idPaisNace'] : null;
        $idPaisRecide = isset($_POST['idPaisRecide']) ? $_POST['idPaisRecide'] : null;
        $aficionGusta = isset($_POST['idAficcionGusta']) ? $_POST['idAficcionGusta'] : [];
        $aficionOdia = isset($_POST['idAficcionOdia']) ? $_POST['idAficcionOdia'] : [];
        try {
            $this->persona_model->crearPersona($nombre,$idPaisNace,$idPaisRecide, $aficionGusta,$aficionOdia,$nombreFichero);
            redirect(base_url() . 'persona/r');
        }
        catch (Exception $e) {
            session_start();
            $_SESSION['_msg']['texto']=$e->getMessage();
            $_SESSION['_msg']['uri']='persona/c';
            redirect(base_url() . 'msg');
        }
    }
}
?>