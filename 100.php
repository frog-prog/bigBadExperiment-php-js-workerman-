<?php
include 'config.php';
	$id=$_POST['id'];
	$filenamemin=$_POST['name'].'m';
	$filename=$_POST['name'];
	$qs="DELETE FROM condit WHERE id=".$id;
$cpo=$db->query($qs);
$pathmin = $_SERVER['DOCUMENT_ROOT']."/cond/".$filenamemin.".jpeg";
$path = $_SERVER['DOCUMENT_ROOT']."/cond/".$filename.".jpeg";
unlink($pathmin);
unlink($path);
mysqli_close($db);
?>
