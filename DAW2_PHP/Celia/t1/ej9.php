<?php
/* 9. Preguntar   por   teclado   un   n�mero   n   (del   1   al   10),  
 *  y   a   continuaci�n   qu�   formato   se
requiere,   Si   se   indica   �nombre�,   saldr�n   los   nombres   de   los   n�meros   del   1..N 
  (uno,   dos,
    tres,   cuatro,   �),   si   se   indica   �romano�,   saldr�n   los   n�meros   del   1..N   en
       formato   romano
    (i,   ii,   iii,   iv,   �)
    Dise�ar   el   programa   para   que   s�lo   tenga
    un   bucle
    (y   no   tenga   sentencias   �if�   ni
        �switch�),   de   manera   que   se   puedan   a�adir   nuevos   formatos   de   
        n�meros   en   el   futuro,
        sin   cambiar   casi   el   c�digo. */

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
        