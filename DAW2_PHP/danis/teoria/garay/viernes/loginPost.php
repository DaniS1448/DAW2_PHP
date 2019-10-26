<?php
$bd = [
    [
        'nombre' => 'pepe',
        'pwd' => 'xx'
    ],
    [
        'nombre' => 'ana',
        'pwd' => 'yy'
    ]
];

function credencialesOK($n,$p) {
    global $bd;
    return in_array( [ 'nombre' => $n, 'pwd'=>$p] , $bd);
}

$nombre = isset($_POST['nombre'])?$_POST['nombre']:null;
$pwd= isset($_POST['pwd'])?$_POST['pwd']:null;

if ($nombre!= null && $pwd!=null && credencialesOK($nombre,$pwd)) {
    session_start();
    $_SESSION['nombre'] = $nombre;
    header('Location:uno.php');
}
else {
    header('Location:errorLogin.php');
    
}
?>