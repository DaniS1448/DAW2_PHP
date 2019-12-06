<?php

class Persona_model extends CI_Model
{
    
    public function getPersonas()
    {
        return R::findAll('persona');
    }
    
    public function crearPersona($nombre,$idPaisNace,$idPaisRecide,$aficionGusta,$aficionOdia,$nombreFichero)
    {

        $ok = ($nombre!=null&&$idPaisNace!=null&&$idPaisRecide!=null);
        if ($ok) {
            $pais1 = R::load('pais',$idPaisNace);
            $pais2 = R::load('pais',$idPaisRecide);
            
            $persona = R::dispense('persona');
            $persona->nombre = $nombre;
            $persona->foto = $nombreFichero;
            $persona->nace = $pais1;
            $persona->recide = $pais2;
            
            R::store($persona);
            foreach ($aficionGusta as $aficion){
                $aficionN = R::load('aficion',$aficion);
                $a_g = R::dispense('gusta');
                $a_g->persona=$persona;
                $a_g->aficion= $aficionN;
                R::store($a_g);
            }
            
            
            foreach ($aficionOdia as $aficion){
                $aficionO = R::load('aficion',$aficion);
                $a_o = R::dispense('odia');
                $a_o->persona=$persona;
                $a_o->aficion=$aficionO;
                R::store($a_o);
            }
            
        }
        else {
            $e = ($nombre==null?new Exception("nulo"):new Exception("duplicado"));
            throw $e;
        }
    }
}
?>

