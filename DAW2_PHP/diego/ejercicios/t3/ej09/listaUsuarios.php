<?php
session_start();


function listarUsuarios() {
    foreach ($_SESSION['usuarios'] as $user){
        //echo " ".$user[0]." es ".$_SESSION['usuario']."\n";
        if ($user[0] != $_SESSION['usuario'] && $user[0] != ""){
            
            echo "<table>
                <tr>
                <td>".$user[0]."</td>"
              ."<td><a href='leer.php?remitente=".$user[0]."'>Leer</a></td>"
              ."<td><a href='escribir.php?destinatario=".$user[0]."'>Escribir</a></td>"
              ."</tr>"
                ."</table>";
        }
    }
}


echo "Usuario actual <b>".$_SESSION['usuario']."</b>";
echo "<h3>Lista de Usuarios/Mensajes</h3>";

listarUsuarios();

echo "<br/><a href='login.php'>Volver al Login</a>";


// $usuario = $_SESSION["usuarios"];

// if ($usuario == ''){
//     echo "Hola desconocido.<br/>";
//     echo "ID ".session_id()."<br/>";
// } else {
//     echo "Hola ".$usuario. " <br/>";
// }





// echo "Lista de usuarios:<br/>";
// print_r($_SESSION['usuarios']);
// para saber los usuarios guardados


?> 