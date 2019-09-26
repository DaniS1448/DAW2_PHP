<?php
/* //Incrementa el valor de i
$i = 1;
echo $i++;
echo "\n";
echo $i;
 */

/* //El punto concatena 
$a = "corre";
$b ="caminos";
echo $a.$b; */

/* //el valor de $a es uno, al ponerle igual a $a + 7 , lo va almacenando y sale 8 
$a = 1;
echo $a; 
echo PHP_EOL; //salto de linea 
$a =$a + 7;
echo $a; */

/* //coge el valor de $a y lo multiplica al nuevo valor de $a
$a = 1;
echo $a;
echo PHP_EOL;
$a *= 7;
echo $a; */

/* $a = 1;
$b = 10; //O TRUE se puede poner 
if ($a == $b) {
    echo "SI";
}else {
    echo "NO";
} */


/* //Saldra NO por que a y b no sin iguales 
 $a = true;
 $b = false; 
 if ($a && $b) {
 echo "SI";
 }else {
 echo "NO";
 } */


/* //=== tiene que ser igual en valor y tipo.
$a = "2.1";
$b = 10; 
echo $a + $b;
echo "\n";
if ($a === $b) {
    echo "SI";
}else {
    echo "NO";
} */

/* // $a entre $b es mayor que 1 por lo que saldra "Si"
$a = 7;
$b = 1;
if ($a / $b > 1) {
    echo "SI";
}else {
    echo "NO";
}
 */
/* //Saldria que no, por que una de esas 2 condiciones no se cumple 
$a = 7;
$b = 0;
if (($b > 0) && ($a / $b) > 1) {
    echo "SI";
}else {
    echo "NO";
} */


/* $guapo = true;
if ($guapo) {
    echo "GUAPERAS";
}else {
    echo "PUAJJJ";
} 

==========
echo true?"GUAPERAS":"PUAJJ";
*/


/* $guapo=true;
if (($guapo?"GUAPERAS":"PUAJJ") == "GUAPERAS") {
    echo "SI";   
}else 
    echo "NO"; */


/* $letra = "a";
switch ($letra) {
    case 'a':echo "A";break;
    case 'b':echo "B";break;
} */


/* $letra = "x";
switch ($letra) {
    case 'a':echo "A";break;
    case 'b':echo "B";break;
    default:echo "NINGUNO";
} */


/* $letra = "a";
switch ($letra) {
    case 'a':;
    case 'e':;
    case 'i':;
    case 'o':;
    case 'u':echo "VOCAL";break;
    default:echo "CONSONANTE";
}
echo "\nSEGUIMOS"; */


/* //Hace un bucle infinito de "HOLA"
while (true) {
    echo "HOLA\n";
}
 */


/* $a = 1;
while ($a > 0) {
    echo "HOLA\n";
    $a --;
} */

//==================
/* 
$a = 1; 
do {
    echo "HOLA\n";
    $a--;
}while ($a>0) */


/* echo "\nPRINCIPIO\n";
$a = 1;
while ($a <=10) {
    echo "$a. OTRA VUELTA \n";
    $a ++;
}
echo "\nFIN"; */

//=============
/* for ($a = 1; $a <=10; $a++) {
    echo "$a. OTRA VUELTA \n";
}
echo "\nFIN"; */


/* function soy($asi) {
    echo "Soy $asi \n";
}

soy('listo');
soy('guapo'); */


/* //Salen las tres opciones , y la llamada a la funcion vacia es normal, por que esta asi asociado en la funcion de arriba.
function soy($asi="normal") {
    echo "Soy $asi \n";
}

soy('listo');
soy('guapo');
soy(); */


/* function soy() {
    echo "Numero de argumentos: ".func_num_args().PHP_EOL;
    echo func_get_arg(0).PHP_EOL;
}
   // soy();
    soy(1,2);
    soy(10,2,3);
    soy(20,1,1,1,1,1,1,1);
 */


/* //Saldria 1,10,10 por que es el primer argumento de las tres líneas
function soy() {
    echo "Numero de argumentos: ".func_num_args().PHP_EOL;
    if (func_num_args() > 0)
    echo func_get_arg(0).PHP_EOL;
}

soy();
soy(1,2);
soy(10,2,3);
soy(20,1,1,1,1,1,1,1); */


/* function hola() {
    echo "HOLA";
}

for ($i=1; $i <=10; $i++) {
    hola();
} */
    
    
/* //La funcion devolveria 10 "1"    
function uno() {
    return 1;
}

for ($i = 1; $i <= 10; $i++) {
    echo uno();
}  */


