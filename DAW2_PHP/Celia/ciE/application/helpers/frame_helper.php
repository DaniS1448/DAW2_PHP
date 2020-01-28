<?php
/**
 * 
 * @param object $c
 * @param string $path_to_view
 * @param string $datos
 */
function frame($c,$path_to_view,$datos=[]) {
    $controller->load->view('_templates/head',$datos);
    $controller->load->view('_templates/nav',$datos);
    $controller->load->view($view,$datos);
    $controller->load->view('_templates/end',$datos);
}
?>