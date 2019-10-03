<?php
/*Mejorar el programa anterior para que cicle alrededor de la introducci�n del n�mero N, hasta que sea un n�mero entre 1 y 10, 
 * y para que cicle en la introducci�n del formato hasta que sea un formato que el programa conozca (pudiendo estar abierto a la 
 * introducci�n de nuevos formatos, sin necesidad de cambiar el c�digo de comprobaci�n)*/

$arrayFormatos=[ "nombre"=>["uno","dos","tres","cuatro","cinco","seis","siete","ocho","nueve","diez"],
    "romano"=>["I","II","III","IV","V","VI","VII","VIII","IX","X"]
];

echo "N: ";
fscanf(STDIN,"%d\n",$n);
while ($n<1 || $n>10){
 echo "Introduce un n entre 1 y 10: ";
 fscanf(STDIN,"%d\n",$n);
 }
 
echo "Formato: ";
fscanf(STDIN,"%s\n",$formato);

//while (!array_key_exists($formato, $arrayFormatos)){
while (!(in_array($formato,array_keys($arrayFormatos)))){
    echo "Dime un formato valido: ";
    fscanf(STDIN,"%s\n",$formato);
}

for ($i=0;($i<$n && $n<=10);$i++){
    echo  $arrayFormatos[$formato][$i].", ";
}
?>