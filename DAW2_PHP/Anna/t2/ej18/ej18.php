<?php include 'utilHTML.php';
if(isset($_REQUEST['numeros'])){
    $num=$_REQUEST['numeros'];
    $suma=$_REQUEST['numeros']+2;
    echo "Resultado final </br> <b>$num + 2 = $suma</b>";
}
else if(isset($_REQUEST['numero'])){
    echo pintarRadio('numeros',$_REQUEST['numero']);}
    else{
        echo preguntarNumero();
    }
//print_r($arrayValueLabel);

?>


