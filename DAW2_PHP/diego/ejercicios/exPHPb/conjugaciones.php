<h2>Lista de verbos</h2>
<table border="1">
<tr>
	<th>Infinitivo</th>
	<th>Conjugacion</th>
	<th>Presente de indicativo</th>
</tr>
<?php 
    session_start();
    require_once "helper.php";
    
    
    foreach($_SESSION['verbos'] as $verbo){
         
        echo "<tr>";
        echo "<td>$verbo</td>";
        
        if(substr($verbo,-2)=='ar'){
          
          echo "<td>1</td>"; 
            
        }elseif(substr($verbo,-2)=='er'){
            
            echo "<td>2</td>"; 
           
        }elseif(substr($verbo,-2)=='ir'){
            
            echo "<td>3</td>"; 
           
        }
        
        echo "<td>".conjugar($verbo)."</td>";
        echo "<tr>";
        
    }
?>
</table>