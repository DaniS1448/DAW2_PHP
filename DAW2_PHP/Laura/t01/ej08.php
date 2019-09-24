<?php
echo "Introduce día: ";
fscanf(STDIN,"%d\n",$dia);

echo "Introduce mes: ";
fscanf(STDIN,"%d\n",$mes);

echo "Introduce año: ";
fscanf(STDIN,"%d\n",$anyo);

//$sTrans = time() - mktime(0,0,0,$mes,$dia,$anyo);
$sTrans = time() - strtotime("$dia-$mes-$anyo");

//segundos 
const sPm = 60;			// 60
const sPh = 3600; 		// 60 x 60
const sPd = 86400; 		// 3600 x 24
const sPmes = 2592000;	// 86400 x 30
const sPa = 31536000;	// 86400 x 365

$anyoTrans = (int)($sTrans / sPa);
$sRest = $sTrans % sPa;

$mesTrans = (int)($sRest / sPmes);
$sRest = $sRest % sPmes;

$diasTrans = (int)($sRest / sPd);
$sRest = $sRest % sPd;

$horasTrans = (int)($sRest / sPh);
$sRest = $sRest % sPh;

$minutosTrans = (int)($sRest / sPm);
$sRest = $sRest % sPm;

echo "Han transcurrido desde el $dia/$mes/$anyo.
$anyoTrans años, $mesTrans meses, $diasTrans días, $horasTrans horas, $minutosTrans minutos y $sRest segundos
		";

?>