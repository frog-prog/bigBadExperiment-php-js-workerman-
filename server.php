<?php
// Подключаем библиотеку Workerman
require_once __DIR__ .'/workerman/vendor/autoload.php';

use Workerman\Lib\Timer;
use Workerman\Worker;
$context = array(
    'ssl' => array(
			//'allow_self_signed' => true,
        'local_cert'  => '/var/www/www-root/data/www/condicam.ru/ssl/cert.crt', // 也可以是crt文件
        'local_pk' =>'/var/www/www-root/data/www/condicam.ru/ssl/key.key',
        'verify_peer'=> false
    )
);
$c=file_get_contents('/var/www/www-root/data/www/condicam.ru/ssl/cert.crt');
echo $c;

$connections = []; // сюда будем складывать все подключения
// Стартуем WebSocket-сервер на порту 27800

$worker = new Worker("Websocket://condicam.ru:8000",$context);
$worker->transport = 'ssl';
$worker->onWorkerStart = function($worker) use (&$connections)
{
	print_r(time());
    $interval = 5; // пингуем каждые 5 секунд
    Timer::add($interval, function() use(&$connections){
    	$db = mysqli_connect('localhost:3306','mysqladmin','jubae3shi7Th','tg');
        foreach ($connections as $c) {
            if ($c->pingWithoutResponseCount >= 3) {
                $t=time();
                $messageData['action'] = 'CL';
                $messageData['FromUser'] = $c->id;
                $messageData['vis']=$t;
                $message = json_encode($messageData);
                unset($connections[$c->id]);
                $c->destroy(); // уничтожаем соединение
                echo "Удалил: "; print_r($c->id);
            	if($c->id=='1m1'){
                	foreach ($connections as $c) {
                    $c->send($message);
                	}
            	}
            	else{
            	 	if (isset($connections['1m1'])){
            			$connections['1m1']->send($message);
            		}
            }
			$query='UPDATE users SET vis='.$t.' WHERE user="'.$c->id.'"';
			$db->query($query);
            print_r($message);
            }
            else {
            	$messageData['action'] = 'Ping';
            	$messageData['MessageText']='Ping';
            	$messageData['FromUser']='Server';
                $message = json_encode($messageData);
                $c->send($message);
                $c->pingWithoutResponseCount++; // увеличиваем счетчик пингов
            }
        }
         mysqli_close($db);
    });
};

