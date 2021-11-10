<!DOCTYPE html> <!-- Объявление формата документа -->
<html>
<head> <!-- Техническая информация о документе -->
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<meta http-equiv='X-UA-Compatible' content='ie=edge'> <!-- Определяем кодировку символов документа -->
<title>...</title> <!-- Задаем заголовок документа -->
<link rel='stylesheet' type='text/css' href='styleadm.css'>
</head>
<body>
<div class='catalog-conteiner'>
	<div class='catalog'>
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
	$p12='SELECT * FROM vc, camprod, cons WHERE vc.id IN (SELECT vc.id FROM vc, camprod, cons WHERE mint>='.$mintqr[0].' AND maxt<='.$maxtqr[0].' AND (price BETWEEN '.$minpriceqr[0]. ' AND '.$maxpriceqr[0].') AND (rasreshenie BETWEEN '.$minrasqr[0].' AND '.$maxrasqr[0].') AND (ugol BETWEEN '.$minugolqr[0].'  AND '.$maxugolqr[0].')) AND camprod.produserid=vc.produser AND cons.cid=vc.construct GROUP BY vc.id LIMIT 0,15';
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
	<img class='cardim' src='https://condicam.ru/cam/".$p16['name'].".jpeg'>
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
if ($number_pages==1){
			echo "<div class='navigation'>
<div class='inside'> <div class='left'> <div id='vlevo' style ='display:none'><img src='https://condicam.ru/spisok.svg'></div></div> <div class='right'> <div id='vpravo' style ='display:none'><img src='https://condicam.ru/spisok.svg'></div></div> </div>
</div>";
		};
			if ($number_pages==0){
			echo "<div class='navigation'>
<div class='inside'> <div class='left'> <div id='vlevo' style ='display:none'><img src='https://condicam.ru/spisok.svg'></div></div> <div class='right'> <div id='vpravo' style ='display:none'><img src='https://condicam.ru/spisok.svg'></div></div> </div>
</div>";
		};
		if ($number_pages>1){
			echo "<div class='navigation'>
<div class='inside'> <div class='left'> <div id='vlevo' style ='display:none'><img src='https://condicam.ru/spisok.svg'></div></div> <div class='right'> <div id='vpravo' style ='display:block'><img src='https://condicam.ru/spisok.svg'></div></div> </div>
</div>";
		};
echo "<div class='filtercor'>
<form id='my_form' class='filterv' enctype='multipart/fomdata'>
<div class='galochki'>

<div class='construct' id='f3'>
		<div class='group-name3' id='sh2'><div class='met'>Конструкция камеры</div>
		</div>
		<div class='ppp'>";
			$i=1;
	$f=93;
	While ($cnst=mysqli_fetch_assoc($cns)){
	echo "<div class='pp'>
	<input  id='construct_".$f."' type='radio' name='constred' value='".$i."'>
	<label for='construct_".$f."'>".$cnst["nameconst"]."</label></div>";
	$f=$f+1;
	$i=$i+1;
};
echo "</div>
</div>
<div class='sreda' id='f4'>
		<div class='group-name4'><div class='met' id='sh'>Условия работы</div>
		</div>
	<div class='ppp'>
		<div class='pp'>
	<input id='sreda_9' type='checkbox' name='sredared[]' value='pomeshenie'>
	<label for='sreda_9'>Помещение</label></div><div class='pp'>
	<input  id='sreda_92' type='checkbox' name='sredared[]' value='ulitsa'>
	<label for='sreda_92'>Улица</label></div>
</div>
</div>
<div class='dop' id='f5'>
		<div class='group-name6'><div class='met'>Дополнительно</div>
		</div>
	<div class='ppp'>
	<div class='pp'>
	<input id='dop_9' type='checkbox' name='dopred[]' value='mobsov'>
	<label class='tot' for='dop_9'>Совместимость с моб. телефонами</label></div><div class='pp'>
	<input  id='dop_92' type='checkbox' name='dopred[]' value='wireless'>
	<label for='dop_92'>Беспроводные</label></div><div class='pp'>
	<input  id='dop_25' type='checkbox' name='dopred[]' value='simcards'>
	<label for='dop_25'>Поддержка SIM-карт</label></div><div class='pp'>
	<input  id='dop_26' type='checkbox' name='dopred[]' value='datchdvizh'>
	<label for='dop_26'>Датчик движения</label></div><div class='pp'>
	<input  id='dop_27' type='checkbox' name='dopred[]' value='AV'>
	<label for='dop_27'>Антивандальная</label></div><div class='pp'>
	<input  id='dop_28' type='checkbox' name='dopred[]' value='nightmode'>
	<label for='dop_28'>Ночной режим</label></div><div class='pp'>
	<input  id='dop_29' type='checkbox' name='dopred[]' value='audio'>
	<label for='dop_29'>Запись аудио</label></div><div class='pp'>
	<input  id='dop_20' type='checkbox' name='dopred[]' value='memorycard'>
	<label for='dop_20'>Слот для карты памяти</label></div><div class='pp'>
	<input  id='dop_21' type='checkbox' name='dopred[]' value='P2P'>
	<label for='dop_21'>P2P</label></div><div class='pp'>
	<input  id='dop_30' type='checkbox' name='dopred[]' value='Onvif'>
	<label for='dop_30'>Onvif</label></div class='pp'>
