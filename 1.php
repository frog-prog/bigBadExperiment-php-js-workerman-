<?php include 'grani.php';?>
<div class='camerfilt'>
<div class='trigger'>
<div class='trigger1'>Показать панель фильтров</div>
</div>
<div class='filtersvid'>
<form id='form1' class='filterv'>
<div class='galochki'>
<div class='construct' id='f3'>
		<div class='group-name3' id='sh2'><img class='men2' src='https://condicam.ru/spisok.svg'><div class='met'>Конструкция камеры</div>
		</div>
	<div class='pr6'>
		<div class='prd'>
	<input id='construct_922' type='checkbox' name='const[]' value='0'>
	<h2 for='construct_992'>Выбрать все</h2></div>
<?php
	$i=1;
	$f=923;
	While ($cnst=mysqli_fetch_assoc($cns)){
	echo "<div class='prd'>
	<input  id='construct_".$f."' type='checkbox' name='const[]' value='".$i."'>
	<h2 for='construct_".$f."'>".$cnst["nameconst"]."</h2></div>";
	$f=$f+1;
	$i=$i+1;
};
?>
</div>
</div>
<div class='sreda' id='f4'>
		<div class='group-name4'><img class='men3' src='https://condicam.ru/spisok.svg'>
		<div class='met' id='sh'>Условия работы</div>
		</div>
	<div class='pr3'>
		<div class='prs'>
	<input id='sreda_922' type='checkbox' name='sreda[]' value='0'>
	<h2 for='sreda_922'>Выбрать все</h2></div><div class='prs'>
	<input id='sreda_923' type='checkbox' name='sreda[]' value='pomeshenie'>
	<h2 for='sreda_923'>Помещение</h2></div><div class='prs'>
	<input  id='sreda_924' type='checkbox' name='sreda[]' value='ulitsa'>
	<h2 for='sreda_924'>Улица</h2></div>
</div>
</div>
<div class='dop' id='f5'>
		<div class='group-name6'><img class='men5' src='https://condicam.ru/spisok.svg'><div class='met'>Дополнительно</div>
		</div>
	<div class='pr5'>
	<div class='prz'>
	<input id='dop_922' type='checkbox' name='dop[]' value='0'>
	<h2 for='dop_992'>Выбрать все</h2></div><div class='prz'>
	<input id='dop_923' type='checkbox' name='dop[]' value='mobsov'>
	<h2 class='tot' for='dop_923'>Совместимость с моб. телефонами</h2></div><div class='prz'>
	<input  id='dop_924' type='checkbox' name='dop[]' value='wireless'>
	<h2 for='dop_924'>Беспроводные</h2></div><div class='prz'>
	<input  id='dop_925' type='checkbox' name='dop[]' value='simcards'>
	<h2 for='dop_925'>Поддержка SIM-карт</h2></div><div class='prz'>
	<input  id='dop_926' type='checkbox' name='dop[]' value='datchdvizh'>
	<h2 for='dop_926'>Датчик движения</h2></div><div class='prz'>
	<input  id='dop_927' type='checkbox' name='dop[]' value='AV'>
	<h2 for='dop_927'>Антивандальная</h2></div><div class='prz'>
	<input  id='dop_928' type='checkbox' name='dop[]' value='nightmode'>
	<h2 for='dop_928'>Ночной режим</h2></div><div class='prz'>
	<input  id='dop_929' type='checkbox' name='dop[]' value='audio'>
	<h2 for='dop_929'>Запись аудио</h2></div><div class='prz'>
	<input  id='dop_920' type='checkbox' name='dop[]' value='memorycard'>
	<h2 for='dop_920'>Слот для карты памяти</h2></div><div class='prz'>
	<input  id='dop_921' type='checkbox' name='dop[]' value='P2P'>
	<h2 for='dop_921'>P2P</h2></div><div class='prz'>
	<input  id='dop_930' type='checkbox' name='dop[]' value='Onvif'>
	<h2 for='dop_930'>Onvif</h2></div class='prz'>
</div>
</div>
<div class='proisv' id='f6'>
		<div class='group-name1'><div class='met'>Компания-производитель</div>
			<img class='men' src='https://condicam.ru/spisok.svg'>
		</div>
	<div class='pr1'>
	<div class='pr'>
	<input  id='producer_922' type='checkbox' name='prod[]' value='0'>
	<h2 for='producer_992'>Выбрать все</h2></div>
