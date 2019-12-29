<?php
function frame($controller,$view,$data=[]){
    $controller->load->view('_templates/header',$data);
    $controller->load->view('_templates/menu',$data);
    $controller->load->view($view,$data);
    $controller->load->view('_templates/footer',$data);
    
}