<?php
class Boleto_model extends CI_Model{
    public function crearBoleto($numero, $precio, $nombreUsuario){
        
        $boleto = R::findOne('boleto', 'numero=?', [$numero]);
        $noExiste = ($boleto == null);
        
        if($noExiste && $numero != null && $precio != null && strlen($numero) == 5){
            
            $boleto = R::dispense('boleto');
            $boleto->numero=$numero;
            $boleto->precio=$precio;
            R::store($boleto);
            
            $usuario = R::findOne('usuario', 'nombre=?', [$nombreUsuario]);
            $usu_bol = R::dispense('participacion');
            $usu_bol->usuario=$usuario;
            $usu_bol->boleto=$boleto;
            $usu_bol->dinero=$precio;
            R::store($usu_bol);
        }
        
        if(!$noExiste){
            throw new Exception('EL BOLETO YA EXISTE');
        } else if($numero == null){
            throw new Exception('EL NÚMERO DE BOLETO NO PUEDE ESTAR VACÍO');
        } else if($precio == null){
            throw new Exception('EL PRECIO DEL BOLETO NO PUEDE ESTAR VACÍO');
        } else if(strlen($numero) != 5){
            throw new Exception('EL NÚMERO DEL BOLETO DEBE TENER 5 CIFRAS');
        }
    }
    
    public function getBoletos(){
        return R::findAll('boleto');
    }
    
    public function getBoletoById($idBoleto){
        return R::load('boleto', $idBoleto);
    }
    
    public function compartirBoleto($boleto, $idFila, $dineroComparte, $personaCompartida, $dineroCompartido){
        $laFila = R::load('participacion', $idFila);
        
        //$sumaDineroOK = ($boleto->precio == ((float)$dineroComparte + (float)$dineroCompartido));
        $sumaDineroOK = ($laFila->dinero == ((float)$dineroComparte + (float)$dineroCompartido));
        
        if ($sumaDineroOK) {
            
            $laFila->dinero=$dineroComparte;
            R::store($laFila);
            
            $usu_bol = R::dispense('participacion');
            $usu_bol->usuario=$personaCompartida;
            $usu_bol->boleto=$boleto;
            $usu_bol->dinero=$dineroCompartido;
            R::store($usu_bol);
            
        } else {
            throw new Exception('La suma del dinero no es correcta');
        }
    }
}
?>