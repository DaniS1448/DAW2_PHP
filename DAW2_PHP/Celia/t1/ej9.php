<?php
/* 9. Preguntar   por   teclado   un   número   n   (del   1   al   10),  
 *  y   a   continuación   qué   formato   se
requiere,   Si   se   indica   “nombre”,   saldrán   los   nombres   de   los   números   del   1..N 
  (uno,   dos,
    tres,   cuatro,   …),   si   se   indica   “romano”,   saldrán   los   números   del   1..N   en
       formato   romano
    (i,   ii,   iii,   iv,   …)
    Diseñar   el   programa   para   que   sólo   tenga
    un   bucle
    (y   no   tenga   sentencias   “if”   ni
        “switch”),   de   manera   que   se   puedan   añadir   nuevos   formatos   de   
        números   en   el   futuro,
        sin   cambiar   casi   el   código. */

echo 'Numero del 1 al 10 ';
fscanf ( STDIN, "%d\n", $num );

echo 'Formato (nombre,romano,)';
fscanf ( STDIN, "%d\n", $form );

$numeros=["uno","dos","tres","cuatro","cinco","seis","siete","ocho","nueve","diez"];
$romanos=["I","II","III","IV","V","VI","VII","VIII","IX","X"];
$a=["nombre"=>$numeros,"roman"=>$romanos];

for ($i = 0; $i < $n; $i ++) {
    // echo $a[$f][$i].",";
    echo ($i == $n - 1) ? $a[$f][$i] : $a[$f][$i] . ",";
}





?>
        