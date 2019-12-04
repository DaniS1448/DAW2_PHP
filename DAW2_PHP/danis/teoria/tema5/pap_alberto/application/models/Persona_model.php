<?php
class Persona_model extends CI_Model {
    public function getPersonas() {
        return R::findAll('persona');
    }
}
?>
