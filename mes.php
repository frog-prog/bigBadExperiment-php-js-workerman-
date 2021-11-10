<?php
include 'config.php';
$user=$_POST['user'];
$page=$_POST['Page'];
$p6='SELECT count(*) FROM users WHERE user="'.$_POST['user'].'"';
$cpo=$db->query($p6);
$cpro=mysqli_fetch_array($cpo);
if($cpro[0]>0){
$p6='SELECT count(*) FROM '.$user;
$cpo=$db->query($p6);
$cpro=mysqli_fetch_array($cpo);
$colz=$cpro[0];
$number_pages = (int)($colz/30);
		
		if(($colz%30) != 0) {
			$number_pages++;
		}
$data['kolvo']=$number_pages;
$data['page']=$page;
$pr1=30*($page-1);
$p6='SELECT * FROM '.$user.' ORDER BY m_id DESC LIMIT '.$pr1.',30';
$cpo=$db->query($p6);
While ($p8=mysqli_fetch_assoc($cpo)){
	$message['action']='message';
	$message['ToUser'] = $p8[ToUser];
	$message['MessageText'] = $p8['m_text'];
	$message['FromUser']=$p8['FromUser'];
	$message['date']=$p8['mes_date'];
	$message['readed']=$p8['readed'];
	$message['m_id']=$p8['m_id'];
	$data['messages'][]=$message;
}
}
else{
$data['kolvo']=0;
}
if(isset($_POST['adm'])){
	$user=$_POST['user'];
}
else{
	$user='1m1';
}
if($page==1){
		$p6='SELECT vos, vis FROM users WHERE user="'.$user.'"';
		$cpo=$db->query($p6);
		$cpro=mysqli_fetch_assoc($cpo);
		$data['vos']=$cpro['vos'];
		$data['vis']=$cpro['vis'];
	}
$data=json_encode($data);
echo $data;
mysqli_close($db);
?>
