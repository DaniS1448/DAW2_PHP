<?php
class Coche extends CI_Controller{
    public function index(){
        echo "Página principal de coches";
    }
    public function filtrar(...$parametros){
        echo "<table><tr><th>PARÁMETROS</th></tr>";
        foreach ($parametros as $parametro){
            echo "<tr><td>$parametro</td></tr>";
        }
        echo "</table>";
        
        $estilo = $_GET['estilo'];
        echo "<br>Marta es: $estilo";
    }
    
    public function portatiles($marca){
        $portatiles=['Lenovo'=>['M1', 'M2']];
        $this->load->view('portatiles/modelos', $portatiles);
    }
}
?>