<?php
mb_internal_encoding ("UTF-8");
header('Content-Type: text/html; charset=utf-8');
echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />';
?>
<head>
	<meta charset="utf-8">
	<title>Ej01 - Emanuel</title>
</head>
<body>
Introduce dos n&uacute;meros entre el 1 y el 12
<br>
<form action="signosMeses.php" method="post">
Cota inferior<input type="text" name="cotaInf" />
<br>
Cota superior<input type="text" name="cotaSup" />
<br>
<input type="submit" value="Continuar"/>
</form>
</body>