</div>
</div>
<div class='proisv' id='f6'>
		<div class='group-name1'><div class='met'>Компания-производитель</div>
		</div>
	<div class='ppp'>";
	$i=1;
	$f=23;
	While ($firmim=mysqli_fetch_assoc($firmi)){
	echo "<div class='pp'>
	<input  id='producer_".$f."' type='radio' name='prodred' value='".$i."'>
	<label for='producer_".$f."'>".$firmim["nameconstruct"]."</label></div>";
	$f=$f+1;
	$i=$i+1;
};
echo "</div>
</div>
<div class='proisv' id='f1'>
		<div class='group-name5'><div class='met'>Формат видеонаблюдения</div>
		</div>
	<div class='ppp'>
	<div class='pp'>
	<input  id='producer_92' type='checkbox' name='frmred[]' value='AHD'>
	<label for='producer_92'>AHD</label></div><div class='pp'>
	<input  id='producer_96' type='checkbox' name='frmred[]' value='TVI'>
	<label for='producer_96'>TVI</label></div><div class='pp'>
	<input  id='producer_97' type='checkbox' name='frmred[]' value='CVI'>
	<label for='producer_97'>CVI</label></div><div class='pp'>
	<input  id='producer_98' type='checkbox' name='frmred[]' value='CVBS'>
	<label for='producer_98'>CVBS</label></div>
</div>
</div>
</div>
<div class='polsunki'>
<div class='filters__item filters-pricered'>
						<h3 class='filters-price__titlered'>Цена</h3>
							<input class='red' type='number' name='price'>
					</div>
<div class='filters__item filters-rasreshred'>
						<h3 class='filters-rasresh__titlered'>Разрешение</h3>
								<input class='red' type='number' name='rasresh'>
					</div>
<div class='filters__item filters-ugolred'>
						<h3 class='filters-ugol__titlered'>Угол обзора</h3>
								<input class='red' type='number' name='ugol'>
					</div>
<div class='filters__item filters-tempred'>
	<h3 class='filters-temp__titlered'>Рабочая температура</h3>
			<span class='filters-temp__textred'>от</span>
			<input class='red' type='number' name='mintemp'>
			<span class='filters-temp__textred'>до</span>
			<input class='red' type='number' name='maxtemp'>
	</div>
	<div class='namered'>
	<h3 class='namered'>Название</h3>
			<input class='redname' type='text' name='namered'>
	</div>
	<div class='namered'>
	<h3 class='namered'>Описание</h3>
			<textarea class='redname' name='opis'></textarea>
	</div>
<div class='photo'>
	Фотография(не больше 2MB и только с расширением .jpeg)
	<input type='file' id='file_v' name='image' accept='.jpeg'>
</div>
<div class='otvet'>
</div>
<div class='knopka'>
<div id='vnesti'>Добавить в базу данных</div>
</div>
</form>
</div>
</div>
<div class='filtercor'>
<form id='my_form1' class='filterv'>
<div class='namekomp'>
	<h3 class='namekom'>Название компании</h3>
			<input class='namekom' type='text' name='namekomp'>
	</div>
<div class='otvet1'>
</div>
<div class='knopka'>
<div id='vnestikom'>Добавить в базу данных</div>
</div>
</form>
</div>
<div class='filtercor'>
<form id='my_form2' class='filterv'>
<div class='namekonst'>
	<h3 class='namekon'>Название конструкции</h3>
			<input class='namekon' type='text' name='namekonst'>
	</div>
<div class='otvet2'>
</div>
<div class='knopka'>
<div id='vnestikon'>Добавить в базу данных</div>
</div>
</form>
</div>";
mysqli_close($db);
?>
	</div>
</div>
</body>
<?php include '22.php'?>
