<?php

class Alumno extends CI_Controller{

    public function crear(){
        frame($this, 'alumno/crear');
    }
    
    public function crearPost(){
        $nombre = isset($_POST['nombre']) && ! empty($_POST['nombre']) ? $_POST['nombre'] : null;
        $apellido = isset($_POST['apellido']) && ! empty($_POST['apellido']) ? $_POST['apellido'] : null;
        
        if(($nombre != null)&&($apellido != null)){
            $this->load->model('alumno_model');
            $ok = $this->alumno_model->crear($nombre, $apellido);
            if ($ok) {
                $data=[];
                $data['nombre'] = $nombre;
                $data['apellido'] = $apellido;
                frame($this, 'alumno/crearOK', $data);
            } else {
                $data['nombre'] = $nombre;
                $data['apellido'] = $apellido;
                frame($this, 'alumno/crearERROR', $data);
            }
        }
    }
    
//================================================================================================  
    
    public function listar(){
        $this->load->model('alumno_model');
        $data ['alumnos'] = $this->alumno_model->listar();
        frame($this, 'alumno/listar', $data);
    }   

}

?>