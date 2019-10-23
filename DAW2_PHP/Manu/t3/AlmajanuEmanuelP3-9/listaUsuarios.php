<?php
session_start();

if (!isset($_SESSION['usuarios'][$_SESSION['_activo']]['mensajes'])){
    $_SESSION['usuarios'][$_SESSION['_activo']]['mensajes']=[];
}

echo "Usuario actual ".$_SESSION['_activo'];
echo "<h3>Lista de usuarios / mensajes</h3>";
echo "<table>";

foreach($_SESSION['usuarios'] as $e=>$a){
   
    if ($_SESSION['_activo']!=$e){
        $cont=0;
        foreach ($_SESSION['usuarios'][$_SESSION['_activo']]['mensajes'] as $j=>$k){
            
            if ($k['remitente']==$e){
                $cont++;
            }
            
        }
        echo "<tr><td>$e</td><td>($cont)</td><td>";
       
        if ($cont>0){
            echo "<a href=\"leer.php?remitente=$e\">Leer</a>";
        }
        
        echo "</td> <td><a href=\"escribir.php?destinatario=$e\">Escribir</a><br></td></tr>";
           
    }
   
}
echo "</table>";

?>
<br>
<a href="login.php">Volver al login</a>