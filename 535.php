<?php
include 'config.php';
if (isset($_GET['zapis'])){
	$zapis=$_GET['zapis'];
}

$p6='SELECT * FROM condit, concons, conprod WHERE condit.id='.$zapis.' AND conprod.idconprod=condit.proisvoditel AND concons.idconcons=condit.constructia';
$cpo=$db->query($p6);
$cpro=mysqli_fetch_assoc($cpo);
if (file_exists("cond/".$cpro['name'].".jpeg")){
		$path="https://condicam.ru/cond/".$cpro['name'].".jpeg";
	}
	else{
		$path="https://condicam.ru/kot.jpg";
	}
$cpro['path']=$path;
echo(json_encode($cpro));
mysqli_close($db);
?>
