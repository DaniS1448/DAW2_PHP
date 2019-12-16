<?php

class Nota_model extends CI_Model {
    
    public function crear($numero, $alumno_id, $asignatura_id) {
        $ok = false;

        $bean = R::findOne('persona', 'name=?', [$numero]);
        $ok = ($bean == null);

        // R::debug();
        if ($ok) {
            $nota = R::dispense('nota');
            $nota->numero = $numero;
            $nota->alumno = R::load('alumno', $alumno_id);
            foreach ($asignaturas_id as $asignatura_id) {
                $asignatura = R::load('asignatura', $asignatura_id);
                $asignatura->calificacion = $nota;
                R::store($asignatura);
            }
            R::store($nota);
        }
        return $ok;
    }

    public function listar() {
        return R::findAll('nota');
    }

    public function getPersonaById($id) {
        return R::findOne('nota', 'id=?', [$id]);
    }

}