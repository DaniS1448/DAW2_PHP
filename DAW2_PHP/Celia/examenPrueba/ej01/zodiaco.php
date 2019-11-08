<?php
mb_internal_encoding ( "UTF-8" );
header('Content-Type: text/html; charset=UTF-8');
echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
?>

<?php 

$zodiaco=['capricornio','acuario','piscis','aries','tauro','geminis','cancer','leo','virgo','libra','escorpio','sagitario'];
$meses=['enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre'];


$inferior=$_GET["inferior"];
$superior=$_GET["superior"];




echo "<form action='numerosPost.php'>";
echo"<fieldset>";
echo "<legend>Signos del zodiaco</legend>";


for( $i=$inferior; $i <=$superior ; $i ++) {
    echo "<input type=\"radio\" name=\"signos\" value=\"{$zodiaco[$i-1]}\"";
    echo $i==$inferior? " checked=\"checked\"" : '';
    echo "/> {$zodiaco[$i-1]} <br/> \n";   }
    echo"</fieldset>";

    
    
    echo"<fieldset>";
echo "<legend>Meses del año</legend>"; 
echo"<select name=\"mes\">";
for( $i=$inferior; $i <=$superior ; $i ++) {
    echo "<option value=\"{$meses[$i-1]}\">{$meses[$i-1]}";
    echo $i==1? " select=\"select\"" : '';
    echo "</option> ";   }

    
   echo "</select>"; 
echo"</fieldset>";
echo"<input type='submit'/>";
    echo"</form>";


?>