<?php
require_once 'bd.php';

$usuario = isset($_POST['lastUser'])?$_POST['lastUser']:'';
$pais = isset($_POST['lastLang'])?$_POST['lastLang']:'es';

?>

<head>
<script type="text/javascript">

	function activarFormulario(){
		var arrayEtiquetas = JSON.parse( '<?php echo json_encode($textoLogin) ?>' );

	    var pais = document.querySelector('input[name="pais"]:checked').value;

	    var arrayCadena = arrayEtiquetas[pais];
		var contador = 0;
		for (texto of arrayCadena){
			document.getElementById("p"+(contador+1)).innerHTML=texto;
			contador++;
		}
	}

</script>

</head>
<body>
    <form method="post" action="login.php" id="miFormulario"></form>
    
    <label for="paisES"><img src="banderas/es.png" width="27px" height="18px"></label>
    <input form="miFormulario" type="radio" name="pais" id="paisES" value="es" <?= $pais=='es'?'checked="checked"':'' ?> onclick="activarFormulario()"/>
    
    <label for="paisGB"><img src="banderas/gb.png" width="27px" height="18px"></label>
    <input form="miFormulario" type="radio" name="pais" id="paisGB" value="gb" <?= $pais=='gb'?'checked="checked"':'' ?> onclick="activarFormulario()"/>
    
    <hr/>
    
    <table>
    <tr>
    <td><b id="p1"><?= $textoLogin[$pais][0] ?></b></td> <td><input form="miFormulario" type="text" name="inUser" required="required" value="<?= $usuario ?>" /></td>
    </tr>
    <tr>
    <td><b id="p2"><?= $textoLogin[$pais][1] ?></b></td> <td><input form="miFormulario" type="text" name="inPass" required="required"/></td>
    </tr>
    <tr>
    <td><button form="miFormulario" type="submit" id="p3" style="width:100%"><?= $textoLogin[$pais][2] ?></button></td>
    </tr>
    
    </table>
</body>