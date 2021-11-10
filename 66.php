<?php
include 'config.php';
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

if (isset($_POST['sredared']) AND isset($_POST['dopred']) AND isset($_POST['frmred']) AND isset($_POST['namered']) AND isset($_POST['mintemp']) AND isset($_POST['maxtemp']) AND isset($_POST['price']) AND isset($_POST['squere']) AND isset($_POST['prodred']) AND isset($_POST['constred']) AND isset($_POST['power']) AND isset($_FILES['image']) AND $_FILES['image']['size']<2097152 AND $_FILES['image']['size']>20) {


if (isset($_POST['dopred'])){
	$dop=$_POST['dopred'];
		for ($k=0;$k<4; $k++) {
		for ($i=0;$i<count($dop);$i++){
			if ($k==0){
			if ($dop[$i]=='ochlazhdenie'){
				$v2.='1,'; break;
			}
			if ($dop[$i]!='ochlazhdenie' AND $i==(count($dop)-1)){
				$v2.='0,';
			}
		}
			if ($k==1){
			if ($dop[$i]=='ventilyacia'){
				$v2.='1,'; break;
			}
			if ($dop[$i]!='ventilyacia' AND $i==(count($dop)-1)){
				$v2.='0,';
			}
		}
			if ($k==2){
			if ($dop[$i]=='obogrev'){
				$v2.='1,'; break;
			}
			if ($dop[$i]!='obogrev' AND $i==(count($dop)-1)){
				$v2.='0,';
			}
		}
			if ($k==3){
			if ($dop[$i]=='osushenie'){
				$v2.='1,'; break;
			}
			if ($dop[$i]!='osushenie' AND $i==(count($dop)-1)){
				$v2.='0,';
			}
		}
		}
	}
}



$name=$_POST['namered'];
$shum=$_POST['mintemp'];
$opis=$_POST['opis'];
$shirina=$_POST['maxtemp'];
$price=$_POST['price'];
$squere=$_POST['squere'];
$prod=$_POST['prodred'];
$const=$_POST['constred'];
$power=$_POST['power'];
$invertor=$_POST['sredared'];
$vnblok=$_POST['frmred'];

$qs="INSERT INTO condit(name, invertor, constructia, proisvoditel, tipvnutbl,ploshad,moshnost,shum,shirina,cena,ochlazhdenie,ventilyacia,obogrev,osushenie,nalichie,opisaniecon)
VALUES ('".$name."',".$invertor.",".$const.",".$prod.",".$vnblok.",".$squere.",".$power.",".$shum.",".$shirina.",".$price.",".$v2."1,'".$opis."')";
$cpo=$db->query($qs);

if (!empty($_FILES['image']['tmp_name'])) {
	$path = "cond/".$_POST['namered'].".jpeg";
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