<?php
	$i=1;
	$f=923;
	While ($firmim=mysqli_fetch_assoc($firmi)){
	echo "<div class='pr'>
	<input  id='producer_".$f."' type='checkbox' name='prod[]' value='".$i."'>
	<h2 for='producer_".$f."'>".$firmim["nameconstruct"]."</h2></div>";
	$f=$f+1;
	$i=$i+1;
};
?>
</div>
</div>
<div class='proisv' id='f1'>
		<div class='group-name5'><div class='met'>Формат видеонаблюдения</div>
			<img class='men4' src='https://condicam.ru/spisok.svg'>
		</div>
	<div class='pr4'>
	<div class='pra'>
	<input  id='form_922' type='checkbox' name='frm[]' value='0'>
	<h2 for='form_992'>Выбрать все</h2></div><div class='pra'>
	<input  id='form_923' type='checkbox' name='frm[]' value='AHD'>
	<h2 for='form_923'>AHD</h2></div><div class='pra'>
	<input  id='form_926' type='checkbox' name='frm[]' value='TVI'>
	<h2 for='form_926'>TVI</h2></div><div class='pra'>
	<input  id='form_927' type='checkbox' name='frm[]' value='CVI'>
	<h2 for='form_927'>CVI</h2></div><div class='pra'>
	<input  id='form_928' type='checkbox' name='frm[]' value='CVBS'>
	<h2 for='form_928'>CVBS</h2></div>
</div>
</div>
</div>
<div class='polsunki'>
<div class='filters__item filters-price'>
						<h3 class='filters-price__title'>Цена</h3>
						<div class='filters-price__slider' id='range-slider'></div>
						<div class='filters-price__inputs'>
							<label class='filters-price__label'>
								<span class='filters-price__text'>от</span>
								<input type='number' name='minprice' step='100'  <?php echo "min='".$minpriceqr."' "." max='".$maxpriceqr."'" ?> class='filters-price__input' id='input-0'>
								<span class='filters-price__text'>₽</span>
							</label>
							<label class='filters-price__label'>
								<span class='filters-price__text'>до</span>
								<input type='number' name='maxprice' step='100' <?php echo "min='".$minpriceqr."' "." max='".$maxpriceqr."'" ?> class='filters-price__input' id='input-1'>
								<span class='filters-price__text'>₽</span>
							</label>
						</div>
					</div>
<div class='filters__item filters-rasresh__title'>
						<h3 class='filters-rasresh__title'>Разрешение</h3>
						<div class='filters-rasresh__slider' id='range-slider2'></div>
						<div class='filters-rasresh__inputs'>
							<label class='filters-rasresh__label'>
								<span class='filters-rasresh__text'>от</span>
								<input type='number' name='minrasresh' step='0.1' <?php echo "min='".$minrasqr."' "." max='".$maxrasqr."'" ?> class='filters-rasresh__input' id='input-01'>
								<span class='filters-rasresh__text'>Мп</span>
							</label>
							<label class='filters-rasresh__label'>
								<span class='filters-rasresh__text'>до</span>
								<input type='number' name='maxrasresh' step='0.1' <?php echo "min='".$minrasqr."' "." max='".$maxrasqr."'" ?> class='filters-rasresh__input' id='input-11'>
								<span class='filters-rasresh__text'>Мп</span>
							</label>
						</div>
					</div>
<div class='filters__item filters-ugol__title'>
						<h3 class='filters-ugol__title'>Угол обзора</h3>
						<div class='filters-ugol__slider' id='range-slider3'></div>
						<div class='filters-ugol__inputs'>
							<label class='filters-ugol__label'>
								<span class='filters-ugol__text'>от</span>
								<input type='number' name='minugol' step='1' <?php echo "min='".$minugolqr."' "." max='".$maxugolqr."'" ?> class='filters-ugol__input' id='input-011'>
								<span class='filters-ugol__text'>°</span>
							</label>
							<label class='filters-ugol__label'>
								<span class='filters-ugol__text'>до</span>
								<input type='number' name='maxugol' step='1' <?php echo "min='".$minugolqr."' "." max='".$maxugolqr."'" ?> class='filters-ugol__input' id='input-111'>
								<span class='filters-ugol__text'>°</span>
							</label>
						</div>
					</div>
