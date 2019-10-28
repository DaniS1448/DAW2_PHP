<?php
session_start();
require_once 'bd.php';

$usuario=isset($_POST['usuario'])?$_POST['usuario']:null;
$contra=isset($_POST['pass'])?$_POST['pass']:null;

if ($usuario!=null && $contra!=null){   //COMPRUEBO QUE HA ESCRITO ALGO EN LOS CAMPOS DE USUARIO Y CONTRASEÑA
 
    if ((in_array($usuario,array_keys($_SESSION['usuarios']))) && ($_SESSION['usuarios'][$usuario]['pwd']==$contra)){  //COMPRUEBA SI ESTA EN EL ARRAY $_SESSION
       
       header("location:jugar.php");   //SI ESTA EN EL ARRAY ME LLEVA A LA PAGINA DE JUGAR
        
    }else{  //SI NO ESTA EN EL ARRAY ES QUE ES UN USUARIO INCORRECTO
        
        if ($_POST['lang']=='ES'){  //COMPRUEBO QUE RADIO ESTA SELECCIONADO PARA MOSTRAR EL MENSAJE EN ESPAÑOL O INGLES
            
            echo "<h1>{$bd['ES']['usuarioError']}</h1>";  //Accedo a la bd y saco el texto que contiene esa posicion del array, se podria omitir
            echo "<a href=\"index.php\"><button>Volver</button></a>";   //y escribir el texto a mano como abajo
            
        } else {
            
            echo "<h1>{$bd['EN']['usuarioError']}</h1>";
            echo "<a href=\"index.php\"><button>Back</button></a>";
        }
    }    
    
}else{  //SI ME DEJA ALGUN CAMPO VACIO SE LO INFORMO EN ESPAÑOL O INGLES, DEPENDIENDO DE QUE RADIO ESTE SELECCIONADO
    
    if ($_POST['lang']=='ES'){
        
        echo "<h1>Hay que introducir nombre y contraseña</h1>";
        echo "<a href=\"index.php\"><button>Volver</button></a>";
        
    } else {
        
        echo "<h1>You have to insert name and password</h1>";
        echo "<a href=\"index.php\"><button>Back</button></a>";
        
    }
   
}

?>