$worker->onConnect = function($connection) use(&$connections){
	echo 'есть соединение ';
    // Эта функция выполняется при подключении пользователя к WebSocket-серверу
    $connection->onWebSocketConnect = function($connection) use (&$connections){
    	$db = mysqli_connect('localhost:3306','mysqladmin','jubae3shi7Th','tg');
        // Добавляем соединение в список
        $connection->pingWithoutResponseCount = 0; // счетчик безответных пингов
        if (isset($_GET['user']) && isset($_GET['coockie'])){

        	if ($_GET['user']!='1m1' && $_GET['coockie']!='e3r4t5'){
        	$p9='SELECT count(*) FROM coockie WHERE coockie="'.$_GET['coockie'].'" AND formid="'.$_GET['user'].'"';
			$cpo=$db->query($p9);
			$cpro=mysqli_fetch_array($cpo);
			if ($cpro[0]==0) {
				echo "DESTROY";
        $messageData['action'] = 'gg';
        $connection->send(json_encode($messageData));
        $connection->close();
				$connection->destroy();
			}
			else{
				$p6='SELECT count(*) FROM users WHERE user="'.$_GET['user'].'"';
				$cpo=$db->query($p6);
				echo $p6;
				$cpro=mysqli_fetch_array($cpo);
				echo $cpro[0];
			if ($cpro[0]==0) {
				$t=time();
				$p7= 'INSERT INTO users(user, kolvo, type, m_id, FromUser, ToUser, mes_date, readed, m_text, vos, vis, unreadkolvo) VALUES("'.$_GET['user'].'",0, "CON", NULL, NULL, NULL, '.$t.', NULL, "Пользователь зашел на сайт", 0, 0, 0)';
				echo $p7;
        		$cpo=$db->query($p7);
				$query='UPDATE users SET vos='.$t.' WHERE user="'.$_GET['user'].'"';
				$db->query($query);
				$p8='CREATE TABLE '.$_GET['user'].' (m_id  int(12) unsigned auto_increment primary key, FromUser VARCHAR(40), ToUser VARCHAR(40),  mes_date BIGINT(20), readed INT(1), m_text TEXT )';
        		$cpo=$db->query($p8);
        		$connection->id=$_GET['user'];
        		$connections[$connection->id] = $connection;
        		$messageData['action'] = 'Handshake';
        		$messageData['text']='Hello';
        		$connection->send(json_encode($messageData));
        		print_r($messageData);
        		$messageData['action'] = 'CON';
                $messageData['FromUser'] = $connection->id;
                $messageData['vos']=$t;
                $message = json_encode($messageData);
                print_r($messageData);
                if (isset($connections['1m1'])){
            	$connections['1m1']->send($message);
            };
        	}
        	else{
        		$t=time();
				$query='UPDATE users SET vos='.$t.' WHERE user="'.$_GET['user'].'"';
				$db->query($query);
        		$connection->id=$_GET['user'];
        		$connections[$connection->id] = $connection;
        		$messageData['action'] = 'Handshake';
        		$messageData['text']='Hello again';
        		$connection->send(json_encode($messageData));
        		print_r($messageData);
        		$messageData['action'] = 'CON';
                $messageData['FromUser'] = $connection->id;
                $messageData['vos']=$t;
                $message = json_encode($messageData);
                print_r($messageData);
                if (isset($connections['1m1'])){
            	$connections['1m1']->send($message);
            };
        	}
    		}
        $query='SELECT count(*) FROM '.$_GET['user'].' WHERE FromUser="'.$_GET['user'].'" AND mes_date>'.$t.'-3600';
              $cpo=$db->query($query);
            $cpro=mysqli_fetch_array($cpo);
            $kvo=$cpro[0];
            if($kvo>300){
              $messageData['action'] = 'gg';
        $connections[$_GET['user']]->send(json_encode($messageData));
              $connections[$_GET['user']]->close();
              unset($connections[$_GET['user']]);
              echo "Забанен ".$_GET['user'];
            }
            else{
            $token = "1748602304:AAE-M6dnKMHVnPtyOzxtCqFIFAwcdhuU6Ds";
      $chat_id = "-597859853";
      $txt = "Пользователь ".$_GET['user']." на сайте";
      $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
      if ($sendToTelegram) {
          echo "Передача прошла успешно";
      } else {
          echo "Error";
      }
    }
        }
        else{
        	$t=time();
				$query='UPDATE users SET vos='.$t.' WHERE user="'.$_GET['user'].'"';
				$db->query($query);
        	$connection->id=$_GET['user'];
        		$connections[$connection->id] = $connection;
        		$messageData['action'] = 'Handshake';
        		$messageData['text']='Hello again';
        		$connection->send(json_encode($messageData));

        		$messageData['action'] = 'CON';
                $messageData['FromUser'] = '1m1';
                $messageData['vos']=$t;
                $message = json_encode($messageData);
                foreach ($connections as $c) {
                	if ($c->id!='1m1'){
                    $c->send($message);
                }
                };
                print_r($message);
        }
    	}
        else{
        	$connection->destroy();
        	echo "DESTROY";
        }
        mysqli_close($db);
    };
};

$worker->onClose = function($connection) use(&$connections)
{
};

