<?php
class Pais extends CI_Controller{
    
    public function index(){
        $this->load -> view('pais/index');
        
        //$this->r();
    }
    
    public function r(){
        $this->load->model('pais_model');  //  cargamos el model 
        $paises=$this->pais_model->getPaises(); // llamamos al metodo que esta en el model
        $datos=['misPaises'=>$paises]; //creando un array con los valores recibidos de la funcion
        $this->load -> view('cabecera');
        $this->load->view('pais/r',$datos);  // cargando la vista y pasandole el array de datos de la funcion
        
        
    }
    
    public function c(){

        $this->load -> view('pais/c');
        
    }
    
    public function cpost(){
        
        $pais=$_POST['nombre'];
        
        $this->load->model('pais_model');
        $this->pais_model->crearPais($pais);
    }
    
    public function cpost2(){
        $this->load -> view('pais/c');
        
        $pais=isset($_POST['nombre'])?$_POST['nombre']:null;
        
        if ($pais!=null) {
            $this->load->model('pais_model');
            $this->pais_model->crearPais($pais);
            
            $this->load -> view('pais/creado', ['n' => $pais]);
        }
    }
    
//     public function test(){
//         $pais=$_GET['nombre'];
        
//         $this->load->model('pais_model');
//         $this->pais_model->crearPais($pais);
        
//         echo "Has creado el país: $pais";
//     }
}

?>