<?php
include 'grani.php';
include 'config.php';
$qs='SELECT count(*) FROM (SELECT * FROM condit, conprod, concons WHERE condit.id IN (SELECT condit.id FROM condit, conprod, concons WHERE (cena BETWEEN '.$minpriceconqr[0]. ' AND '.$maxpriceconqr[0].') AND (moshnost BETWEEN '.$minmoshqr[0].' AND '.$maxmoshqr[0].') AND (ploshad BETWEEN '.$minploshadconqr[0].'  AND '.$maxploshadconqr[0].')) AND conprod.idconprod=condit.proisvoditel AND concons.idconcons=condit.constructia GROUP BY condit.id) AS cv';

$cpo=$db->query($qs);
$cpro=mysqli_fetch_array($cpo);

$page=$_POST['page'];
$nulzap=($page-1)*15;
$colz=$cpro[0];
$number_pages = (int)($colz/15);

		if(($colz%15) != 0) {
			$number_pages++;
		}
	$p12='SELECT * FROM condit, conprod, concons WHERE condit.id IN (SELECT condit.id FROM condit, conprod, concons WHERE (cena BETWEEN '.$minpriceconqr[0]. ' AND '.$maxpriceconqr[0].') AND (moshnost BETWEEN '.$minmoshqr[0].' AND '.$maxmoshqr[0].') AND (ploshad BETWEEN '.$minploshadconqr[0].'  AND '.$maxploshadconqr[0].')) AND conprod.idconprod=condit.proisvoditel AND concons.idconcons=condit.constructia GROUP BY condit.id LIMIT '.$nulzap.',15';
	$p14=$db->query($p12);
echo "<div class='tovar' >";
While ($p16=mysqli_fetch_assoc($p14)) {
	if ($p16['nalichie']==1){
		$p23="<div id='".$p16['id']."' class='nalichie'>
	<input   type='radio' class='nal' name='".$p16['id']."' value='1' checked='checked'>
	Есть в наличии
	<input   type='radio' class='nal' name='".$p16['id']."' value='0'>
	Нет в наличии
	</div>";
	}
	else{
		$p23="<div id='".$p16['id']."' class='nalichie'>
	<input   type='radio' class='nal' name='".$p16['id']."' value='1'>
	Есть в наличии
	<input   type='radio' class='nal' name='".$p16['id']."' value='0' checked='checked'>
	Нет в наличии
	</div>";
	}
echo "<div class='card' id='".$p16['id']."c'>
<div class='im'>
	<img class='cardim' src='cond/".$p16['name']."m.jpeg'>
</div>
<div class='name' id='".$p16['id']."n'>".$p16['name']."</div>".$p23."
<div class='rasresh'>Мощность:".$p16['moshnost']."Ватт</div>
<div class='ugol'>Площадь: ".$p16['ploshad']."М<sup>2</sup></div>
<div class='cena'>Цена:".$p16['cena']."руб</div>
<div class='corzc'><div class='del' id='".$p16['id']."'>Удалить</div></div>
</div>";
}
echo "<div id='pagecon'>".$number_pages."</div>";
echo "</div>";
mysqli_close($db);
?>