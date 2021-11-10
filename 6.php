<?php
include 'config.php';
ini_set('error_reporting', E_ALL); ini_set('display_errors', 1); ini_set('display_startup_errors', 1);
function image_resize(
    $source_path,
    $destination_path,
    $newwidth,
    $newheight = FALSE,
    $quality = FALSE // качество для формата jpeg
    ) {

    ini_set("gd.jpeg_ignore_warning", 1); // иначе на некотоых jpeg-файлах не работает

    list($oldwidth, $oldheight, $type) = getimagesize($source_path);

    switch ($type) {
        case IMAGETYPE_JPEG: $typestr = 'jpeg'; break;
        case IMAGETYPE_GIF: $typestr = 'gif' ;break;
        case IMAGETYPE_PNG: $typestr = 'png'; break;
    }
    $function = "imagecreatefrom$typestr";
    $src_resource = $function($source_path);

    if (!$newheight) { $newheight = round($newwidth * $oldheight/$oldwidth); }
    elseif (!$newwidth) { $newwidth = round($newheight * $oldwidth/$oldheight); }
    $destination_resource = imagecreatetruecolor($newwidth,$newheight);

    imagecopyresampled($destination_resource, $src_resource, 0, 0, 0, 0, $newwidth, $newheight, $oldwidth, $oldheight);

    if ($type = 2) { # jpeg
        imageinterlace($destination_resource, 1); // чересстрочное формирование изображение
        imagejpeg($destination_resource, $destination_path, $quality);
    }
    else { # gif, png
        $function = "image$typestr";
        $function($destination_resource, $destination_path);
    }

    imagedestroy($destination_resource);
    imagedestroy($src_resource);
}

