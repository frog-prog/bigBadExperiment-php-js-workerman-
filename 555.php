<?php
include 'grani.php';
include 'config.php';
$qs='SELECT count(*) FROM (SELECT count(vc.id) FROM vc, camprod, cons WHERE vc.id IN (SELECT vc.id FROM vc, camprod, cons WHERE mint>='.$mintqr[0].' AND maxt<='.$maxtqr[0].' AND (price BETWEEN '.$minpriceqr[0]. ' AND '.$maxpriceqr[0].') AND (rasreshenie BETWEEN '.$minrasqr[0].' AND '.$maxrasqr[0].') AND (ugol BETWEEN '.$minugolqr[0].'  AND '.$maxugolqr[0].')) AND camprod.produserid=vc.produser AND cons.cid=vc.construct GROUP BY vc.id) AS cv';

$cpo=$db->query($qs);
$cpro=mysqli_fetch_array($cpo);

$page=$_POST['page'];
$nulzap=($page-1)*15;
$colz=$cpro[0];
$number_pages = (int)($colz/15);

		if(($colz%15) != 0) {
			$number_pages++;
		}
	$p12='SELECT * FROM vc, camprod, cons WHERE vc.id IN (SELECT vc.id FROM vc, camprod, cons WHERE mint>='.$mintqr[0].' AND maxt<='.$maxtqr[0].' AND (price BETWEEN '.$minpriceqr[0]. ' AND '.$maxpriceqr[0].') AND (rasreshenie BETWEEN '.$minrasqr[0].' AND '.$maxrasqr[0].') AND (ugol BETWEEN '.$minugolqr[0].'  AND '.$maxugolqr[0].')) AND camprod.produserid=vc.produser AND cons.cid=vc.construct GROUP BY vc.id LIMIT '.$nulzap.',15';

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
	<img class='cardim' src='https://condicam.ru/cam/".$p16['name']."m.jpeg'>
</div>
<div class='name' id='".$p16['id']."n'>".$p16['name']."</div>".$p23."
<div class='rasresh'>Разрешение:".$p16['rasreshenie']."Мп</div>
<div class='ugol'>Угол обзора: ".$p16['ugol']."°</div>
<div class='cena'>Цена:".$p16['price']."руб</div>
<div class='corzc'><div class='del' id='".$p16['id']."'>Удалить</div></div>
</div>";
}
echo "<div id='pagecon'>".$number_pages."</div>";
echo "</div>";
mysqli_close($db);
?>
