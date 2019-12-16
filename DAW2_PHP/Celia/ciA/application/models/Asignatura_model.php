<?php

class Asignatura_model extends CI_Model{
    
    public function crear($nombre){
        $ok = false;
        
        $bean = R::findOne('asignatura','name=?',[$nombre]);
        $ok = ($bean == null);
        
        if ($ok) {
            $asignatura = R::dispense('asignatura');
            $asignatura->nombre = $nombre;
            R::store($asignatura);
        }
        return $ok;
    }
    
//=====================================================================================
    
    public function listar() {
        return R::findAll('asignatura');
    }
    
    public function getAsignaturaById($id) {
        return R::findOne('asignatura', 'id=?', [$id]);
    }
    
}
?>