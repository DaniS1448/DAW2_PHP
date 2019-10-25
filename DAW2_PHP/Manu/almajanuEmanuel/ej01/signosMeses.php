<?php
mb_internal_encoding ( "UTF-8" );  //Copiar y pegar estas tres lineas para evitar problemas con las tildes y ñ . Tambien mirar en Project>Properties>Text file encoding que este en UTF-8
header('Content-Type: text/html; charset=UTF-8');
echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />'; 

$cotaInf=isset($_POST['cotaInf'])?$_POST['cotaInf']:"";
$cotaSup=isset($_POST['cotaSup'])?$_POST['cotaSup']:"";

$arraySignos=["Capricornio", "Acuario", "Piscis", "Aries", "Tauro", "Géminis", "Cáncer", "Leo", "Virgo", "Libra", "Escorpio", "Sagitario"];
$arrayMeses=["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

if (($cotaInf>=1 && $cotaInf<=12)&&($cotaSup>=1 && $cotaSup<=12)){ //Comprueba que me ha metido numeros entre 1 y 12, sino le salta un error
    
    echo "<form action=\"mostrar.php\" method=\"get\">";
    
    //===================================================//    Me crea los radio buttons 
    
    echo "<fieldset><legend>Signos del zodiaco</legend>"; 
    $check=$cotaInf; //Guardo el valor que me pasa de cotaInf
    for($cotaInf;$cotaInf<=$cotaSup;$cotaInf++){
        $countArray=$cotaInf-1;
        $seleccionado=$check==$cotaInf?"checked=\"checked\"":""; //Comparo el valor de check(que es igual a cotaInf) con el de cotaInf, la primera vez sera igual ya que despues el valor de cotaInf cambia en el for, asi que solo le pondra checked="cheked" al primer radio creado
        echo "<input type=\"radio\" name=\"signo\" value=\"$arraySignos[$countArray]\" $seleccionado/>$arraySignos[$countArray]<br>";         
    }
    
    echo "</fieldset>";
    
    //==================================================// Me crea el select
    
    $cotaInf=$_POST['cotaInf']; //Vuelvo a guardar en $cotaInf el valor que me pasaron porque lo modifique en el 'for' anterior y ha cambiado su valor.
   
    echo "<fieldset><legend>Meses del año</legend>";
    echo "<select name=\"mes\">";
    
    for($cotaInf;$cotaInf<=$cotaSup;$cotaInf++){
        $countArray=$cotaInf-1;
        echo "<option value=\"$arrayMeses[$countArray]\">$arrayMeses[$countArray]</option>";
    }
    
    echo "</select>";
    echo "</fieldset>";
    
    //==================================================//
    
    echo "<input type=\"submit\" value=\"Continuar\" />";
    echo "</form>";    
    
}else{
    
    echo "<h1>Los numeros de las cotas tienen que estar entre 1 y 12</h1>";
    echo "<a href=\"numeros.php\">Volver</a>";
    
}