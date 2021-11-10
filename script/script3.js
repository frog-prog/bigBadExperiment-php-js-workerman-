window.lr='chat';
function get_cookie ( cookie_name )
{
  var results = document.cookie.match ( '(^|;) ?' + cookie_name + '=([^;]*)(;|$)' );
 
  if ( results )
    return (unescape(results[2]));
  else
    return null;
}
var sob=0;
function message(data) {
    con=document.querySelector('.chatlist');
    a=document.querySelectorAll('.listitem');
    if (window.lr=='chats'){
        n=document.querySelector('#'+data.FromUser);
        if (n==null){
            a.forEach(function(e) {
                w=e.style.order;
                w=Number(w)+1;
                e.style.order=w;
                }
            );
            v=document.createElement('div');
            v.className='listitem';
            v.id=data.FromUser;
            v.style.order='1';
            d=mydate(data.date);
            v.innerHTML='<div class="name">'+data.FromUser+'</div><div class="MessageText">'+data.MessageText+'</div>'+ '<div class="date">'+d+'</div>'+ '<div class="unread" style="display:flex"></div>';
            con.appendChild(v);
        }
        else{
            a=document.querySelectorAll('.listitem');
            t=Number(n.style.order);
            a.forEach(function(e) {
                w=Number(e.style.order);
                if (t>=w){
                w=w+1;
                e.style.order=w;
            }
                }
            );
            d=mydate(data.date);
            n.innerHTML='<div class="name">'+data.FromUser+'</div><div class="MessageText">'+data.MessageText+'</div>'+ '<div class="date">'+d+'</div>'+ '<div class="unread" style="display:flex"></div>';
            n.style.order='1';
        }
    }
    if (window.lr=='chat'){
        console.info(data);
        n=document.querySelector('.chat-result');
        b=document.querySelector('#'+data.FromUser);
        a=document.querySelectorAll('.listitem');
        if (sob==data.FromUser){
            t=Number(b.style.order);
            a.forEach(function(e) {
                w=Number(e.style.order);
                if (t>=w){
                w=w+1;
                e.style.order=w;
            }
                }
            );
            d=mydate(data.date);
            b.innerHTML='<div class="name">'+data.FromUser+'</div><div class="MessageText">'+data.MessageText+'</div>'+ '<div class="date">'+d+'</div>'+ '<div class="unread" style="display:none"></div>';
            b.style.order='1';
            s=document.createElement('div');
            s.className='section';
            s.style.Width="100%";
            v=document.createElement('div');
            v.className='message';
            s.id=data.idm;
            s.style.display='flex';
            s.style.WebkitFlexDirection = "row"; // Safari 6.1+
            s.style.flexDirection = "row";
            v.style.WebkitJustifyContent = "space-between"; // Код для Safari 6.1+
        if (data.FromUser=='1m1'){
            s.style.justifyContent = "flex-start";
            v.innerHTML='<div class="name">Я</div><div class="MessageText">'+data.MessageText+'</div>'+ '<div class="date">'+d+'</div>';
        }
        else{
            s.style.justifyContent = "flex-end";
            v.innerHTML='<div class="name">'+data.FromUser+'</div><div class="MessageText">'+data.MessageText+'</div>'+ '<div class="date">'+d+'</div>';
        }
            v.style.maxWidth="50%";
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
        else{
            n=document.querySelector('#'+data.FromUser);
        if (n==null){
            a.forEach(function(e) {
                w=e.style.order;
                w=Number(w)+1;
                e.style.order=w;
                }
            );
            v=document.createElement('div');
            v.className='listitem';
            v.id=data.FromUser;
            v.style.order='1';
            d=mydate(data.date);
            v.innerHTML='<div class="name">'+data.FromUser+'</div><div class="MessageText">'+data.MessageText+'</div>'+ '<div class="date">'+d+'</div>'+ '<div class="unread" style="display:flex"></div>';
            con.appendChild(v);
        }
        else{
            a=document.querySelectorAll('.listitem');
            t=Number(n.style.order);
            a.forEach(function(e) {
                w=Number(e.style.order);
                if (t>=w){
                w=w+1;
                e.style.order=w;
            }
                }
            );
            d=mydate(data.date);
            n.innerHTML='<div class="name">'+data.FromUser+'</div><div class="MessageText">'+data.MessageText+'</div>'+ '<div class="date">'+d+'</div>'+ '<div class="unread" style="display:flex"></div>';
            n.style.order='1';
        }
        }
    }
}
$(".chatlist").on('click','.listitem' ,  function(){
n=document.querySelector('.chat-result');
document.querySelector('.chat').style.display='flex';
document.querySelector('.send').style.display='flex';
n.id='d'+data.FromUser;
n.style.display='flex';

});

    adr='ws://127.0.0.1:27800/?user=1m1'+'&coockie=e3r4t5';
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