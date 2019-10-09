<?php
mb_internal_encoding ( "UTF-8" );
header ( 'Content-Type: text/html; charset=UTF-8' );
?>
<?php 
    function crearASCII(){
        $cod="";
        for ($i = 0; $i <= 255; $i++) {
            $cod .= "<tr>";
            $cod .= "<td>".$i."</td>";
            $cod .= "<td>".chr($i)."</td>";
            $cod .= "<td>".urlencode(chr($i))."</td>";
            $cod .= "</tr>";
        }
        return $cod;
    }
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!-- <meta charset="UTF-8"/>-->
</head>
<body>

<table border="2">
	<tr>
		<th>#</th>
		<th>Carácter</th>
		<th>Cod. URL</th>
	</tr>
	<?php echo crearASCII();?>
	
</table>
</body>