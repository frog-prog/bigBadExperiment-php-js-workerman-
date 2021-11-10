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
$qs='SELECT count(*) FROM (SELECT * FROM condit, conprod, concons WHERE condit.id IN (SELECT condit.id FROM condit, conprod, concons WHERE (cena BETWEEN '.$minpriceconqr[0]. ' AND '.$maxpriceconqr[0].') AND (ploshad BETWEEN '.$minploshadconqr[0]. ' AND '.$maxploshadconqr[0].') AND (moshnost BETWEEN '.$minmoshqr[0].' AND '.$maxmoshqr[0].') AND (shum BETWEEN '.$minshumqr[0].' AND '.$maxshumqr[0].')) AND conprod.idconprod=condit.proisvoditel AND concons.idconcons=condit.constructia GROUP BY condit.id) AS cv';
$cpo=$db->query($qs);
$cpro=mysqli_fetch_array($cpo);

$page=$_POST['page'];
$nulzap=($page-1)*15;
$colz=$cpro[0];
$number_pages = (int)($colz/15);

		if(($colz%15) != 0) {
			$number_pages++;
		}

$p6='SELECT * FROM condit, conprod, concons WHERE condit.id IN (SELECT condit.id FROM condit, conprod, concons WHERE (cena BETWEEN '.$minpriceconqr[0]. ' AND '.$maxpriceconqr[0].') AND (ploshad BETWEEN '.$minploshadconqr[0]. ' AND '.$maxploshadconqr[0].') AND (moshnost BETWEEN '.$minmoshqr[0].' AND '.$maxmoshqr[0].') AND (shum BETWEEN '.$minshumqr[0].' AND '.$maxshumqr[0].')) AND conprod.idconprod=condit.proisvoditel AND concons.idconcons=condit.constructia GROUP BY condit.id LIMIT 0,15';

$p7=$db->query($p6);
echo "<div class='tovar' >";
While ($p8=mysqli_fetch_assoc($p7)) {
	if ($p8['nalichie']==1){
		$p23="<div id='".$p8['id']."' class='nalichie'>
	<input   type='radio' class='nal' name='".$p8['id']."' value='1' checked='checked'>
	Есть в наличии
	<input   type='radio' class='nal' name='".$p8['id']."' value='0'>
	Нет в наличии
	</div>";
	}
	else{
		$p23="<div id='".$p8['id']."' class='nalichie'>
	<input   type='radio' class='nal' name='".$p8['id']."' value='1'>
	Есть в наличии
	<input   type='radio' class='nal' name='".$p8['id']."' value='0' checked='checked'>
	Нет в наличии
	</div>";
	}
echo "<div class='card' id='".$p8['id']."c'>
<div class='im'>
	<img class='cardim' src='https://condicam.ru/cond/".$p8['name'].".jpeg'>
</div>
<div class='name' id='".$p8['id']."n'>".$p8['name']."</div>".$p23."
<div class='rasresh'>Мощность:".$p8['moshnost']."Ватт</div>
<div class='ugol'>Площадь: ".$p8['ploshad']."М<sup>2</sup></div>
<div class='cena'>Цена:".$p8['cena']."руб</div>
<div class='corzc'><div class='del' id='".$p8['id']."'>Удалить</div></div>
</div>";
}
echo "<div id='pagecon'>".$number_pages."</div>";
echo "</div>";
if ($number_pages==1){
			echo "<div class='navigation'>
<div class='inside'> <div class='left'> <div id='vlevocon' style ='display:none'><img src='spisok.svg'></div></div> <div class='right'> <div id='vpravocon' style ='display:none'><img src='spisok.svg'></div></div> </div>
</div>";
		};
			if ($number_pages==0){
			echo "<div class='navigation'>
<div class='inside'> <div class='left'> <div id='vlevocon' style ='display:none'><img src='spisok.svg'></div></div> <div class='right'> <div id='vpravocon' style ='display:none'><img src='spisok.svg'></div></div> </div>
</div>";
		};
		if ($number_pages>1){
			echo "<div class='navigation'>
<div class='inside'> <div class='left'> <div id='vlevocon' style ='display:none'><img src='spisok.svg'></div></div> <div class='right'> <div id='vpravocon' style ='display:block'><img src='spisok.svg'></div></div> </div>
</div>";
		};
