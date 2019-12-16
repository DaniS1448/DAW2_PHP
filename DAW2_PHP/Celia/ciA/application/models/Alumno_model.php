<?php

class Alumno_model extends CI_Model{
    
    public function crear($nombre, $apellido){
        $ok = false;
        
        $bean = R::findOne('alumno', 'name=?', [$nombre], [$apellido]);
        $ok = ($bean == null);
        
        if ($ok) {
            $alumno = R::dispense('alumno');
            $alumno->nombre = $nombre;
            $alumno->apellido = $apellido;
            R::store($alumno);
        }
        return $ok;
    }
    
    //=====================================================================================
    
    public function listar() {
        return R::findAll('alumno');
    }
    
    public function getAlumnoById($id) {
        return R::findOne('alumno', 'id=?', [$id]);
    }
    
}
?>