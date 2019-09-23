<?php
/*Obtener por teclado infinitos números hasta introducir el 0. Una vez hecho eso, 
 * pedir al usuario qué operación realizar, pudiendo ser ésta “sumar” o “multiplicar”, 
 * mostrándose a continuación la suma o multiplicación (respectivamente) de los datos previamente 
 * introducidos, y en caso de que se introduzca una operación no válida, un mensaje de error.*/
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