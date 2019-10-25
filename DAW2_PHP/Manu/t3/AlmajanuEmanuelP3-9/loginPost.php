<?php
session_start();

if (!isset($_SESSION['usuarios'])){
    $_SESSION['usuarios']=[];
}

function comprobarUsuario(){

    $usuarioExiste=false;
    
    if (isset($_POST['usuario']) && isset($_POST['clave'])){
    
        if ((in_array($_POST['usuario'],array_keys($_SESSION['usuarios']))) && ($_SESSION['usuarios'][$_POST['usuario']]['pwd']==$_POST['clave'])){
          $usuarioExiste=true;
         }
    }
    
    return $usuarioExiste;
}

if (comprobarUsuario()){        
    
          if ($_POST['recordar']=='on'){
               $_SESSION['_recordar']=true;
           }else {
               $_SESSION['_recordar']=false;
           }
    
        $_SESSION['_activo']=$_POST['usuario'];    
       header("Location: listaUsuarios.php");        
        
} else {
    
        echo "<h3>DATOS INCORRECTOS</h3>";
        echo "Volviendo al login en 3 segundos...";
        
        if (isset($_POST['recordar'])){
        header("refresh:3;url=login.php");
        } else {
            header("refresh:3;url=login.php");
        }
        
}

?>