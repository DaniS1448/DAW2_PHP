<?php
if ($_GET['elim']):?>
<h3>Empleado eliminado</h3>
<a href="menuCrud.php"><button>Volver</button></a>

<?php else:?>

<h3>Error</h3>
<a href="menuCrud.php"><button>Volver</button></a>

<?php endif;?>