$worker->onMessage = function($connection, $message) use (&$connections)
{
	$db = mysqli_connect('localhost:3306','mysqladmin','jubae3shi7Th','tg');
    $messageData = json_decode($message, false);
    $action = $messageData->action;

    if ($action == 'Pong') {
        // При получении сообщения "Pong", обнуляем счетчик пингов
        $connection->pingWithoutResponseCount = 0;
    }
    else {
    	if ($action=='readed') {
    	$FromUser=$messageData->FromUser;
    	$ToUser = $messageData->ToUser;
    	print_r($messageData);
    	if ($FromUser=='1m1'){
           	$query='UPDATE '.$ToUser.' SET readed=1 WHERE FromUser="'.$ToUser.'"';
           	$db->query($query);
           	$query='UPDATE users SET unreadkolvo=0 WHERE user="'.$ToUser.'"';
           	$db->query($query);
           	if (isset($connections[$ToUser])){
           		$Comessage['action'] = 'readed';
           		$connections[$ToUser]->send(json_encode($Comessage));
           	}
           }
           else{
           	$query='UPDATE '.$FromUser.' SET readed=1 WHERE FromUser="'.$ToUser.'"';
           	print_r($query);
           	$db->query($query);
           	if (isset($connections[$ToUser])){
           		$Comessage['action'] = 'readed';
           		$connections[$ToUser]->send(json_encode($Comessage));
           	}
           }
    	}
    	else{
    		if ($action=='typing'){
    			$FromUser=$messageData->FromUser;
    	$ToUser = $messageData->ToUser;
    	print_r($messageData);
    	if (isset($connections[$ToUser])){
           		$Comessage['action'] = 'typing';
           		$Comessage['FromUser']=$FromUser;
           		$Comessage['ToUser']='1m1';
           		$connections[$ToUser]->send(json_encode($Comessage));
           	}
    		}
    		else{
          if ($action=='zayavka'){
print_r($messageData);
  $arr['Имя пользователя: '] = $messageData->MessageName;
  $arr['Время звонка: '] = $messageData->MessageTime;
  $arr['Номер телефона: '] = $messageData->MessageNum;
  $arr['Пожелания: '] = $messageData->MessagePozh;
  $arr['ID: '] = $messageData->FromUser;
print_r($arr);
$txt='';
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

            $token = "1820679065:AAGia26pqDvTnD1hRnVGu3ZUsZ1MmYCVrDk";
    $chat_id = "-551689124";
    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
    if ($sendToTelegram) {
        echo "Передача заявки прошла успешно";
    } else {
        echo "Error";
    }
          }
          else{
    $ToUser = $messageData->ToUser;
    $action = $messageData->action;
    $MessageText=$messageData->MessageText;
    $FromUser=$messageData->FromUser;

        // Дополняем сообщение данными об отправителе

        // Преобразуем специальные символы в HTML-сущности в тексте сообщения
        $MessageText = htmlspecialchars($MessageText);
        // Заменяем текст заключенный в фигурные скобки на жирный
       $MessageText = preg_replace('/\{(.*)\}/u', '<b>\\1</b>', $MessageText);

       if (isset($connections[$ToUser])) {
            $Comessage['action'] = 'message';
           	$Comessage['ToUser'] = $ToUser;
           	$Comessage['MessageText'] = $MessageText;
           	$Comessage['FromUser']=$FromUser;
           	$Comessage['date']=time();
           	$Comessage['readed']=0;
           	if ($FromUser=='1m1'){
           	$query='INSERT INTO '.$ToUser.'(FromUser,ToUser,mes_date,readed,m_text) VALUES("1m1","'.$ToUser.'",'.$Comessage['date'].',0,"'.$MessageText.'")';
           	$mid='SELECT MAX(m_id) FROM '.$ToUser;
           }
           else{
           	$query='INSERT INTO '.$FromUser.'(FromUser,ToUser,mes_date,readed,m_text) VALUES("'.$FromUser.'","1m1",'.$Comessage['date'].',0,"'.$MessageText.'")';
           	$mid='SELECT MAX(m_id) FROM '.$FromUser;
           }
           echo $mid;
           	$db->query($query);
           	$cpo=$db->query($mid);
           	$cpro=mysqli_fetch_array($cpo);
           	$Comessage['m_id']=$cpro[0];
           	$connections[$ToUser]->send(json_encode($Comessage));
           	$connections[$FromUser]->send(json_encode($Comessage));
           	print_r($Comessage);
           }
        else {
        $Comessage['action'] = 'message';
           	$Comessage['ToUser'] = $ToUser;
           	$Comessage['MessageText'] = $MessageText;
           	$Comessage['FromUser']=$FromUser;
           	$Comessage['date']=time();
           	$Comessage['readed']=0;
           	if ($FromUser=='1m1'){
           	$query='INSERT INTO '.$ToUser.'(FromUser,ToUser,mes_date,readed,m_text) VALUES("1m1","'.$ToUser.'",'.$Comessage['date'].',0,"'.$MessageText.'")';
           	$mid='SELECT MAX(m_id) FROM '.$ToUser;
            }
            else{
           	$query='INSERT INTO '.$FromUser.'(FromUser,ToUser,mes_date,readed,m_text) VALUES("'.$FromUser.'","1m1",'.$Comessage['date'].',0,"'.$MessageText.'")';
           	$mid='SELECT MAX(m_id) FROM '.$FromUser;
            }
            echo $query;
           	$db->query($query);
           	$cpo=$db->query($mid);
           	$cpro=mysqli_fetch_array($cpo);
           	echo '    '.$cpro[0];
           	$Comessage['m_id']=$cpro[0];
           	echo '    '.$Comessage['m_id'];
           	$connections[$FromUser]->send(json_encode($Comessage));
        }
        if ($FromUser=='1m1'){
           	$query='SELECT kolvo, unreadkolvo FROM users WHERE user="'.$ToUser.'"';
           	$cpo=$db->query($query);
           	$cpro=mysqli_fetch_array($cpo);
           	$kvo=$cpro[0];
           	$kvo++;
           	$query='UPDATE users SET kolvo='.$kvo.', type="'.$Comessage['action'].'", m_id='.$Comessage['m_id'].', FromUser="'.$Comessage['FromUser'].'",
           	 ToUser="'.$Comessage['ToUser'].'", mes_date='.$Comessage['date'].', readed=0, m_text="'.$Comessage['MessageText'].'"
           	 WHERE user="'.$ToUser.'"';
           	 $db->query($query);
            }
            else{
              $token = "1748602304:AAE-M6dnKMHVnPtyOzxtCqFIFAwcdhuU6Ds";
      $chat_id = "-597859853";
      $txt = "Сообщение от пользователя ".$FromUser.": '".$MessageText."'";
      $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
      if ($sendToTelegram) {
          echo "Передача прошла успешно";
      } else {
          echo "Error";
      }
           	$query='SELECT kolvo, unreadkolvo FROM users WHERE user="'.$FromUser.'"';
           	$cpo=$db->query($query);
           	$cpro=mysqli_fetch_array($cpo);
           	$kvo=$cpro[0];
           	$kvou=$cpro[1];
           	$kvou++;
           	$kvo++;
           	$query='UPDATE users SET kolvo='.$kvo.', type="'.$Comessage['action'].'", unreadkolvo='.$kvou.', m_id='.$Comessage['m_id'].', FromUser="'.$Comessage['FromUser'].'",
           	 ToUser="'.$Comessage['ToUser'].'", mes_date='.$Comessage['date'].', readed=0, m_text="'.$Comessage['MessageText'].'"
           	 WHERE user="'.$FromUser.'"';
           	 $db->query($query);
             $query='SELECT count(*) FROM '.$FromUser.' WHERE FromUser="'.$FromUser.'" AND mes_date>'.$Comessage['date'].'-3600';
              $cpo=$db->query($query);
            $cpro=mysqli_fetch_array($cpo);
            $kvo=$cpro[0];
            if($kvo>300){
              $Comessage['action'] = 'gg';
        $connections[$FromUser]->send(json_encode($Comessage));
              $connections[$FromUser]->close();
              unset($connections[$FromUser]);
              echo "Забанен ".$FromUser;
            }
            }
        }
    }
}
}
mysqli_close($db);
};


Worker::runAll();