if (isset($_POST['sredared']) AND isset($_POST['dopred']) AND isset($_POST['frmred']) AND isset($_POST['namered']) AND isset($_POST['mintemp']) AND isset($_POST['maxtemp']) AND isset($_POST['price']) AND isset($_POST['rasresh']) AND isset($_POST['prodred']) AND isset($_POST['constred']) AND isset($_POST['ugol']) AND isset($_FILES['image']) AND $_FILES['image']['size']<2097152 AND $_FILES['image']['size']>20) {

if (isset($_POST['sredared'])){
	$sreda=$_POST['sredared'];
	if (count($sreda)==2 AND $sreda[0]=='pomeshenie' AND $sreda[1]=='ulitsa') {
		$v1='1,1,';
	}
	if (count($sreda)==1 AND $sreda[0]=='pomeshenie') {
		$v1='1,0,';
	}
	if (count($sreda)==1 AND $sreda[0]=='ulitsa') {
		$v1='0,1,';
	}
}

if (isset($_POST['dopred'])){
	$dop=$_POST['dopred'];
		for ($k=0;$k<10; $k++) {
		for ($i=0;$i<count($dop);$i++){
			if ($k==0){
			if ($dop[$i]=='mobsov'){
				$v2.='1,'; break;
			}
			if ($dop[$i]!='mobsov' AND $i==(count($dop)-1)){
				$v2.='0,';
			}
		}
			if ($k==1){
			if ($dop[$i]=='wireless'){
				$v2.='1,'; break;
			}
			if ($dop[$i]!='wireless' AND $i==(count($dop)-1)){
				$v2.='0,';
			}
		}
			if ($k==2){
			if ($dop[$i]=='simcards'){
				$v2.='1,'; break;
			}
			if ($dop[$i]!='simcards' AND $i==(count($dop)-1)){
				$v2.='0,';
			}
		}
			if ($k==3){
			if ($dop[$i]=='datchdvizh'){
				$v2.='1,'; break;
			}
			if ($dop[$i]!='datchdvizh' AND $i==(count($dop)-1)){
				$v2.='0,';
			}
		}
		if ($k==4){
			if ($dop[$i]=='AV'){
				$v2.='1,'; break;
			}
			if ($dop[$i]!='AV' AND $i==(count($dop)-1)){
				$v2.='0,';
			}
		}
		if ($k==5){
			if ($dop[$i]=='nightmode'){
				$v2.='1,'; break;
			}
			if ($dop[$i]!='nightmode' AND $i==(count($dop)-1)){
				$v2.='0,';
			}
		}
		if ($k==6){
			if ($dop[$i]=='audio'){
				$v2.='1,'; break;
			}
			if ($dop[$i]!='audio' AND $i==(count($dop)-1)){
				$v2.='0,';
			}
		}
		if ($k==7){
			if ($dop[$i]=='memorycard'){
				$v2.='1,'; break;
			}
			if ($dop[$i]!='memorycard' AND $i==(count($dop)-1)){
				$v2.='0,';
			}
		}
		if ($k==8){
			if ($dop[$i]=='P2P'){
				$v2.='1,'; break;
			}
			if ($dop[$i]!='P2P' AND $i==(count($dop)-1)){
				$v2.='0,';
			}
		}
		if ($k==9){
			if ($dop[$i]=='Onvif'){
				$v2.='1,'; break;
			}
			if ($dop[$i]!='Onvif' AND $i==(count($dop)-1)){
				$v2.='0,';
			}
		}
		}
	}
}


if (isset($_POST['frmred'])){
	$frm=$_POST['frmred'];
		for ($k=0;$k<4; $k++) {
		for ($i=0;$i<count($frm);$i++){
			if ($k==0){
			if ($frm[$i]=='AHD'){
				$v3.='1,'; break;
			}
			if ($frm[$i]!='AHD' AND $i==(count($frm)-1)){
				$v3.='0,';
			}
		}
			if ($k==1){
			if ($frm[$i]=='TVI'){
				$v3.='1,'; break;
			}
			if ($frm[$i]!='TVI' AND $i==(count($frm)-1)){
				$v3.='0,';
			}
		}
			if ($k==2){
			if ($frm[$i]=='CVI'){
				$v3.='1,'; break;
			}
			if ($frm[$i]!='CVI' AND $i==(count($frm)-1)){
				$v3.='0,';
			}
		}
			if ($k==3){
			if ($frm[$i]=='CVBS'){
				$v3.='1,'; break;
			}
			if ($frm[$i]!='CVBS' AND $i==(count($frm)-1)){
				$v3.='0,';
			}
		}
		}
	}
}

$name=$_POST['namered'];
$opis=$_POST['opis'];
$mintemp=$_POST['mintemp'];
$maxtemp=$_POST['maxtemp'];
$price=$_POST['price'];
$maxprice=$_POST['maxprice'];
$rasresh=$_POST['rasresh'];
$prod=$_POST['prodred'];
$const=$_POST['constred'];
$ugol=$_POST['ugol'];

$qs="INSERT INTO vc(name, construct, price, ugol, produser,AHD,TVI,CVI,CVBS,pomeshenie,ulitsa,mobsov,wireless,simcards,datchdvizh,AV,nightmode,audio,memorycard,P2P,Onvif,rasreshenie,mint,maxt,nalichie,opisaniecam)
VALUES ('".$name."',".$const.",".$price.",".$ugol.",".$prod.",".$v3.$v1.$v2.$rasresh.",".$mintemp.",".$maxtemp.",1,'".$opis."')";
echo($qs);
$cpo=$db->query($qs);
if (!empty($_FILES['image']['tmp_name'])) {
	$path = "cam/".$_POST['namered'].".jpeg";
	move_uploaded_file($_FILES['image']['tmp_name'], $path);
}

echo "<div class='gudotvet'>Добавление товара выполнено</div>";
mysqli_close($db);
}
else{
	echo "<div class='badotvet'>Или файл не прикреплен, или размер файла слишком большой, или поля не все заполнены</div>";
  mysqli_close($db);
}
?>
