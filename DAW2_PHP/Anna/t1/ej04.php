<?php
/* Obtener por teclado infinitos n�meros hasta introducir el 0. 
 * Una vez hecho eso, pedir al usuario qu� operaci�n realizar, 
 * pudiendo ser �sta �sumar� o �multiplicar�, mostr�ndose a continuaci�n la suma o 
 * multiplicaci�n (respectivamente) de los datos previamente introducidos, 
 * y en caso de que se introduzca una operaci�n no v�lida, un mensaje de error.
Ejemplo:
Introduce n: 1
Introduce n: -7
Introduce n: 0
Operaci�n? sumar
La suma vale -6 */
echo "Introduce n: ";
fscanf(STDIN, "%d\n",$num);

$suma=$num;
$multiple=$num;

while ($num!=0){
    echo "Introduce n: ";
    fscanf(STDIN, "%d\n",$num);
    $suma=$suma+$num;
    
    $multiple=($num!=0)?$multiple*$num:$multiple;
    }
    echo "Operaci�n? sumar or multiplicar :";
    fscanf(STDIN, "%s\n",$operacion);
    
    if($operacion=="sumar"){
        echo "La suma vale : ".$suma;
    }
   else if($operacion=="multiplicar"){
        echo "El multiple vale : ".$multiple;
    }
    else{
        echo "Error, elige la operacion correcta - sumar o multiplicar";
    }

?>