<div class='filters__item filters-temp__title'>
	<h3 class='filters-temp__title'>Рабочая температура</h3>
	<div class='filters-temp__slider' id='range-slider4'></div>
	<div class='filters-temp__inputs'>
		<label class='filters-temp__label'>
			<span class='filters-temp__text'>от</span>
			<input type='number' name='mintemp' step='1' <?php echo "min='".$mintqr."' "." max='".$maxtqr."'" ?> class='filters-temp__input' id='input-0111'>
			<span class='filters-temp__text'>C°</span>
		</label>
		<label class='filters-temp__label'>
			<span class='filters-temp__text'>до</span>
			<input type='number' name='maxtemp' step='1' <?php echo "min='".$mintqr."' "." max='".$maxtqr."'" ?> class='filters-temp__input' id='input-1111'>
			<span class='filters-temp__text'>C°</span>
		</label>
	</div>
</div>
</div>
<div class='knopka'>
<div class='otpr' id='otpr'>Показать результаты</div>
</div>
</form>
</div>
</div>
<div class='condfilt'>
<div class='trigger'>
<div class='trigger2'>Показать панель фильтров</div>
</div>
<div class="filtersvid2">
<form id='form2' class="filterv">
<div class="galochki">
<div class="construct" id='f3'>
		<div class="group-name33"><img class='men22' src="https://condicam.ru/spisok.svg"><div class='met'>Инверторное управление мощностью</div>
		</div>
	<div class="pr66">
		<div class="prdd">
	<input id="con22" type="checkbox" name="invert[]" value="0">
	<h2 for="con22">Выбрать все</h2></div><div class="prdd">
	<input id="con23" type="checkbox" name="invert[]" value="1">
	<h2 for="con23">Да</h2></div><div class="prdd">
	<input  id="con24" type="checkbox" name="invert[]" value="2">
	<h2 for="con24">Нет</h2></div>
</div>
</div>
<div class="sreda" id='f4'>
		<div class="group-name44"><img class='men33' src="https://condicam.ru/spisok.svg">
			<div class='met'>Тип</div>
		</div>
	<div class="pr33">
		<div class="prss">
	<input id="sr22" type="checkbox" name="tip[]" value="0">
	<h2 for="sr22">Выбрать все</h2></div>
	<?php
	$i=1;
	$f=23;
	While ($cnst=mysqli_fetch_assoc($cnscon)){
	echo "<div class='prss'>
	<input  id='sr".$f."' type='checkbox' name='tip[]' value='".$i."'>
	<h2 for='sr".$f."'>".$cnst["nameconcons"]."</h2></div>";
	$f=$f+1;
	$i=$i+1;
};
?>
</div>
</div>
<div class="standart" id='f5'>
		<div class="group-name55"><img class='men44' src="https://condicam.ru/spisok.svg">
			<div class='met'>Тип внутреннего блока</div>
		</div>
	<div class="pr44"><div class="praa">
	<input id="st22" type="checkbox" name="tipvn[]" value="0">
	<h2 for="st22">Выбрать все</h2></div><div class="praa">
	<input id="st23" type="checkbox" name="tipvn[]" value="1">
	<h2 for="st23">Мобильный</h2></div><div class="praa">
	<input  id="st24" type="checkbox" name="tipvn[]" value="2">
	<h2 for="st24">Настенный</h2></div>
</div>
</div>
<div class="dop" id='f6'>
		<div class="group-name66"><img class='men55' src="https://condicam.ru/spisok.svg"><div class='met'>Режимы работы</div>
		</div>
	<div class="pr55">
	<div class="przz">
	<input id="d22" type="checkbox" name="regimi[]" value="0">
	<h2 for="d22">Выбрать все</h2></div><div class="przz">
	<input id="d23" type="checkbox" name="regimi[]" value="ochlazhdenie">
	<h2 for="d23">Охлаждение</h2></div><div class="przz">
	<input  id="d24" type="checkbox" name="regimi[]" value="ventilyacia">
	<h2 for="d24">Вентиляция</h2></div><div class="przz">
	<input  id="d25" type="checkbox" name="regimi[]" value="obogrev">
	<h2 for="d25">Обогрев</h2></div><div class="przz">
	<input  id="d26" type="checkbox" name="regimi[]" value="osushenie">
	<h2 for="d26">Осушение</h2></div><div class="przz">
