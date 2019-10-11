<?php
$bd = [
    [
        'nombre' => 'dani',
        'pwd' => '123'
    ],
    [
        'nombre' => 'ana',
        'pwd' => 'yy'
    ]
];

function credencialesOK($n,$p) {
    $sol = false;
    global $bd;
    foreach ($bd as $usuario) {
        $sol = $sol || ($usuario['nombre']==$n && $usuario['pwd']==$p) ;
    }
    return $sol;
}

$nombre = isset($_POST['nombre'])?$_POST['nombre']:null;
$pwd= isset($_POST['pwd'])?$_POST['pwd']:null;

if ($nombre!= null && $pwd!=null && credencialesOK($nombre,$pwd)) {
    session_start();
    $_SESSION['nombre'] = $nombre;
    $_SESSION['estado'] = true;
    header('Location:home.php');
}
else {
    header('Location:loginError.php');
    
}
?>