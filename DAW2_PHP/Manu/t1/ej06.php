<?php
/*Pedir por teclado nombres de personas y sus edades, hasta que se introduzca el nombre �fin�. 
 * Mostrar a continuaci�n el nombre de cada persona introducida y su edad (entre par�ntesis). 
 * NOTA: Utilizar arrays asociativos. �Qu� ocurre si dos personas se llaman igual? 
 * �C�mo podr�amos ver la informaci�n anterior ordenada por nombre? �Y por edad descendente?*/

echo "Nombre? ";
fscanf(STDIN,"%s\n",$nombre);

while($nombre!="fin"){
    echo "Edad de $nombre? ";
    fscanf(STDIN,"%d\n",$edad);
    $nombreEdad[$nombre]=$edad;
//  $nombreArray[]=$nombre;
    echo "Nombre? ";
    fscanf(STDIN,"%s\n",$nombre);
}/*
for($i=0;$i<$j=sizeof($nombreArray);$i++){
    $nombres=$nombreArray[$i];
    echo "$nombres"."($nombreEdad[$nombres]), ";
}
*/
  foreach ($nombreEdad as $persona => $edadPersona){
   echo "$persona($edadPersona), ";
  }   
  //print_r($array);
                                                            //unset ($nombreArray[x])   BORRAR ELEMENTO DE ARRAY
?>