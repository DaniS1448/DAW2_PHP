<?php
/*Obtener por teclado infinitos n�meros hasta introducir el 0. Una vez hecho eso, 
 * pedir al usuario qu� operaci�n realizar, pudiendo ser �sta �sumar� o �multiplicar�, 
 * mostr�ndose a continuaci�n la suma o multiplicaci�n (respectivamente) de los datos previamente 
 * introducidos, y en caso de que se introduzca una operaci�n no v�lida, un mensaje de error.*/
$suma=0;
$mult=1;
do{    
    echo "Introduce n: ";
    fscanf(STDIN,"%d\n",$num);
    $suma=$suma+$num;
    if($num!=0){
        $mult=$mult*$num;
    }
    
}while($num!=0);
echo "Operacion? sumar/multiplicar";
fscanf(STDIN,"%s\n",$op);
if($op=="sumar"){
    echo "La suma vale $suma";
}elseif($op=="multiplicar"){
    echo "La multiplicacion es $mult";
}else{
    echo "ERROR. Operacion incorrecta";
}
?>