<?php
include 'config.php';
$metka=$_POST['met'];
$query='SELECT count(*) FROM users WHERE user!="1m1" AND kolvo>0 OR type="CON"';
$cpo=$db->query($query);
$cpro=mysqli_fetch_array($cpo);
$data['post']=$_POST['met'];
$data['kolvo']=$cpro[0];
$query='SELECT * FROM users WHERE user!="1m1" AND kolvo>0 OR type="CON" ORDER BY mes_date DESC LIMIT '.$metka.',15';
$cpo=$db->query($query);
$data['query']=$query;
While($cpro=mysqli_fetch_assoc($cpo)){
	$user['user']=$cpro['user'];
	$user['FromUser']=$cpro['FromUser'];
	$user['mes_date']=$cpro['mes_date'];
	$user['m_text']=$cpro['m_text'];
	$user['vos']=$cpro['vos'];
	$user['vis']=$cpro['vis'];
	$user['unreadkolvo']=$cpro['unreadkolvo'];
	$data['users'][]=$user;
}
$data=json_encode($data);
echo $data;
mysqli_close($db);
?>