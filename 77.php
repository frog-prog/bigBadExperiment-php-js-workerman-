<?php
include 'config.php';
if (($_POST['namekomp'])==false){
	echo "<div class='badotvet'>Заполните поле</div>";
	mysqli_close($db);
}
else{
	$name=$_POST['namekomp'];
	$qs="INSERT INTO conprod(connameprod) 
VALUES ('".$name."')";
$cpo=$db->query($qs);
echo "<div class='gudotvet'>Добавление новой компании-производителя выполнено</div>";
mysqli_close($db);
}
?>