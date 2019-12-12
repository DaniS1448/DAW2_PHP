<?php
class Msg extends CI_Controller{
    public function index(){
        session_start();
        $datos['texto'] = $_SESSION['_msg']['texto'];
        $datos['url'] = $_SESSION['_msg']['url'];
        $this->load->view('_templates/err', $datos);
    }
}
?>