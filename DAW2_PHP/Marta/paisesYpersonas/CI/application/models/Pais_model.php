<?php
class Pais_model extends CI_Model{
    
    public function getPaises(){   // creo una funcion para recuperar datos
        return R::findAll('pais');  // me busca y devuelve todos los datos de la tabla en un array
    }
    
    public function crearPais($nombre){  // hacemos una funcion  para crear paises y guardarlos en la base
        $pais=R::dispense('pais'); // creo mi tabla (una fila de mi tabla)
        $pais->nombre=$nombre; // creo un atributo y le asigno un valor (es lo que nos ha mandado la vista)
        R::store($pais); // guardo.
    }
    
}

?>