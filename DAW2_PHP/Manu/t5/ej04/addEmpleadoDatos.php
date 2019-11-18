<?php
if($_GET['add']){    
    echo "<h3>Empleado insertado</h3>";
    echo "<a href=\"menuCrud.php\"><button>Volver</button></a>";
}else{
    echo "<h3>Error</h3>";
    echo "<a href=\"menuCrud.php\"><button>Volver</button></a>";
}