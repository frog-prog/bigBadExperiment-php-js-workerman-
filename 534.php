<?php
include 'config.php';
if (isset($_GET['zapis'])){
	$zapis=$_GET['zapis'];
}

$p6='SELECT * FROM vc, cons, camprod WHERE vc.id='.$zapis.' AND camprod.produserid=vc.produser AND cons.cid=vc.construct';
$cpo=$db->query($p6);
$cpro=mysqli_fetch_assoc($cpo);
if (file_exists("cam/".$cpro['name'].".jpeg")){
		$path="https://condicam.ru/cam/".$cpro['name'].".jpeg";
	}
	else{
		$path="https://condicam.ru/kot.jpg";
	}

$cpro['path']=$path;
$cpro=json_encode($cpro);
echo($cpro);
mysqli_close($db);
?>
