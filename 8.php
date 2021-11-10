<?php
include 'config.php';
if ($_POST['namekonst']==false){
	echo "<div class='badotvet'>Заполните поле</div>";
	mysqli_close($db);
}
else{
	$name=$_POST['namekonst'];
	$qs="INSERT INTO cons(nameconst) 
VALUES ('".$name."')";
$cpo=$db->query($qs);
echo "<div class='gudotvet'>Добавление новой конструкции выполнено</div>";
mysqli_close($db);
}
?>