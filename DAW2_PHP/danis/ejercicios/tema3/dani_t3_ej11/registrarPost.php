<?php
require_once 'util.php';
$errorExisteUsuario="Error, el usuario ya existe!";
$usuarioCreadoCorrectamente=<<<HTML
    Usuario creado correctamente!
HTML;

$esAjax = isset(
    $_SERVER['HTTP_X_REQUESTED_WITH']) ?
    strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest' :
    false;
if ($esAjax) {    
    
    
    $user = isset($_POST['user'])?$_POST['user']:null;
    $password = isset($_POST['password'])?$_POST['password']:null;
    $name = isset($_POST['name'])?$_POST['name']:null;
    
    if ($user != null && $password != null && $name != null) {
        $user = trim($user);
        $password = trim($password);
        $name = trim($name);
        
//         echo <<<HTML

//         user: $user<br>
//         password: $password<br>
//         nombre: $name<br>
// HTML;

        if (empty($user) || empty($password)  || empty($name) ) {
            echo "Debes rellenar los 3 campos";
        } else {
                        
            $db = conectarMySQL();
            $consulta = "select id from users where user = :user";
            $sentencia = $db->prepare($consulta);
            $sentencia->bindParam ( ':user', $user);
            $sentencia -> execute();
            $resultado = $sentencia->fetchAll();
            
            $existeUsuario = false;
            
            foreach ($resultado as $elemento){
                if (isset($elemento['id']) && $elemento['id'] != [] ) {
                    $existeUsuario = true;
                }
            }
            
            if ($existeUsuario) {
                echo $errorExisteUsuario;
            } else { //no existe usuario, se procede a registrar el usuario
                
                $consulta = "insert into users(user, password, name, points, lastconexion, vidas) values (:user, :password, :name, :points, :lastconexion, :vidas)";
                $resultado = $db->prepare($consulta);
                $resultado->execute([':user'=>$user,':password'=>password_hash($password, PASSWORD_DEFAULT),':name'=>$name,':points'=>0,':lastconexion'=>date("Y-m-d"), 'vidas'=>VIDASDIARIAS]);
                echo $usuarioCreadoCorrectamente;
            }
            
        }
        
    } else {
        echo "Debes rellenar los 3 campos";
    }
    
    
}
else {
    echo "SOLO EJECUCIONES AJAX";
}

?>