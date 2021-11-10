<?php
//echo "<pre>";
//print_r($_POST);
//echo "</pre>";
include 'grani.php';
include 'config.php';
$a=0;
if (isset($_POST['camcorz'])){
	$camcorz=$_POST['camcorz'];
	for ($i=0; $i<=count($camcorz)-1 ; $i++) {
	$zap[$i]="SELECT * FROM vc, camprod, cons WHERE vc.id='".$camcorz[$i]."' AND camprod.produserid=vc.produser AND cons.cid=vc.construct";
	$a++;
	}
}
if (isset($_POST['concorz'])){
	$concorz=$_POST['concorz'];
	if ($a==0){
		for ($i=0; $i<=count($concorz)-1 ; $i++) {
	$zap[$i]="SELECT * FROM condit, conprod, concons WHERE condit.id='".$concorz[$i]."' AND conprod.idconprod=condit.proisvoditel AND concons.idconcons=condit.constructia";
	}
	}
	else{
		$b=0;
		for ($i=$a; $i<$a+count($concorz); $i++) {
			$zap[$i]="SELECT * FROM condit, conprod, concons WHERE condit.id='".$concorz[$b]."' AND conprod.idconprod=condit.proisvoditel AND concons.idconcons=condit.constructia";
			$b++;
		}
	}
}
$page=$_POST['page'];
$nulzap=($page-1)*15;
$colz=count($camcorz)+count($concorz);
$number_pages = (int)($colz/15);

		if(($colz%15) != 0) {
			$number_pages++;
		}

	$data['kolvo']=$number_pages;

if ($page<$number_pages){
for ($i=$nulzap; $i<=$nulzap+14; $i++) {
		$p7=$db->query($zap[$i]);
		$p8=mysqli_fetch_assoc($p7);
		if (isset($p8['rasreshenie'])){
			if (file_exists("cam/".$p8['name'].".jpeg")){
		$path="https://condicam.ru/cam/".$p8['name'].".jpeg";
		}
		else{
		$path="https://condicam.ru/kot.jpg";
		}
		$card['path']=$path;
		$card['price']=$p8['price'];
		$card['name']=$p8['name'];
		$card['rasresh']=$p8['rasreshenie'];
		$card['ugol']=$p8['ugol'];
		$card['nalichie']=$p8['nalichie'];
		$card['id']=$p8['id'];
			$data['cams'][]=$card;
		}
		else{
			if (file_exists("cond/".$p8['name'].".jpeg")){
		$path="https://condicam.ru/cond/".$p8['name'].".jpeg";
	}
	else{
		$path="https://condicam.ru/kot.jpg";
	}
	$card['path']=$path;
		$card['price']=$p8['cena'];
		$card['name']=$p8['name'];
		$card['ploshad']=$p8['ploshad'];
		$card['moshnost']=$p8['moshnost'];
		$card['nalichie']=$p8['nalichie'];
		$card['id']=$p8['id'];
			$data['conds'][]=$card;
		}
	}
}
else{
	for ($i=$nulzap; $i<=count($zap)-1; $i++) {
		$p7=$db->query($zap[$i]);
		$p8=mysqli_fetch_assoc($p7);
		if (isset($p8['rasreshenie'])){
			if (file_exists("cam/".$p8['name'].".jpeg")){
		$path="https://condicam.ru/cam/".$p8['name'].".jpeg";
		}
		else{
		$path="https://condicam.ru/kot.jpg";
		}
		$card['path']=$path;
		$card['price']=$p8['price'];
		$card['name']=$p8['name'];
		$card['rasresh']=$p8['rasreshenie'];
		$card['ugol']=$p8['ugol'];
		$card['nalichie']=$p8['nalichie'];
		$card['id']=$p8['id'];
			$data['cams'][]=$card;
		}
		else{
			if (file_exists("cond/".$p8['name'].".jpeg")){
		$path="https://condicam.ru/cond/".$p8['name'].".jpeg";
	}
	else{
		$path="https://condicam.ru/kot.jpg";
	}
	$card['path']=$path;
		$card['price']=$p8['cena'];
		$card['name']=$p8['name'];
		$card['ploshad']=$p8['ploshad'];
		$card['moshnost']=$p8['moshnost'];
		$card['nalichie']=$p8['nalichie'];
		$card['id']=$p8['id'];
			$data['conds'][]=$card;
		}
	}
}
if (!isset($data['conds'])){
	$data['conds']=[];
}
if (!isset($data['cams'])){
	$data['cams']=[];
}
echo(json_encode($data));
mysqli_close($db);
//echo "<pre>";
//print_r($zap);
//echo "</pre>";
?>
