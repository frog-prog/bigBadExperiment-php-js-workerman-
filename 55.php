<?php
include 'grani.php';
include 'config.php';



if (isset($_GET['tip'])){
	$tip=$_GET['tip'];
	if ($tip[0]!='0') {
		$v1='AND (condit.constructia=';
		$v2='OR condit.constructia=';
		for ($i=0;$i<count($tip);++$i){
			if ($i==0){
			$qa.=$v1;
			$qa.=$tip[$i];
			$qa.=' ';
		}
		else{
			$qa.=$v2;
			$qa.=$tip[$i];
			$qa.=' ';
		}
		}
		$qa.=') ';
		}
}

if (isset($_GET['tipvn'])){
	$const=$_GET['tipvn'];
	if ($const[0]!='0') {
		$v1='AND (condit.tipvnutbl=';
		$v2='OR condit.tipvnutbl=';
		for ($i=0;$i<count($const);++$i){
			if ($i==0){
			$qb.=$v1;
			$qb.=$const[$i];
			$qb.=' ';
		}
		else{
			$qb.=$v2;
			$qb.=$const[$i];
			$qb.=' ';
		}
		}
		$qb.=') ';
		}
}

if (isset($_GET['producer6'])){
	$prod=$_GET['producer6'];
	if ($prod[0]!='0') {
		$v1='AND (condit.proisvoditel=';
		$v2='OR condit.proisvoditel=';
		for ($i=0;$i<count($prod);++$i){
			if ($i==0){
			$qc.=$v1;
			$qc.=$prod[$i];
			$qc.=' ';
		}
		else{
			$qc.=$v2;
			$qc.=$prod[$i];
			$qc.=' ';
		}
		}
		$qc.=') ';
		}
}

if (isset($_GET['invert'])){
	$invert=$_GET['invert'];
	if ($invert[0]!='0') {
		$v1='AND (condit.invertor=';
		$v2='OR condit.invertor=';
		for ($i=0;$i<count($invert);++$i){
			if ($i==0){
			$qv.=$v1;
			$qv.=$invert[$i];
			$qv.=' ';
		}
		else{
			$qv.=$v2;
			$qv.=$invert[$i];
			$qv.=' ';
		}
		}
		$qv.=') ';
		}
}

if (isset($_GET['regimi'])){
	$sreda=$_GET['regimi'];
	if ($sreda[0]!='0') {
		$v1='AND condit.';
		$v2='AND condit.';
		for ($i=0;$i<count($sreda);$i++){
			if ($i!=0){
			$qd.=$v1;
			$qd.=$sreda[$i];
			$qd.='=1 ';}
			else{
			$qd.=$v2;
			$qd.=$sreda[$i];
			$qd.='=1 ';}
		}
}
else{
	$qd.='AND condit.ochlazhdenie=1 AND condit.ventilyacia=1 AND condit.obogrev=1 AND condit.osushenie=1';
}
}



$minsquere=$_GET['minsquere'];
$maxsquere=$_GET['maxsquere'];
$minprice=$_GET['minprice'];
$maxprice=$_GET['maxprice'];
$minpower=$_GET['minpower'];
$maxpower=$_GET['maxpower'];
$minshum=$_GET['minshum'];
$maxshum=$_GET['maxshum'];




$qs='SELECT count(*) FROM (SELECT * FROM condit, conprod, concons WHERE condit.id IN (SELECT condit.id FROM condit, conprod, concons WHERE (cena BETWEEN '.$minprice. ' AND '.$maxprice.') AND (ploshad BETWEEN '.$minsquere. ' AND '.$maxsquere.') AND (moshnost BETWEEN '.$minpower.' AND '.$maxpower.') AND (shum BETWEEN '.$minshum.' AND '.$maxshum.') '.$qa.$qc.$qv.$qd.$qb.') AND conprod.idconprod=condit.proisvoditel AND concons.idconcons=condit.constructia GROUP BY condit.id) AS cv';
$cpo=$db->query($qs);
$cpro=mysqli_fetch_array($cpo);

$page=$_GET['page'];
$nulzap=($page-1)*15;
$colz=$cpro[0];
$number_pages = (int)($colz/15);

		if(($colz%15) != 0) {
			$number_pages++;
		}
$data['kolvo']=$number_pages;

$p6='SELECT * FROM condit, conprod, concons WHERE condit.id IN (SELECT condit.id FROM condit, conprod, concons WHERE (cena BETWEEN '.$minprice. ' AND '.$maxprice.') AND (ploshad BETWEEN '.$minsquere. ' AND '.$maxsquere.') AND (moshnost BETWEEN '.$minpower.' AND '.$maxpower.') AND (shum BETWEEN '.$minshum.' AND '.$maxshum.') '.$qa.$qc.$qv.$qd.$qb.') AND conprod.idconprod=condit.proisvoditel AND concons.idconcons=condit.constructia GROUP BY condit.id ORDER BY condit.id LIMIT '.$nulzap.',15';
$p7=$db->query($p6);
While ($p8=mysqli_fetch_assoc($p7)) {
	$card['id']=$p8['id'];
	if (file_exists("cond/".$p8['name'].".jpeg")){
		$path="https://condicam.ru/cond/".$p8['name'].".jpeg";
	}
	else{
		$path="https://condicam.ru/kot.jpg";
	}
	$card['path']=$path;
	$card['nalichie']=$p8['nalichie'];
	$card['name']=$p8['name'];
	$card['ploshad']=$p8['ploshad'];
	$card['moshnost']=$p8['moshnost'];
	$card['price']=$p8['cena'];
	$data['cards'][]=$card;
}
$data=json_encode($data);
echo($data);

mysqli_close($db);
?>
