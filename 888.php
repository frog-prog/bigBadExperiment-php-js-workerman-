<?php
include 'config.php';
if (isset($_POST['pass'])){
	$pass=$_POST['pass'];
}
if ($pass=='superadmin'){
		$qs4='UPDATE autorize SET popitki=0';
$p18=$db->query($qs4);
echo "<div class='gudotvet'>Обнуление прошло успешно
	<div class='knopka'>
	<img class='nulll' src='putin.jpg'>
	</div>
</div>";
mysqli_close($db);
}
else{
$qs1='SELECT popitki FROM autorize';
$p15=$db->query($qs1);
$popitki=mysqli_fetch_array($p15);
if ($popitki[0]>2) {
	echo "<div class='badotvet'>У вас закончились попытки</div>";
	mysqli_close($db);
}
else{
$qs='SELECT password FROM autorize';
$p14=$db->query($qs);
$passorig=mysqli_fetch_array($p14);
if ($passorig[0]==$pass){
	echo "<div class='gudotvet'>
	<div class='knopka'>
<div id='vnestikom'><a href='cond_admin.php' target='_blank'>Редактор базы кондиционеров</a></div>
</div>
<div class='knopka'>
<div id='vnesti'><a href='cam_admin.php' target='_blank'>Редактор базы камер</a></div>
</div>
</div>";
$qs3='UPDATE autorize SET popitki=0';
$p17=$db->query($qs3);
}
else{
	$qs2='UPDATE autorize SET popitki=popitki+1';
	$p16=$db->query($qs2);
	echo "<div class='badotvet'>Пароль неверный</div>";
}
mysqli_close($db);
}
}
?>
