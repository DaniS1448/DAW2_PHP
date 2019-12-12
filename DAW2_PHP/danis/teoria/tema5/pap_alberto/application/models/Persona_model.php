<?php

class Persona_model extends CI_Model
{

    public function getPersonaById($id)
    {
        return R::load('persona', $id);
    }

    public function getPersonas()
    {
        return R::findAll('persona');
    }

    public function crearPersona($nombre, $idPaisNace, $idPaisReside, $idsAficionGusta, $idsAficionOdia)
    {
        $ok = ($nombre != null && $idPaisNace != null && $idPaisReside != null);
        if ($ok) {
            $persona = R::dispense('persona');
            $paisNacimiento = R::load('pais', $idPaisNace);
            $paisResidencia = R::load('pais', $idPaisReside);
            $persona->nombre = $nombre;
            $persona->nace = $paisNacimiento;
            $persona->reside = $paisResidencia;

            R::store($persona);

            foreach ($idsAficionGusta as $idAficionGusta) {
                $aficion = R::load('aficion', $idAficionGusta);
                $gusta = R::dispense('gusta');
                $gusta->persona = $persona;
                $gusta->aficion = $aficion;
                R::store($gusta);
            }
            foreach ($idsAficionOdia as $idAficionOdia) {
                $aficion = R::load('aficion', $idAficionOdia);
                $odia = R::dispense('odia');
                $odia->persona = $persona;
                $odia->aficion = $aficion;
                R::store($odia);
            }
        } else {
            $e = ($nombre == null ? new Exception("nulo") : new Exception("duplicado"));
            throw $e;
        }
    }

    public function actualizarPersona($id, $nombre, $idPaisNace, $idPaisReside, $idsAficionGusta, $idsAficionOdia)
    {
        $ok = ($nombre != null && $idPaisNace != null && $idPaisReside != null);
        if ($ok) {
            $persona = R::load('persona',$id);
            
            //$paisNacimiento = R::load('pais', $idPaisNace);
            //$paisResidencia = R::load('pais', $idPaisReside);
            $persona->nombre = $nombre;
            $persona->nace_id = $idPaisNace;
            $persona->reside_id = $idPaisReside;
            R::store($persona);
            
            foreach ($persona->ownGustaList as $gusto) {
                if (!in_array($gusto->aficion_id,$idsAficionGusta)) {
                    R::trash($gusto);
                }
            }
            
            foreach ($idsAficionGusta as $idGusta) {
                if (!in_array($idGusta,$persona->ownGustaList)) {
                    $aficion = R::load('aficion', $idGusta);
                    $gusta = R::dispense('gusta');
                    $gusta->persona = $persona;
                    $gusta->aficion = $aficion;
                    R::store($gusta);
                }
            }
            
            
        } else {
            $e = ($nombre == null ? new Exception("nulo") : new Exception("duplicado"));
            throw $e;
        }
    }
}

?>
