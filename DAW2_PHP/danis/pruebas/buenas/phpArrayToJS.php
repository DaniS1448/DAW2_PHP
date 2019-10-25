<?php

$BDetiquetas = [
    "es" => [
        "Palabra",
        "Traducción",
        "Enviar"
    ],
    "gb" => [
        "Word",
        "Translation",
        "Send"
    ],
    "fr" => [
        "Mot",
        "Traduction",
        "Envoyer"
    ]
];

//echo json_encode($BDetiquetas);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<script>
	var etiquetas = JSON.parse( '<?php echo json_encode($BDetiquetas) ?>' );
	alert(etiquetas['es'][0]);
	</script>
</head>
<body>
	
</body>
</html>