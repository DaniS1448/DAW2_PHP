<?php

class Nota extends CI_Controller{
    
    public function crear(){
        $this->load->model('alumno_model');
        $data['alumnos'] = $this->alumno_model->listar();
        $this->load->model('asignatura_model');
        $data['asignatura'] = $this->asignatura_model->listar();
        frame($this, 'nota/crear');
    }
    
    public function crearPost(){
        $numero = isset($_POST['numero']) && ! empty($_POST['numero']) ? $_POST['numero'] : null;
        $alumno_id = isset($_POST['alumno']) && ! empty($_POST['alumno']) ? $_POST['alumno'] : null;
        $asignatura_id = isset($_POST['asignatura']) ? $_POST['asignatura'] : [];
        
        if (($numero != null)&&($alumno_id != null)) {
            $this->load->model('nota_model');
            $ok = $this->nota_model->crear($numero, $alumno_id, $asignatura_id);
            if ($ok) {
                $data=[];
                $data['nota'] = $numero;
                frame($this, 'nota/crearOK', $data);
            } else {
                $data['nota'] = $numero;
                frame($this, 'nota/crearERROR', $data);
            }
        } 
        
    }

//=====================================================================================
    
    public function listar(){
        $this->load->model('nota_model');
        $data['notas'] = $this->nota_model->listar();
        frame($this, 'nota/listar', $data);
    }
    
}

?>