/* //Calcula el doble del numero que le pases n veces como indica el for (10)
function doble($n) {
    return 2*$n;
}

for ($i = 1; $i <= 10; $i++) {
    echo doble(8), "\n";
} */


/* //Enumera la columna del 1-10 y te calcula el doble de ese valoe ($i)
function doble($n) {
    return 2*$n;
}

for ($i = 1; $i <= 10; $i++) {
    echo $i. '-'.doble($i),"\n";
} */

/* function maximo($n1, $n2) {
    $sol = 0;
    if ($n1 > $n2) {
        
    }else {
        $sol=$n2;
    }
    return $sol;
    
}
echo maximo(3, 7); */

//=============
/* 
function maximo($n1, $n2) {
    return $n1 > $n2 ? $n1 : $n2;
}
echo maximo(3, 7); */


/* function sum(...$numeros) {
    $acc = 0;
    foreach ($numeros as $n) {
        $acc += $n;
    }
    return $acc;
}
echo sum (1, 2, 3, 4, 5, 6, 7, 4564); */


/* $a['pepe'] = 10;
$a['rosa'] = 20;
echo $a['pepe']+1;
echo "\n"; 
foreach ($a as $e) {
    echo ($e +1)."\n";
} */
    

/* $a['pepe'] = 10;
$a['rosa'] = 20;
$a[10] = 30;

print_r($a); //Leer por consola la estructura del array */


/* //Sacamos "la etiqueta de identificación de cada array"
$a['pepe'] = 10;
$a['rosa'] = 20;
$a[10] = 30;

foreach (array_keys($a) as $e) {
    echo $e."\n";
} */


/* //Array asociativo
$a['pepe'] = 10;
$a['rosa'] = 20;
$a[10] = 30;

foreach ($a as $k => $v) {
    echo "[$k] $v ";
} */

/* 
$a['pepe'] = 10;
$a['rosa'] = 20;
echo $a['pepe']+1;
echo "\n";
echo $a['rosa']+1; */

/* //Los colores repetidos no aparecen aunque tengan otra etiqueta identificativa
$colorFavorito = []; //Array vacio
$colorFavorito['pepe'] ='rojo';
$colorFavorito['ana'] ='azul';
$colorFavorito['laura'] ='rojo';
$colorFavorito['laura'] ='verde';

foreach ($colorFavorito as $color) {
    echo "Color: $color\n";
} */


/* $colorFavorito = []; //Array vacio
$colorFavorito['pepe'] ='rojo';
$colorFavorito['ana'] ='azul';
$colorFavorito['laura'] ='rojo';
$colorFavorito['laura'] ='verde';

//A cada persona se le asocia un color. Colores repetidos no aparecen
foreach ($colorFavorito as $persona => $color) {
    echo "Color: $color\n";
} */


/* $colorFavorito = []; //Array vacio
$colorFavorito['pepe'] ='rojo';
$colorFavorito['ana'] ='azul';
$colorFavorito['laura'] ='rojo';
$colorFavorito['laura'] ='verde';

//Aparece la persona a la que pertenece cada color, pero los colores repetidos no
foreach ($colorFavorito as $color) {
    echo "[$persona]Color: $color\n";
}
 */

//==============================
/* $colorFavorito = ['pepe' =>'rojo', 'ana' => 'azul', 'pepa' => 'verde'];

foreach ($colorFavorito as $persona => $color) {
    echo "[$persona]Color: $color\n";
} */


/* $pila = ['uno', 'dos', 'tres'];

foreach ($pila as $e) {
    echo "$e\n";
} */


/* //Añade un elemento al final del array
$pila = ['uno', 'dos', 'tres'];
$pila[sizeof($pila)] = 'cuatro';

foreach ($pila as $e) {
    echo "$e\n";
}  */


/* //Añade un elemento al final del array
$pila = ['uno', 'dos', 'tres'];
$pila[array_push($pila)] = 'cuatro';

foreach ($pila as $e) {
    echo "$e\n";
}   */

//====================
/* $pila = ['uno', 'dos', 'tres'];
$pila[] = 'cuatro';
foreach ($pila as $e) {
    echo "$e\n";
} */
    
    
/* $pila = ['uno', 'dos', 'tres'];
$pila[] = 'cuatro';
$pila[] = 'cinco';
$pila[] = 'seis';

print_r($pila); //Imprime el array tal cual, con su identificador y su valor 
//Saca el ultimo elemento de array fuera 
echo array_pop($pila);
 */


/* $cola = ['uno', 'dos', 'tres'];
//Añade el elemento al principio del array
array_unshift($cola, 'cuatro');

print_r($cola); */


/* //Rellena el array vacio
$cola = [];
array_unshift($cola, 'uno');
array_unshift($cola, 'dos');
array_unshift($cola, 'tres');

print_r($cola); */


