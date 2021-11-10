<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Chat</title>
    <link rel="stylesheet" href="style/style3.css" />
</head>
<body>
<div class='chats'>
<div class="chatlist"></div>	
	<div class="chat-result" id="da2" >
		</div>
    <textarea  name="chat-message" class="chat"  placeholder="Введите сообщение">
    </textarea>
<div class="send">Отправить</div>
</div>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript">
var d = new Date();
var loc = Date.UTC(d.getFullYear(), d.getMonth(), d.getDate(), d.getHours(), d.getMinutes(), d.getSeconds());
window.time_zone = ((<?php echo time();?> - loc/1000)/60).toFixed(0);
function two(num) { return ("0" + num).slice(-2);}
function mydate(t) {
  var d = new Date((t-window.time_zone*60)*1000);
  return two(d.getUTCDate())+'.'+ two(d.getUTCMonth()+1)+'.'+d.getUTCFullYear()+' '+ two(d.getUTCHours())+':'+ two(d.getUTCMinutes());
}
</script>
<script src="script/script3.js"></script>
</body>
</html>