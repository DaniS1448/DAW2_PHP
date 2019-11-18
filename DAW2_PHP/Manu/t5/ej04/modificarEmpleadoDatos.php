<?php
if ($_GET['mod']):?>
<h3>Empleado modificado</h3>
<a href="menuCrud.php"><button>Volver</button></a>

<?php else:?>

<h3>Error</h3>
<a href="menuCrud.php"><button>Volver</button></a>

<?php endif;?>