/* //Te dice si el elemento que le pones, esta en el array o no
$a = [10,30,100];
echo in_array(7, $a)?"SI":"NO";
 */

/* //SINO, por que una se cumple y la otra no
$a = ['a'=>10, 'b'=>30,'c'=>100];

//SI
echo in_array(30, $a)?"SI":"NO";
//NO
echo in_array('y', array_keys($a))?"SI":"NO"; */


/* $edad = 19;
$edad >= 18 ? print "Mayor" : "Menor";  */


/* $edad = [19,['a'=>10, 'b'=>20]];
print_r($edad);
echo $edad[1]['b'];

//Ejemplo
Array
(
    [0] => 19
    [1] => Array
    (
        [a] => 10
        [b] => 20
        )
    
    )
    20 */


/* $edad = [19,['a'=>10, 'b'=>20]];
echo "Mi nombre es $edad[0] HOLA"; */


/* $edad = [
    19,
    [
        'a' => 10,
        'b' => 'pepe'        
    ]  
 ];
echo "Mi nombre es {$edad[1]['b']} HOLA"; */


/*//Pone el nombre de ana, tal cual, en minusculas 
  $edad = [
 19,
    [
 'a' => 10,
 'b' => 'pepe'
    ]
 ];
 
 $b = 'ana';
 echo "Mi nombre es $b HOLA"; */
 

/* $edad = [
    19,
    [
        'a' => 10,
        'b' => 'pepe'
    ]
];

$b = 'ana';
echo "Mi nombre es {$b} HOLA"; //Poniendo las llaves, te encribe en mayuscula la primera letra */ 


/* $pueblo = 'La Mancha';
$texto = <<<PEPE
En un lugar de $pueblo 
de cuyo nombre          no quiro acordarme 
asdos
asdosdos
PEPE;

echo $texto; */


/* //Quita 4 caracteres por delante
$c = "0123456789";
echo substr($c, 4); */


/* //Cuenta 4 elementos desde atrás, y quita todo lo anterior 
$c = "0123456789";
echo substr($c, -4); */

/* //Quita 4 elementos por alante y 2 por atrás 
$c = "0123456789";
echo substr($c, 4, -2); */


/* $c = "0123456789";
echo substr($c, -4, -2); */



/* //Pone el = y deja un espacio despues, hasta escribir la cadena
$cadena ='     abcde.fgh           ';

echo '='.rtrim($cadena).'='; */


/* //No deja espacios entre nada 
$cadena ='     abcde.fgh           ';

echo '='.trim($cadena).'='; */


/* $cadena =':::::::::abcde.fgh:::::::::;;;::::::::';
echo '='.trim(trim($cadena, ':'),';').'='; */


/* $cadena = 'aaaxxxbccd';
echo "=".trim($cadena,'a..c').'='; */


/* $a = [];
$a[] = 'uno';
$a[] = 'dos';
$a[] = 'tres';

print_r($a);
echo array_pop($a); //Saca el ultimo elemento de la lista 
 */
//===========================

/* $a = ['uno', 'dos', 'tres'];
print_r($a);
echo array_pop($a)."\n"; */


/* //Añade el 4 al array por detrás, y luego lo muestra fuera 
$a = ['uno', 'dos', 'tres'];
$a[] = 'cuatro';
print_r($a);
echo array_pop($a)."\n";
print_r($a);

//Añade el elemento cero al array por delante 
array_unshift($a, 'cero');
print_r($a); 

//Añade el elemento 4 por detrás de la lista y saca los elementos en orden
print_r($a);
echo array_shift($a)."\n";
echo array_shift($a)."\n";
echo array_shift($a)."\n";
echo array_shift($a)."\n";
 */


/* $a = ['uno', 'dos', 'tres'];
$a[] = 'cuatro';
//Añade el elemento al array por detrás 
print_r($a); 
//Saca los elementos de la lista en orden
echo array_shift($a)."\n";
echo array_shift($a)."\n";
echo array_shift($a)."\n";

print_r($a); */


/* echo "INICIO\n";
//ZONA PELIGROSA
ini_set('display_errors', 0); //hay errores pero no se muestran
//E_NOTICE
echo $x;
//E_WARNING
include noexixte.php;
 */

/* //Hay 3 ficheros "otro.php", "dos.php", uno.php
//--"otro.php"                              --"dos.php"
echo "CERO";                                function f() {
                                            echo "Haciendo f()";
                                            }
echo PHP_EOL;
//INCLUDE: incuye 
include 'uno.php';                          echo "PRIMERO";
echo PHP_EOL;

include 'dos.php';
echo PHP_EOL;

f(); */



 ?>