<!DOCTYPE html> <!-- Объявление формата документа -->
<html>
<head> <!-- Техническая информация о документе -->
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<meta http-equiv='X-UA-Compatible' content='ie=edge'> <!-- Определяем кодировку символов документа -->
<title>...</title> <!-- Задаем заголовок документа -->
<link rel='stylesheet' type='text/css' href='style222.css'>
<link href='https://fonts.googleapis.com/css2?family=B612+Mono:ital@1&display=swap' rel='stylesheet'>
<script type='text/javascript' src='jquery-min-3.5.1.js'></script>
<script type="text/javascript">$(window).on('load', function () {
    var $preloader = $('#p_prldr'),
        $svg_anm   = $preloader.find('.svg_anm');
    $svg_anm.fadeOut();
    $preloader.delay(500).fadeOut('slow');
});
</script>
</head>
<body>
	<div id="p_prldr">
			<div class="svg_anm"></div>
	</div>
	<div class="vce">
<div class="chatcon">
<div class="bigchat">
	<div class="chatlist"><div class="info" id='alert'></div></div>
	<div class="vnok">
		<div class="str1">
		<div class="str2"><img src="spisok2.svg"></div>
		<div class="sobname"></div>	
		</div>
<div class='chats'>
	<div class="info2"><div class="vnname"></div><div class="vntime"></div></div>
	<div class="chat-result" >
		</div>
		<div id="p_prl">
			<div class="svg_an"></div>
	</div>
		<div class="info3"></div>
</div>
<div class="control">
    <textarea <?php echo 'id="'.$form.'"' ?> name="chat-message" class="chat"  placeholder="Введите сообщение"></textarea>
<div class="send">Send</div>
</div>
</div>
	</div>
</div>
</div>
<footer>
<script type="text/javascript">
	var d = new Date();
	var loc = Date.UTC(d.getFullYear(), d.getMonth(), d.getDate(), d.getHours(), d.getMinutes(), d.getSeconds());
window.time_zone = ((<?php echo time();?> - loc/1000)/60).toFixed(0);

function two(num) { return ("0" + num).slice(-2);}
b=document.querySelector('.bigchat');
b.style.height=document.documentElement.clientHeight-60+'px';
function mydate(t) {
  var d = new Date((t-window.time_zone*60)*1000);
  return two(d.getUTCDate())+'.'+ two(d.getUTCMonth()+1)+'.'+d.getUTCFullYear()+' в '+ two(d.getUTCHours())+':'+ two(d.getUTCMinutes());
}
</script>
<script type="text/javascript" src="admin.js"></script>
</footer>
</body>
</html>