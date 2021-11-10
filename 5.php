<?php
include 'grani.php';
include 'config.php';

if (isset($_GET['const'])){
	$const=$_GET['const'];
	if ($const[0]!='0') {
		$v1='AND (vc.construct=';
		$v2='OR vc.construct=';
		for ($i=0;$i<count($const);++$i){
			if ($i==0){
			$qa.=$v1;
			$qa.=$const[$i];
			$qa.=' ';
		}
		else{
			$qa.=$v2;
			$qa.=$const[$i];
			$qa.=' ';
		}
		}
		$qa.=') ';
		}
}

if (isset($_GET['prod'])){
	$prod=$_GET['prod'];
	if ($prod[0]!='0') {
		$v1='AND (vc.produser=';
		$v2='OR vc.produser=';
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

if (isset($_GET['sreda'])){
	$sreda=$_GET['sreda'];
	if ($sreda[0]!='0') {
		$v1='AND vc.';
		$v2='AND vc.';
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
	$qd.='AND vc.pomeshenie=1 AND vc.ulitsa=1 ';
}
}

if (isset($_GET['dop'])){
	$dop=$_GET['dop'];
	if ($dop[0]!='0') {
		$v1='AND vc.';
		$v2='AND vc.';
		for ($i=0;$i<count($dop);$i++){
			if ($i!=0){
			$qc.=$v1;
			$qc.=$dop[$i];
			$qc.='=1 ';}
			else{
			$qc.=$v2;
			$qc.=$dop[$i];
			$qc.='=1 ';}
		}
}
else{
	$qc.=' AND vc.mobsov=1 AND vc.wireless=1 AND vc.simcards=1 AND vc.datchdvizh=1 AND vc.AV=1 AND vc.nightmode=1 AND vc.audio=1 AND vc.memorycard=1 AND vc.P2P=1 AND vc.Onvif=1 ';
}
}


if (isset($_GET['frm'])){
	$frm=$_GET['frm'];
	if ($frm[0]!='0') {
		$v1='AND vc.';
		$v2='AND vc.';
		for ($i=0;$i<count($frm);$i++){
			if ($i!=0){
			$qe.=$v1;
			$qe.=$frm[$i];
			$qe.='=1 ';}
			else{
			$qe.=$v2;
			$qe.=$frm[$i];
			$qe.='=1 ';}
		}
}
else{
	$qe.='AND vc.AHD=1 AND vc.TVI=1 AND vc.CVI=1 AND vc.CVBS=1 ';
}
}

$mintemp=$_GET['mintemp'];
$maxtemp=$_GET['maxtemp'];
$minprice=$_GET['minprice'];
$maxprice=$_GET['maxprice'];
$minrasresh=$_GET['minrasresh'];
$maxrasresh=$_GET['maxrasresh'];
$minugol=$_GET['minugol'];
$maxugol=$_GET['maxugol'];


$qs='SELECT count(*) FROM (SELECT * FROM vc, camprod, cons WHERE vc.id IN (SELECT vc.id FROM vc, camprod, cons WHERE mint>='.$mintemp.' AND maxt<='.$maxtemp.' AND (price BETWEEN '.$minprice. 'AND '.$maxprice.') AND (rasreshenie BETWEEN '.$minrasresh.' AND '.$maxrasresh.') AND (ugol BETWEEN '.$minugol.' AND '.$maxugol.') '.$qa.$qc.$qb.$qd.$qe.') AND camprod.produserid=vc.produser AND cons.cid=vc.construct GROUP BY vc.id) AS cv';

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
$p6='SELECT * FROM vc, camprod, cons WHERE vc.id IN (SELECT vc.id FROM vc, camprod, cons WHERE mint>='.$mintemp.' AND maxt<='.$maxtemp.' AND (price BETWEEN '.$minprice. 'AND '.$maxprice.') AND (rasreshenie BETWEEN '.$minrasresh.' AND '.$maxrasresh.') AND (ugol BETWEEN '.$minugol.' AND '.$maxugol.') '.$qa.$qc.$qb.$qd.$qe.') AND camprod.produserid=vc.produser AND cons.cid=vc.construct GROUP BY vc.id ORDER BY vc.id LIMIT '.$nulzap.',15';


$p7=$db->query($p6);
	While ($p8=mysqli_fetch_assoc($p7)) {
	$card['id']=$p8['id'];
	if (file_exists("cam/".$p8['name'].".jpeg")){
		$path="https://condicam.ru/cam/".$p8['name'].".jpeg";
	}
	else{
		$path="https://condicam.ru/kot.jpg";
	}
	$card['path']=$path;
	$card['nalichie']=$p8['nalichie'];
	$card['name']=$p8['name'];
	$card['rasresh']=$p8['rasreshenie'];
	$card['ugol']=$p8['ugol'];
	$card['price']=$p8['price'];
	$data['cards'][]=$card;
}
$data=json_encode($data);
echo($data);
mysqli_close($db);
?>
