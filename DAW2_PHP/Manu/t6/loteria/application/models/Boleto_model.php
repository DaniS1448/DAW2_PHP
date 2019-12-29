<?php
class Boleto_model extends CI_Model{
    
    public function addBoleto($numeroBoleto){       
        
        if(R::findOne('boleto', "numero = ?",[$numeroBoleto])==null){ //Si el boleto no esta en la tabla BOLETO lo añado
            $boleto=R::dispense('boleto');
            $boleto->numero=$numeroBoleto;
            R::store($boleto);  
        }
            
        $personaId=R::findOne('persona', "nombre = ?",[$_SESSION['_activo']]);
        $persona=R::load('persona',$personaId->id);
        
        $boletoId=R::findOne('boleto', "numero = ?",[$numeroBoleto]);
        $boleto=R::load('boleto',$boletoId->id);
        
        $personaBoleto=R::dispense('personaboletos');
        $personaBoleto->persona=$persona;
        $personaBoleto->boleto=$boleto;
        $personaBoleto->cantidad="20";
        return R::store($personaBoleto);
        
    }
    
    public function getCantidad($boleto){
        
        $personaId=R::findOne('persona', "nombre = ?",[$_SESSION['_activo']]);
        
        //$boleto es el id!
        
        
      $boletoC= R::findOne('personaboletos',"persona_id=? AND boleto_id=?",[$personaId->id,$boleto]);
    
       return $boletoC->cantidad;
       
     
    }
    
    public function createBoletosRepartidos($boleto,$persona,$cantidad){
        
        //boleto y persona son ID !!
        
        $personaUno=R::findOne('persona', "nombre = ?",[$_SESSION['_activo']]);
       
        $personaDos=R::load('persona',$persona);        
      
        $b=R::load('boleto',$boleto);
        
        $restaCantidad=$this->getCantidad($boleto)-$cantidad;
        
        $repartir=R::dispense('boletosrepartidos');
        $repartir->boleto=$b;
        $repartir->persona1=$personaUno;
       // $repartir->cantidadp1=getCantidad($boleto)-$cantidad;
        $repartir->cantidadp1=$restaCantidad;
        $repartir->persona2=$personaDos;
        $repartir->cantidadp2=$cantidad;
        
        
        //cambio la cantidad del boleto
        
        $c= R::findOne('personaboletos', "persona_id = ? and boleto_id = ?",[$personaUno->id,$boleto]);        
        $c->cantidad=$restaCantidad;
        R::store($c);
        
        return R::store($repartir);
        
        
        
    }
    
    public function getBoletos(){
       
            return R::findAll('boleto');

        
    }
    
    public function getBoletosRepartidos($persona){
        $p=R::findOne('persona', "nombre = ?",[$persona]);
        return R::findAll('boletosrepartidos',"persona1_id=?",[$p->id]);
    }
    
    public function comprobarBoleto($boleto){
        $b=R::findOne('boleto', "numero = ?",[$boleto]); 
        $persona=R::findOne('persona', "nombre = ?",[$_SESSION['_activo']]);
        
        
        if($b!=null){
            if(R::findOne('personaboletos','boleto_id=? and persona_id=?',[$b->id,$persona->id])!=null){
                if(R::findOne('boletosrepartidos','boleto_id=? and persona1_id=?',[$b->id,$persona->id])!=null){
                    $ganador=R::findAll('boletosrepartidos','boleto_id=? and persona1_id=?',[$b->id,$persona->id]);
                }else{
                    $ganador="soloWin";
                }
               
                
            }else{
                $ganador=false;
            }
        }else{
            $ganador=false;
        }
        
        return $ganador;
    }
    
  
}