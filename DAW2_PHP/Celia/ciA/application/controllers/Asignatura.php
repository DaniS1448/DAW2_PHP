<?php 

class Asignatura extends CI_Controller {
 
    public function crear(){
        frame($this, 'asignatura/crear');
    }
    
    public function crearPost(){
        $nombre = isset($_POST['nombre']) && ! empty($_POST['nombre']) ? $_POST['nombre'] : null;
        if ($nombre != null) {
            $this->load->model('asignatura_model');
            $ok = $this->asignatura_model->crear($nombre);
            if ($ok) {
                $data=[];
                $data['nombre'] = $nombre;
                frame($this, 'asignatura/crearOK', $data);
            } else {
                $data['nombre'] = $nombre;
                frame($this, 'asignatura/crearERROR', $data);
            }
        }
    }
    
//=====================================================================================
    
    public function listar(){
        $this->load->model('asignatura_model');
        $data ['asignaturas'] = $this->asignatura_model->listar();
        frame($this, 'asignatura/listar', $data);
    }
}

?>