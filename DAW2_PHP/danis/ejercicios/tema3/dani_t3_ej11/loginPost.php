<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $user = isset($_POST['user'])?$_POST['user']:null;
    $password = isset($_POST['password'])?$_POST['password']:null;
    
    if ($user != null && $password != null) {
        $user = trim($user);
        $password = trim($password);
        
        if (empty($user) || empty($password)) {
            echo 'Error, debes llenar los dos campos<br><br><a href="login.php"><button><b>Volver</b></button></a>';
            header( "refresh:3; url=login.php" );
        } else {
            require_once 'util.php';
            
            $db = conectarMySQL();
            $consulta = "select password from users where user = :user";
            $sentencia = $db->prepare($consulta);
            $sentencia->bindParam ( ':user', strtolower($user));
            $sentencia -> execute();
            $resultado = $sentencia->fetchAll();
            
            $credencialesOK = false;
            
            foreach ($resultado as $elemento){
                if (password_verify($password, $elemento['password'])) {
                    $credencialesOK = true;
                }
            }
            
            if ($credencialesOK) {
                
                $_SESSION['activo']=true;
                $_SESSION['usuario']=$user;
                
                header('Location: inicializar.php');
            } else {
                $_SESSION['activo']=false;
                $_SESSION['usuario']='';
                echo 'Error, usuario o contraseña no son correctos<br><br><a href="login.php"><button><b>Volver</b></button></a>';
                header( "refresh:3; url=login.php" );
            }
        }
    }
}
?>