</div>
</div>
</div>
<div class="proisv" id='f1'>
		<div class="group-name11"><img class='menn' src="https://condicam.ru/spisok.svg">
			<div class='met'>Компания-производитель</div>
		</div>
	<div class="pr11">
	<div class="prr">
	<input  id="pr22" type="checkbox" name="producer6[]" value="0">
	<h2 for="pr22">Выбрать все</h2></div>
	<?php
	$i=1;
	$f=23;
	While ($firmimcon=mysqli_fetch_assoc($firmicon)){
	echo "<div class='prr'>
	<input  id='pr".$f."' type='checkbox' name='producer6[]' value='".$i."'>
	<h2 for='pr".$f."'>".$firmimcon["connameprod"]."</h2></div>";
	$f=$f+1;
	$i=$i+1;
};
?>
</div>
</div>
</div>
<div class="polsunki">
<div class="filters__item filters-price">
						<h3 class="filters-price__title">Цена</h3>
						<div class="filters-price__slider" id="range-slider5"></div>
						<div class="filters-price__inputs">
							<label class="filters-price__label">
								<span class="filters-price__text">от</span>
								<input type="number" name='minprice' step="100" <?php echo " min='".$minpriceconqr[0]."' "." max='".$maxpriceconqr[0]."'" ?> class="filters-price__input" id="input-01111">
								<span class="filters-price__text">₽</span>
							</label>
							<label class="filters-price__label">
								<span class="filters-price__text">до</span>
								<input type="number" name='maxprice' step="100" <?php echo " min='".$minpriceconqr[0]."' "." max='".$maxpriceconqr[0]."'" ?> class="filters-price__input" id="input-11111">
								<span class="filters-price__text">₽</span>
							</label>
						</div>
					</div>
<div class="filters__item filters-rasresh__title">
						<h3 class="filters-rasresh__title">Площадь помещения</h3>
						<div class="filters-rasresh__slider" id="range-slider6"></div>
						<div class="filters-rasresh__inputs">
							<label class="filters-rasresh__label">
								<span class="filters-rasresh__text">от</span>
								<input type="number" name='minsquere' step="1" <?php echo " min='".$minploshadconqr[0]."' "." max='".$maxploshadconqr[0]."'" ?> class="filters-rasresh__input" id="input-011111">
								<span class="filters-rasresh__text">М<sup>2</sup></span>
							</label>
							<label class="filters-rasresh__label">
								<span class="filters-rasresh__text">до</span>
								<input type="number" name='maxsquere' step="1"<?php echo " min='".$minploshadconqr[0]."' "." max='".$maxploshadconqr[0]."'" ?> class="filters-rasresh__input" id="input-111111">
								<span class="filters-rasresh__text">М<sup>2</sup></span>
							</label>
						</div>
					</div>
<div class="filters__item filters-ugol__title">
						<h3 class="filters-ugol__title">Мощность</h3>
						<div class="filters-ugol__slider" id="range-slider7"></div>
						<div class="filters-ugol__inputs">
							<label class="filters-ugol__label">
								<span class="filters-ugol__text">от</span>
								<input type="number" name='minpower' step="1" <?php echo " min='".$minmoshqr[0]."' "." max='".$maxmoshqr[0]."'" ?> class="filters-ugol__input" id="input-0111111">
								<span class="filters-ugol__text">Вт</span>
							</label>
							<label class="filters-ugol__label">
								<span class="filters-ugol__text">до</span>
								<input type="number" name='maxpower' step="1" <?php echo " min='".$minmoshqr[0]."' "." max='".$maxmoshqr[0]."'" ?> class="filters-ugol__input" id="input-1111111">
								<span class="filters-ugol__text">Вт</span>
							</label>
						</div>
					</div>
<div class="filters__item filters-temp__title">
						<h3 class="filters-temp__title">Минимальный уровень шума</h3>
						<div class="filters-temp__slider" id="range-slider8"></div>
						<div class="filters-temp__inputs">
							<label class="filters-temp__label">
								<span class="filters-temp__text">от</span>
								<input type="number" name='minshum' step="1" <?php echo " min='".$minshumqr[0]."' "." max='".$maxshumqr[0]."'" ?> class="filters-temp__input" id="input-01111111">
								<span class="filters-temp__text">ДБ</span>
							</label>
							<label class="filters-temp__label">
								<span class="filters-temp__text">до</span>
								<input type="number" name='maxshum' step="1" <?php echo " min='".$minshumqr[0]."' "." max='".$maxshumqr[0]."'" ?> class="filters-temp__input" id="input-11111111">
								<span class="filters-temp__text">ДБ</span>
							</label>
						</div>
					</div>
</div>
<div class='knopka'>
<div class='otpr' id='otprcon'>Показать результаты</div>
</div>
</form>
</div>
</div>
