<?php 
// Se declara una variable para cada campo del formulario y se inicializa a vacío
$nombre = '';
$clave = '';
$oculto = '';
$semaforo = '';
$publicidad = '';
$idiomas = '';
$anioFinEstudios = '';
$codigosPostales = '';
$comentarios = '';
$archivo = '';
$imagenX = '';
$imagenY = '';
// Se captura cada campo proviniente del formulario, comprobando que contenga datos
// se recibe el nombre
if (isset ( $_REQUEST ['txtNombre'] )) {
	$nombre = $_REQUEST ['txtNombre'];
} // se recibe la contraseña
/* RELLENAR */
if (isset ( $_REQUEST ['pswClave'] )) {
    $clave = $_REQUEST ['pswClave'];
}
// se recibe el campo oculto
if (isset ( $_REQUEST ['hdnOculto'] )) {
	$oculto = $_REQUEST ['hdnOculto'];
} // se recibe el valor seleccionado del botón de radio

if (isset ( $_REQUEST ['rdSemaforo'] )) {
	$semaforo = $_REQUEST ['rdSemaforo'];
} // se recibe elcheckbox de publicidad

/* RELLENAR */
if (isset ( $_REQUEST ['publicidad'] )) {
    $publicidad = $_REQUEST ['publicidad'];
}
// se recibe el checkbox múltiple de idiomas y se trata como un array

if (isset ( $_REQUEST ['cbIdioma'] )) {
	$tamanioSelectIdiomas = sizeof ( $_REQUEST ['cbIdioma'] );
	for($i = 0; $i < $tamanioSelectIdiomas; $i ++) { // se recorre el array de checkboxes
		
		if (isset ( $_REQUEST ['cbIdioma'] [$i] )) { // se comprueba, para cada elemento, si está seleccionado
			$idiomas .= $_REQUEST ['cbIdioma'] [$i] . ' ';
		}
	}
}
// se recibe el año de fin de estudios
/* RELLENAR */
if (isset ( $_REQUEST ['anio'] )) {
    $anioFinEstudios = $_REQUEST ['anio'];
}
// se recibe el select múltiple de ciudades (códigos postales), que se trata como un array
/* RELLENAR */
if (isset ( $_REQUEST ['selCodigosPostales'] )) {
    $tamanioCod = sizeof ( $_REQUEST ['selCodigosPostales'] );
    for($i = 0; $i < $tamanioCod; $i ++) { 
                   $codigosPostales .= $_REQUEST ['selCodigosPostales'] [$i] . ' ';
        }
}

// se recibe el contenido del textarea
if (! empty ( $_REQUEST ['txaComentarios'] )) {
    $comentarios = $_REQUEST ['txaComentarios'];
} // se recibe el nombre del archivo
if (! empty ( $_REQUEST ['flArchivo'] )) {
    $archivo = $_REQUEST ['flArchivo'];
} // se recibe la coordenada X del punto
if (isset ( $_REQUEST ['flecha_x'] )) {
    $imagenX = $_REQUEST ['flecha_x'];
} // se recibe la coordenada Y del punto
if (isset ( $_REQUEST ['flecha_y'] )) {
    $imagenY = $_REQUEST ['flecha_y'];
}
/* RELLENAR */
?>
<html>
<body>  Nombre: 
<?php echo $nombre; ?> 
<br />Clave: 
<?php echo $clave; ?> 
<br />Oculto: 
<?php echo $oculto; ?> 
<br />Semaforo: 
<?php echo $semaforo; ?> 
<br />Publicidad: 
<?php echo $publicidad; ?> 
<br />Idiomas: 
<?php echo $idiomas; ?> 
<br />Año de fin de estudios: 
<?php echo $anioFinEstudios; ?> 
<br />Códigos postales de provincias: 
<?php echo $codigosPostales; ?> 
<br />Comentarios: 
<?php echo $comentarios; ?> 
<br />Archivo: 
<?php echo $archivo; ?> 
<br />Imagen: (
<?php echo $imagenX; ?>
, 
<?php echo $imagenY; ?>
) 
<br />
</body>
</html>	