echo "<div class='filtercor'>
<form id='my_form' class='filterv' enctype='multipart/fomdata'>
<div class='galochki'>

<div class='construct' id='f3'>
		<div class='group-name3' id='sh2'><div class='met'>Тип</div>
		</div>
		<div class='ppp'>";
			$i=1;
	$f=93;
	While ($cnst=mysqli_fetch_assoc($cnscon)){
	echo "<div class='pp'>
	<input  id='construct_".$f."' type='radio' name='constred' value='".$i."'>
	<label for='construct_".$f."'>".$cnst["nameconcons"]."</label></div>";
	$f=$f+1;
	$i=$i+1;
};
echo "</div>
</div>
<div class='sreda' id='f4'>
		<div class='group-name4'><div class='met' id='sh'>Инверторное управление мощностью</div>
		</div>
	<div class='ppp'>
		<div class='pp'>
	<input id='sreda_9' type='radio' name='sredared' value='1'>
	<label for='sreda_9'>Да</label></div><div class='pp'>
	<input  id='sreda_92' type='radio' name='sredared' value='2'>
	<label for='sreda_92'>Нет</label></div>
</div>
</div>
<div class='dop' id='f5'>
		<div class='group-name6'><div class='met'>Режимы работы</div>
		</div>
	<div class='ppp'>
	<div class='pp'>
	<input id='dop_9' type='checkbox' name='dopred[]' value='ochlazhdenie'>
	<label class='tot' for='dop_9'>Охлаждение</label></div><div class='pp'>
	<input  id='dop_92' type='checkbox' name='dopred[]' value='ventilyacia'>
	<label for='dop_92'>Вентиляция</label></div><div class='pp'>
	<input  id='dop_25' type='checkbox' name='dopred[]' value='obogrev'>
	<label for='dop_25'>Обогрев</label></div><div class='pp'>
	<input  id='dop_26' type='checkbox' name='dopred[]' value='osushenie'>
	<label for='dop_26'>Осушение</label></div>
</div>
</div>
<div class='proisv' id='f6'>
		<div class='group-name1'><div class='met'>Компания-производитель</div>
		</div>
	<div class='ppp'>";
	$i=1;
	$f=23;
	While ($firmim=mysqli_fetch_assoc($firmicon)){
	echo "<div class='pp'>
	<input  id='producer_".$f."' type='radio' name='prodred' value='".$i."'>
	<label for='producer_".$f."'>".$firmim["connameprod"]."</label></div>";
	$f=$f+1;
	$i=$i+1;
};
echo "</div>
</div>
<div class='proisv' id='f1'>
		<div class='group-name5'><div class='met'>Тип внутреннего блока</div>
		</div>
	<div class='ppp'>
	<div class='pp'>
	<input  id='producer_92' type='radio' name='frmred' value='1'>
	<label for='producer_92'>Мобильный</label></div><div class='pp'>
	<input  id='producer_96' type='radio' name='frmred' value='2'>
	<label for='producer_96'>Настенный</label></div>
</div>
</div>
</div>
<div class='polsunki'>
<div class='filters__item filters-pricered'>
						<h3 class='filters-price__titlered'>Цена</h3>
							<input class='red' type='number' name='price'>
					</div>
<div class='filters__item filters-rasreshred'>
						<h3 class='filters-rasresh__titlered'>Максимальная площадь помещения</h3>
								<input class='red' type='number' name='squere'>
					</div>
<div class='filters__item filters-ugolred'>
						<h3 class='filters-ugol__titlered'>Мощность</h3>
								<input class='red' type='number' name='power'>
					</div>
<div class='filters__item filters-tempred'>
	<h3 class='filters-temp__titlered'>Шум</h3>
			<input class='red' type='number' name='mintemp'>
			</div>
			<div class='filters__item filters-tempred'>
	<h3 class='filters-temp__titlered'>Ширина</h3>
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
	<h3 class='namekon'>Название типа</h3>
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
<?php include '23.php'?>
