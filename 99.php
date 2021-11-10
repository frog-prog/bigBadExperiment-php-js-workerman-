<?php
include 'config.php';
	$id=$_POST['id'];
	$value=$_POST['value'];
	$qs="UPDATE condit SET nalichie=".$value."  WHERE id=".$id;
$cpo=$db->query($qs);
mysqli_close($db);
?>