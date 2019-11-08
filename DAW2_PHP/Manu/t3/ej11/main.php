<?php 
session_start();
?>
<h3>Siete y media</h3>
<h4>Jugada</h4>


<?php 



$oculto="";
if(isset($_SESSION['cartas']['carta'])){
    
    ///////////     JUGADOR      /////////////
    
    echo "<ul>";
    $_SESSION['puntuacion']=0;
    
    for($i=0;$i<sizeof($_SESSION['cartas']['carta']);$i++){
        $_SESSION['puntuacion']+=$_SESSION['cartas']['puntos'][$i];
        echo "<li>{$_SESSION['cartas']['carta'][$i]} (total: {$_SESSION['puntuacion']})</li>";
        
        
    }    
    
    echo "</ul>";
    
    
   ////////        BANCA       ////////////
    
    if (isset($_SESSION['banca']['carta'])){
        
        echo "<h4>Jugada de la banca</h4";
        echo "<ul>";            
        $_SESSION['puntuacionBanca']=0;
        
        for($i=0;$i<sizeof($_SESSION['banca']['carta']);$i++){
            
            $_SESSION['puntuacionBanca']+=$_SESSION['banca']['puntos'][$i];
            
            echo "<li>{$_SESSION['banca']['carta'][$i]} (total: {$_SESSION['puntuacionBanca']})</li>";
   
        } 
        
        if($_SESSION['puntuacionBanca']>7.5){
            
            echo "<h4>¡¡Has GANADO!!</h4>";
            $oculto="hidden=\"hidden\"";
            
        } else if ($_SESSION['puntuacion']==$_SESSION['puntuacionBanca']){
            
            echo "<h4>¡¡Has perdido!!</h4>";
            $oculto="hidden=\"hidden\"";
            
        }else if ($_SESSION['puntuacion']<$_SESSION['puntuacionBanca']) {
            
            echo "<h4>¡¡Has perdido!!</h4>";
            $oculto="hidden=\"hidden\"";
        }
        
        echo "</ul>";
        
        
    } else {
        
        if($_SESSION['puntuacion']>7.5){
            
            echo "<h4>¡¡Has perdido!!</h4>";
            $oculto="hidden=\"hidden\"";
            
        } else if ($_SESSION['puntuacion']==7.5){
            
            echo "<h4>¡¡Has GANADO!!</h4>";
            $oculto="hidden=\"hidden\"";
        }
    }
    
    
    
}else{
    
    echo "(no se ha jugado ninguna carta todavía)";
    
}
/*
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
*/
?>

<br>
<a href="mainPost.php"><button <?=$oculto ?>>Sacar carta</button></a>
<a href="banca.php"><button <?=$oculto ?>>Plantarse</button></a>
<br>
<a href="volverJugar.php"><button>Volver a jugar</button></a>






