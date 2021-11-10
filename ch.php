<?php
$db = mysqli_connect('localhost:3306','mysqladmin','jubae3shi7Th','tg');
$t=time();
echo $t;
$query0='SELECT formid FROM coockie WHERE lifetime<'.$t;
$cpo=$db->query($query0);
$cpro=mysqli_fetch_assoc($cpo);
print_r($cpro);
foreach ($cpro as $c) {
                    $query='DROP TABLE '.$c;
                    $db->query($query);
                	};
$query='DELETE FROM users WHERE user IN (SELECT formid FROM coockie WHERE lifetime<'.$t.')';
$query2='DELETE FROM coockie WHERE lifetime<'.$t;
$db->query($query);
$db->query($query2);
mysqli_close($db);
?>