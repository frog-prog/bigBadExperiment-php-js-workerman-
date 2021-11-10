window.lr='chat';
function get_cookie ( cookie_name )
{
  var results = document.cookie.match ( '(^|;) ?' + cookie_name + '=([^;]*)(;|$)' );
 
  if ( results )
    return (unescape(results[2]));
  else
    return null;
}
function message(data) {
    if (window.lr=='chat'){
        n=document.querySelector('.chat-result');
        d=mydate(data.date);
            s=document.createElement('div');
            s.className='section';
            s.style.Width="100%";
            v=document.createElement('div');
            v.className='message';
            s.id=data.idm;
            v.style.display='flex';
            s.style.display='flex';
            v.style.WebkitFlexDirection = "row"; // Safari 6.1+
            v.style.flexDirection = "row";
            v.style.WebkitJustifyContent = "space-between"; // Код для Safari 6.1+
            if (data.FromUser=='1m1'){
            s.style.justifyContent = "flex-start";
            v.innerHTML='<div class="FromName">Компания</div><div class="MessageText">'+data.MessageText+'</div>'+ '<div class="date">'+d+'</div>'+'<div class="readed"></div>';
        }
        else{
            s.style.justifyContent = "flex-end";
            v.innerHTML='<div class="FromName">Я</div><div class="MessageText">'+data.MessageText+'</div>'+ '<div class="date">'+d+'</div>'+'<div class="readed"></div>';
        }
            v.style.maxWidth="50%";
            a=document.querySelectorAll('.section');
            s.style.order='1';
            a.forEach(function(e) {
                w=Number(e.style.order);
                w=w+1;
                e.style.order=w;
                }
            );
            s.appendChild(v);
            n.appendChild(s);
        }
}
    
    document.querySelector('.send').addEventListener('click', function(){
        if (document.querySelector('.chat').value=='' || document.querySelector('.chat').value.match(/^[ ]+$/)) {
        console.info('Неотправлено');
        document.querySelector('.chat').value='';
        }
        else{
         messageData = {
            action: 'message',
            MessageText: document.querySelector('.chat').value,
            FromUser:document.querySelector('.chat').id,
            ToUser:'1m1'
        }
            str=JSON.stringify(messageData);
            socket.send(str);
            console.info('Отправлено');
            console.info(messageData);
            document.querySelector('.chat').value='';
        }
    });

    id=document.querySelector('.chat');
    id=id.id;
    x = get_cookie( "user" );
    adr='ws://127.0.0.1:27800/?user='+id+'&coockie='+x;
    var socket = new WebSocket(adr);
    
    const socketMessageListener = (event) => {
    data=JSON.parse(event.data);
        if (data.action=='Ping'){
            socket.send('{"action":"Pong"}');
        }
        else{
             message(data);
        }
    };

    const socketOpenListener = (event) => {
    console.log('Connected');
    };

    const socketCloseListener = (event) => {
    if (socket) {
        console.error('Обеспечиваем соединение');
    }
    socket = new WebSocket(adr);
    socket.addEventListener('open', socketOpenListener);
    socket.addEventListener('message', socketMessageListener);
    socket.addEventListener('close', socketCloseListener);
    };

    socketCloseListener();                    