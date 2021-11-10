<div class="dno">
<div class="o">
	<div class="a">
		<div class="c">
			Подать заявку
	</div>
</div>
	<div class="b">
		<div class="nadpis">
			Если вы устали искать подходящий вам по всем параметрам товар, или просто не нашли его, подайте заявку с пожеланиями нам. Мы вам перезвоним, уточним детали и найдем необходимое изделие.
		</div>
</div>
</div>
</div>
<?php include '3.php';?>
<footer>
<script type='text/javascript'>
	function condcard(el){
		card=document.createElement('a');
        			card.className='con card cardcon'+el.id;
        			card.id=el.id;
                    card.href='https://condicam.ru/conditioners/page='+window.page+'/id='+el.id;
        			im=document.createElement('div');
        			im.className='con im';
        			im.id=el.id;
        			img=document.createElement('img');
        			img.className='con cardim';
        			img.id=el.id;
        			img.src=el.path;
                    img.alt='Кондиционер '+el.name;
        			nam=document.createElement('strong');
        			nam.className='con name';
        			nam.id=el.id;
        			nam.textContent=el.name;
        			if (el.nalichie==1){
        			nal=document.createElement('div');
        			nal.className='con estnalichie';
        			nal.id=el.id;
        			nal.textContent='Есть в наличии';
        			}
        			else{
        				nal=document.createElement('div');
        			nal.className='con netnalichie';
        			nal.id=el.id;
        			nal.textContent='Нет в наличии';
        			}
        			rasr='Мощность:  '+el.moshnost+' Ватт';
        			ugol='Площадь:  '+el.ploshad+' М';
        			cen='Цена:  '+el.price+' руб';
        			s=document.createElement('sup');
        			s.textContent=2;
        			ras=document.createElement('div');
        			ras.className='con rasresh';
        			ras.id=el.id;
        			ras.textContent=rasr;
        			ug=document.createElement('div');
        			ug.className='con ugol';
        			ug.id=el.id;
        			ug.textContent=ugol;
        			ug.appendChild(s);
        			cena=document.createElement('div');
        			cena.className='con cena';
        			cena.id=el.id;
        			cena.textContent=cen;
        			zam="&concorz%5B%5D="+el.id;
        			cor=document.createElement('div');
        			cor.className='corzcon';
        			cor.id=el.id;
        			if (window.concorz.indexOf(zam)<0){
        			corz=document.createElement('div');
        			idi='con'+el.id;
        			corz.className='corz '+idi;
        			corz.style.background='#FCEA66';
                    corz.style.color='3433FF'
        			corz.textContent='В корзину';
        			}
        			else{
        				corz=document.createElement('div');
        			idi='con'+el.id;
        			corz.className='corz '+idi;
        			corz.style.color='#FCEA66';
                    corz.style.background='3433FF'
        			corz.textContent='В корзине';
        			}
        			im.appendChild(img);
        			cor.appendChild(corz);
        			card.appendChild(im);
        			tov.appendChild(nam);
        			card.appendChild(nam);
        			card.appendChild(nal);
        			card.appendChild(ras);
        			card.appendChild(ug);
        			card.appendChild(cena);
        			card.appendChild(cor);
        			tov.appendChild(card);
	}

	function camcard(el){
		card=document.createElement('a');
        			card.className='cam card cardcam'+el.id;
        			card.id=el.id;
                    card.href='https://condicam.ru/cameras/page='+window.page+'/id='+el.id;
        			im=document.createElement('div');
        			im.className='cam im';
        			im.id=el.id;
        			img=document.createElement('img');
        			img.className='cam cardim';
        			img.id=el.id;
        			img.src=el.path;
                    img.alt='Камера видеонаблюдения '+el.name;
        			nam=document.createElement('strong');
        			nam.className='cam name';
        			nam.id=el.id;
        			nam.textContent=el.name;
        			if (el.nalichie==1){
        			nal=document.createElement('div');
        			nal.className='cam estnalichie';
        			nal.id=el.id;
        			nal.textContent='Есть в наличии';
        			}
        			else{
        				nal=document.createElement('div');
        			nal.className='cam netnalichie';
        			nal.id=el.id;
        			nal.textContent='Нет в наличии';
        			}
        			rasr='Разрешение:  '+el.rasresh+' МП';
        			ugol='Угол:  '+el.ugol+'°';
        			cen='Цена:  '+el.price+' руб';
        			ras=document.createElement('div');
        			ras.className='cam rasresh';
        			ras.id=el.id;
        			ras.textContent=rasr;
        			ug=document.createElement('div');
        			ug.className='cam ugol';
        			ug.id=el.id;
        			ug.textContent=ugol;
        			cena=document.createElement('div');
        			cena.className='cam cena';
        			cena.id=el.id;
        			cena.textContent=cen;
        			zam="&camcorz%5B%5D="+el.id;
        			cor=document.createElement('div');
        			cor.className='corzcam';
        			cor.id=el.id;
        			if (window.camcorz.indexOf(zam)<0){
        			corz=document.createElement('div');
        			idi='cam'+el.id;
        			corz.className='corz '+idi;
        			corz.style.background='#FCEA66';
                    corz.style.color='3433FF'
        			corz.textContent='В корзину';
        			}
        			else{
        				corz=document.createElement('div');
        			idi='cam'+el.id;
        			corz.className='corz '+idi;
        			corz.style.background='#3433FF';
                    corz.style.color='#FCEA66';
        			corz.textContent='В корзине';
        			}
        			im.appendChild(img);
        			cor.appendChild(corz);
        			card.appendChild(im);
        			tov.appendChild(nam);
        			card.appendChild(nam);
        			card.appendChild(nal);
        			card.appendChild(ras);
        			card.appendChild(ug);
        			card.appendChild(cena);
        			card.appendChild(cor);
        			tov.appendChild(card);
	}
	function glider(par1,men1) {
	par = document.querySelector(par1);
	men =document.querySelector(men1);
		men.classList.toggle('menactive');
		par.classList.toggle('practive');
}
var st=[];
st = {'page': window.page,
'lr':window.lr,
'kolvo':window.kolvo,
'sost':window.tovarsost,
'lh':window.lasthref,
'lt':window.lasttitle,
'tovar':document.querySelector('.contentcardcam').innerHTML,
'tovari':document.querySelector('.catalog').innerHTML};
window.history.replaceState(st,null,document.location.href);

if (window.lr=='gl'){

        document.querySelector('.dno').style.display='flex';
        document.querySelector('.camerfilt').style.display='none';
        document.querySelector('.condfilt').style.display='none';
        document.querySelector('.catalog').style.display='none';
        document.querySelector('.tekst').style.display='flex';
        document.querySelector('.contentcardcam').style.display='none';
        document.querySelector('.catalog-conteiner').style.display='flex';
        document.querySelector('.chatcon').style.display='none';
        document.getElementById(window.lr).classList.remove('nazhat');
        document.getElementById('gl').classList.toggle('nazhat');
}
else{
    if (window.lr=='kon'){
        l=document.querySelector('#vlevo');
            r=document.querySelector('#vpravo');
        document.querySelector('.dno').style.display='flex';
        document.querySelector('.camerfilt').style.display='none';
        document.querySelector('.condfilt').style.display='flex';
        document.querySelector('.catalog').style.display='flex';
        document.querySelector('.tekst').style.display='none';
        document.querySelector('.contentcardcam').style.display='none';
        document.querySelector('.catalog-conteiner').style.display='flex';
        document.querySelector('.chatcon').style.display='none';
        document.getElementById(window.lr).classList.remove('nazhat');
        document.getElementById('kon').classList.toggle('nazhat');
        if (window.page>1 && window.page<window.kolvo){
            l.style.display='block';
            r.style.display='block';
            }
        if (window.page>1 && window.page==window.kolvo){
            l.style.display='block';
            r.style.display='none';
        }
        if (window.page==1){
            l.style.display='none';
            r.style.display='block';
        }
}
}
if (window.lr=='kam'){
    l=document.querySelector('#vlevo');
            r=document.querySelector('#vpravo');

        document.querySelector('.dno').style.display='flex';
        document.querySelector('.camerfilt').style.display='flex';
        document.querySelector('.condfilt').style.display='none';
        document.querySelector('.catalog').style.display='flex';
        document.querySelector('.tekst').style.display='none';
        document.querySelector('.contentcardcam').style.display='none';
        document.querySelector('.catalog-conteiner').style.display='flex';
        document.querySelector('.chatcon').style.display='none';
        document.getElementById(window.lr).classList.remove('nazhat');
        document.getElementById('kam').classList.toggle('nazhat');
        if (window.page>1 && window.page<window.kolvo){
            l.style.display='block';
            r.style.display='block';
            }
        if (window.page>1 && window.page==window.kolvo){
            l.style.display='block';
            r.style.display='none';
        }
        if (window.page==1){
            l.style.display='none';
            r.style.display='block';
        }
}
if(window.lr=='unknown'){
    window.lr='gl';
        document.querySelector('.contentcardcam').innerHTML='<strong style="font-family: B612 Mono, monospace;">Хммм... Похоже, ваш запрос поставил наш сервер в неловкое положение...</strong>'
    }
if(window.tovarsost=='1'){
        document.querySelector('.camerfilt').style.display='none';
    document.querySelector('.condfilt').style.display='none';
    document.querySelector('.tekst').style.display='none';
    document.querySelector('.catalog').style.display='none';
    document.querySelector('.contentcardcam').style.display='flex';
}
else{
    if(window.tovarsost!='0'){
        alert(window.tovarsost);
    }
    }
var ttb=0;
var d = new Date();
var unread=0;
var loc = Date.UTC(d.getFullYear(), d.getMonth(), d.getDate(), d.getHours(), d.getMinutes(), d.getSeconds());

window.time_zone = ((<?php echo time();?> - loc/1000)/60).toFixed(0);

function two(num) { return ("0" + num).slice(-2);}

function mydate(t) {
  var d = new Date((t-window.time_zone*60)*1000);
  return two(d.getUTCDate())+'.'+ two(d.getUTCMonth()+1)+'.'+d.getUTCFullYear()+' в '+ two(d.getUTCHours())+':'+ two(d.getUTCMinutes());
}


function message(data,par,or) {
        n=document.querySelector('.chat-result');
        d=mydate(data.date);
            s=document.createElement('div');
            s.className='section';
            v=document.createElement('div');
            v.className='message';
            s.id=data.m_id;
            if (data.MessageText.length>21){
                var mas='';
                var res='';
                var style='';
                for (var i =0; i < data.MessageText.length; i++) {
                        mas+=data.MessageText[i];
                        if (i % 21==0 && i!=0){
                                if (mas.indexOf(' ')<0){
                                style='style="word-break: break-all;"';
                                break;
                                }
                                mas='';
                        }
                        if(i==data.MessageText.length-1){
                                style='style="word-wrap: break-word;"';
                        }
                }
            }
            if (data.FromUser=='1m1'||data.FromUser=='Server'){
            s.style.justifyContent = "flex-start";
            s.style.WebkitjustifyContent = "flex-start";
            v.innerHTML='<div class="FromName">Компания</div><div class="MessageText"'+style+'>'+data.MessageText+'</div>'+ '<div class="date">'+d+'</div>';
            s.appendChild(v);
            r=document.createElement('div');
            r.className='readedl';
            if (data.readed==1){
                r.style.display='none';
            }
            else{
                unread++;
                document.querySelector('.toc').innerHTML=unread;
                document.querySelectorAll('.schet').forEach(function(e){e.innerHTML=unread;})
                document.querySelector('.toc').style.display='flex';
                document.querySelectorAll('.schet').forEach(function(e){e.style.display='flex';})
            }
            s.appendChild(r);
        }
        else{
            s.style.justifyContent = "flex-end";
            s.style.WebkitjustifyContent = "flex-end";
            v.innerHTML='<div class="FromName">Я</div><div class="MessageText"'+style+'>'+data.MessageText+'</div>'+ '<div class="date">'+d+'</div>';
            r=document.createElement('div');
            r.className='readedr';
            if (data.readed==1){
                r.style.display='none';
            }
            s.appendChild(r);
            s.appendChild(v);
        }
        if (par==1) {
            a=document.querySelectorAll('.section');
            s.style.order='1';
            a.forEach(function(e) {
                w=Number(e.style.order);
                w=w+1;
                e.style.order=w;
                }
            );
    }
    else{
            s.style.order=or;
    }
    n.appendChild(s);
}
var billi=0;
var mesPage=1;
const chat=document.querySelector('.modal');
chat.style.display='none';
ui=document.querySelector('.chat').id;


document.querySelector('.soob').addEventListener('click', function(){
        if (chat.style.display=='none'){
                chat.style.display='flex'
                document.querySelector('.chat-result').scrollTop=document.querySelector('.chat-result').scrollHeight;
        }
        else{
        chat.style.display='none'
        }
        setTimeout(()=>document.querySelector('.info').style.opacity='0',4000);
});


document.querySelector('.vnok').addEventListener('touchstart',function(){
    if (unread>0){
        console.log('toucheded');
        messageData = {
            action: 'readed',
            FromUser:ui,
            ToUser:'1m1'
        }
        str=JSON.stringify(messageData);
            socket.send(str);
            unread=0;
            console.log('readed',unread);
            document.querySelector('.toc').style.display='none';
            document.querySelectorAll('.schet').forEach(function(e){e.style.display='none';})
            document.querySelector('.toc').innerHTML=unread;
            document.querySelectorAll('.schet').forEach(function(e){e.innerHTML=unread;})
            document.querySelectorAll('.readedl').forEach(function(e) {
                e.style.display='none';
            })
    }
})



document.querySelector('.vnok').addEventListener('mousemove',function(){
    if (unread>0){
        console.log('toucheded');
        messageData = {
            action: 'readed',
            FromUser:ui,
            ToUser:'1m1'
        }
        str=JSON.stringify(messageData);
            socket.send(str);
            unread=0;
            console.log('readed',unread);
            document.querySelector('.toc').style.display='none';
            document.querySelectorAll('.schet').forEach(function(e){e.style.display='none';})
            document.querySelector('.toc').innerHTML=unread;
            document.querySelectorAll('.schet').forEach(function(e){e.innerHTML=unread;})
            document.querySelectorAll('.readedl').forEach(function(e) {
                e.style.display='none';
            })
    }
})
document.querySelector('.chat').addEventListener('input',function(){
if (unread>0){
        console.log('toucheded');
        messageData = {
            action: 'readed',
            FromUser:ui,
            ToUser:'1m1'
        }
        str=JSON.stringify(messageData);
            socket.send(str);
            unread=0;
            console.log('readed',unread);
            document.querySelector('.toc').style.display='none';
            document.querySelectorAll('.schet').forEach(function(e){e.style.display='none';})
            document.querySelector('.toc').innerHTML=unread;
            document.querySelectorAll('.schet').forEach(function(e){e.innerHTML=unread;})
            document.querySelectorAll('.readedl').forEach(function(e) {
                e.style.display='none';
            })
    }
    if (document.querySelector('.chat').value.length % 2 ==0){
    messageData = {
            action: 'typing',
            FromUser:ui,
            ToUser:'1m1'
        }
        str=JSON.stringify(messageData);
            socket.send(str);
            console.log('typing',unread);
        }
    })
document.querySelectorAll('.ct').forEach(function(e) {
                e.addEventListener('click', function(){
if (window.lr!='ct'){
a=document.querySelector('.vnok');
a.style.justifyContent='flex-start';
document.querySelector('.control').style.marginTop='10px';
document.querySelector('.send').style.width='15%';
b=document.querySelector('.bigchat');
b.style.display='none';
document.querySelector('.header1').style.display='none';
console.log(Math.floor($('.burger').position().top));
        nav.style.top=Math.floor($('.burger').position().top)+'px';
        console.log(nav.style.top);
document.querySelector('.dno').style.display='none';
document.querySelector('.camerfilt').style.display='none';
document.querySelector('.condfilt').style.display='none';
document.querySelector('.catalog').style.display='none';
document.querySelector('.tekst').style.display='none';
document.querySelector('.contentcardcam').style.display='none';
document.querySelector('.catalog-conteiner').style.display='none';
document.querySelector('.chatcon').style.display='flex';
document.getElementById(window.lr).classList.remove('nazhat');
document.getElementById('ct').classList.toggle('nazhat');
window.lr='ct';
window.page=1;
if (billi==0){
b.appendChild(a);
billi++;
}
b.style.display='flex';
console.log('раз');
b.style.height=document.documentElement.clientHeight-60+'px';
console.log('два');
setTimeout(()=>document.querySelector('.info').style.opacity='0',2500);
}
});
});

function get_cookie ( cookie_name )
{
  var results = document.cookie.match ( '(^|;) ?' + cookie_name + '=([^;]*)(;|$)' );

  if ( results )
    return (unescape(results[2]));
  else
    return null;
}

var pole=document.querySelector('.chat');
var mas='';
var result='';


    document.querySelector('.send').addEventListener('mousedown', function(){
        this.style.boxShadow='0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24)';
        console.log(this.style.boxShadow);
        if (pole.value=='' || pole.value.match(/^[ ]+$/)) {
        console.info('Неотправлено');
        document.querySelector('.chat').value='';
        }
        else{
        messageData = {
            action: 'message',
            MessageText: pole.value,
            FromUser:pole.id,
            ToUser:'1m1'
        }
            str=JSON.stringify(messageData);
            socket.send(str);
            console.info('Отправлено');
            console.info(messageData);
            pole.value='';
        }
    });
    document.querySelector('.send').addEventListener('mouseup', function(){
        this.style.boxShadow='0 8px 10px 1px rgba(0,0,0,0.14), 0 3px 14px 3px rgba(0,0,0,0.12), 0 4px 5px 0 rgba(0,0,0,0.20)';
        console.log(this.style.boxShadow);
    });
    id=document.querySelector('.chat');
    id=id.id;
    var cp=0;
    x = get_cookie( "user" );
    adr='wss://condicam.ru:8000/?user='+id+'&coockie='+x;
    str='user='+ui+'&Page='+mesPage;
        mesPage+=1;
        console.log(adr);
        jQuery.ajax({
        url:     'https://condicam.ru/mes.php', //url страницы (action_ajax_form.php)
        type:     'POST', //метод отправки
        dataType: "JSON", //формат данных
        data: str,  // Сеарилизуем объект
        success: function(response) { //Данные отправлены успешно
                data=response;
                var or =(mesPage-2)*30+1;
                console.log(data);
                if(Number(data.vos)>Number(data.vis)){
                    document.querySelector('.info2').innerHTML='В сети';
                }
                else{
                    d=mydate(data.vis);
                    document.querySelector('.info2').innerHTML='Был в сети '+d;
                }
                if (data.kolvo!=0){
                cp=data.kolvo;
                data.messages.forEach(function(e) {
                message(e,0,or);
                or++;

                });
        }
        },
        error: function(response) { // Данные не отправлены
                console.log(response);
        }
        });
    var bl = document.querySelector('.chat-result');

bl.addEventListener('scroll', function(){
    if (this.scrollHeight+this.scrollTop-this.clientHeight<3) {
        if (mesPage<=cp){
        str='user='+ui+'&Page='+mesPage;
        mesPage+=1;
        jQuery.ajax({
        url:     'https://condicam.ru/mes.php', //url страницы (action_ajax_form.php)
        type:     'POST', //метод отправки
        dataType: "JSON", //формат данных
        data: str,  // Сеарилизуем объект
        success: function(response) { //Данные отправлены успешно
                data=response;
                or =(mesPage-2)*30+1;
                console.log(data);
                data.messages.forEach(function(e) {
                message(e,0,or);
                or++;
                });
        },
        error: function(response) { // Данные не отправлены
                console.log(response);
        }
        });
}
}
});

    var code=0;
    const socketMessageListener = (event) => {
    data=JSON.parse(event.data);
        if (data.action=='Ping'){
            socket.send('{"action":"Pong"}');
        }
        else{
                if(data.action=='Handshake'){
                document.querySelector('.info').style.backgroundColor='#2C629B';
                document.querySelector('.info').style.color='#B8FF9A';
                document.querySelector('.info').innerHTML=data.text;
                document.querySelector('.info').style.opacity='1';
                }
                else{
                if(data.action=='readed'){
                var o=document.querySelectorAll('.readedr');
                for (var i = o.length-1; i >= 0; i--) {
                 o[i].style.display='none';
                }
                }
                else{
                    if(data.action=='typing'){
                        if(Date.now()-ttb>5000){
                            ttb=Date.now();
                        document.querySelector('.info').style.backgroundColor='#2C629B';
                document.querySelector('.info').style.color='#B8FF9A';
                document.querySelector('.info').innerHTML='Печатает...';
                document.querySelector('.info').style.opacity='1';
                setTimeout(()=>document.querySelector('.info').style.opacity='0',5000);
                console.log(ttb);
            }
                    }
                    else{
                        if(data.action=='CL'){
                            d=mydate(data.vis);
                    document.querySelector('.info2').innerHTML='Был в сети '+d;
                        }
                        else{
                            if(data.action=='CON'){
                            d=mydate(data.vis);
                    document.querySelector('.info2').innerHTML='В сети ';
                        }
                        else{
                            if(data.action=='gg'){
                                console.log(data);
                                code=1;
                            }
                            else{
                        message(data,1,0);
                        if (data.FromUser!='1m1'){
                            document.querySelector('.chat-result').scrollTop=document.querySelector('.chat-result').scrollHeight;
                    }
                }
                }
                }
                }
                }
                }
                };
}
    const socketOpenListener = (event) => {
    console.log(code);
    console.log('Connected');
    };
    const socketCloseListener = (event) => {
    socket = new WebSocket(adr);
    socket.addEventListener('open', socketOpenListener);
    socket.addEventListener('message', socketMessageListener);
    socket.addEventListener('close', function(event){
        console.log(code);
        if (code!=1){
        socketCloseListener();
    }
    });
    if (socket) {
        console.info('Обеспечиваем соединение');
    }
    };

    socketCloseListener();
    socket.addEventListener('error', function(event){
        console.log(event.data);
    });

$(".contentcardcam").on('click','.op' , function(){
document.querySelector('.opv').style.display='flex';
document.querySelector('.harv').style.display='none';
document.querySelector('.op').style.boxShadow='3px 3px 0 #3433FF inset, -3px 0px 0 #3433FF inset';
document.querySelector('.har').style.boxShadow='3px 3px 0 #3433FF inset, -3px -3px 0 #3433FF inset';
document.querySelector('.op').style.background='#FEF6BB';
document.querySelector('.har').style.background='#F5F5F5';
});
$(".contentcardcam").on('click','.har' , function(){
document.querySelector('.opv').style.display='none';
document.querySelector('.harv').style.display='flex';
document.querySelector('.har').style.boxShadow='3px 3px 0 #3433FF inset, -3px 0px 0 #3433FF inset';
document.querySelector('.op').style.boxShadow='3px 3px 0 #3433FF inset, -3px -3px 0 #3433FF inset';
document.querySelector('.har').style.background='#FEF6BB';
document.querySelector('.op').style.background='#F5F5F5';
});

const burger = document.querySelector('.burger'),
	nav = document.querySelector('.nav-links'),
	links = document.querySelectorAll('.nav-links li');
function slider() {
	burger.addEventListener('click',()=>{
        console.log(Math.floor($('.burger').position().top));
        nav.style.top=Math.floor($('.burger').position().top)+'px';
        console.log(nav.style.top);
		nav.classList.toggle('nav-active');
		burger.classList.toggle('toggle');
	})
}
slider();
	const trigger = document.querySelector('.trigger1'),
	filter = document.querySelector('.filtersvid');
function trigger1() {
	trigger.addEventListener('click',()=>{
		filter.classList.toggle('filteractive');
		trigger.textContent = trigger.textContent == 'Показать панель фильтров' ? 'Скрыть панель фильтров' : 'Показать панель фильтров';
	})
}
trigger1();

const triggerb = document.querySelector('.trigger2'),
	filter2 = document.querySelector('.filtersvid2');
function trigger2() {
	triggerb.addEventListener('click',()=>{
		filter2.classList.toggle('filteractive');
		triggerb.textContent = triggerb.textContent == 'Показать панель фильтров' ? 'Скрыть панель фильтров' : 'Показать панель фильтров';
	})
}
trigger2();
menu0=document.querySelector('.group-name1');
menu0.addEventListener('click',()=>{glider('.pr1','.men');})
menu1=document.querySelector('.group-name11');
menu1.addEventListener('click',()=>{glider('.pr11','.menn');})
menu2=document.querySelector('.group-name3');
menu2.addEventListener('click',()=>{glider('.pr6','.men2');})
menu3=document.querySelector('.group-name33');
menu3.addEventListener('click',()=>{glider('.pr66','.men22');})
menu4=document.querySelector('.group-name44');
menu4.addEventListener('click',()=>{glider('.pr33','.men33');})
menu5=document.querySelector('.group-name4');
menu5.addEventListener('click',()=>{glider('.pr3','.men3');})
menu6=document.querySelector('.group-name5');
menu6.addEventListener('click',()=>{glider('.pr4','.men4');})
menu7=document.querySelector('.group-name55');
menu7.addEventListener('click',()=>{glider('.pr44','.men44');})
menu8=document.querySelector('.group-name6');
menu8.addEventListener('click',()=>{glider('.pr5','.men5');})
menu9=document.querySelector('.group-name66');
menu9.addEventListener('click',()=>{glider('.pr55','.men55');})

!function(t){"function"==typeof define&&define.amd?define([],t):"object"==typeof exports?module.exports=t():window.noUiSlider=t()}(function(){"use strict";var lt="14.6.2";function ut(t){t.parentElement.removeChild(t)}function a(t){return null!=t}function ct(t){t.preventDefault()}function o(t){return"number"==typeof t&&!isNaN(t)&&isFinite(t)}function pt(t,e,r){0<r&&(ht(t,e),setTimeout(function(){mt(t,e)},r))}function ft(t){return Math.max(Math.min(t,100),0)}function dt(t){return Array.isArray(t)?t:[t]}function e(t){var e=(t=String(t)).split(".");return 1<e.length?e[1].length:0}function ht(t,e){t.classList&&!/\s/.test(e)?t.classList.add(e):t.className+=" "+e}function mt(t,e){t.classList&&!/\s/.test(e)?t.classList.remove(e):t.className=t.className.replace(new RegExp("(^|\\b)"+e.split(" ").join("|")+"(\\b|$)","gi")," ")}function gt(t){var e=void 0!==window.pageXOffset,r="CSS1Compat"===(t.compatMode||"");return{x:e?window.pageXOffset:r?t.documentElement.scrollLeft:t.body.scrollLeft,y:e?window.pageYOffset:r?t.documentElement.scrollTop:t.body.scrollTop}}function c(t,e){return 100/(e-t)}function p(t,e,r){return 100*e/(t[r+1]-t[r])}function f(t,e){for(var r=1;t>=e[r];)r+=1;return r}function r(t,e,r){if(r>=t.slice(-1)[0])return 100;var n,i,o=f(r,t),s=t[o-1],a=t[o],l=e[o-1],u=e[o];return l+(i=r,p(n=[s,a],n[0]<0?i+Math.abs(n[0]):i-n[0],0)/c(l,u))}function n(t,e,r,n){if(100===n)return n;var i,o,s=f(n,t),a=t[s-1],l=t[s];return r?(l-a)/2<n-a?l:a:e[s-1]?t[s-1]+(i=n-t[s-1],o=e[s-1],Math.round(i/o)*o):n}function s(t,e,r){var n;if("number"==typeof e&&(e=[e]),!Array.isArray(e))throw new Error("noUiSlider ("+lt+"): 'range' contains invalid value.");if(!o(n="min"===t?0:"max"===t?100:parseFloat(t))||!o(e[0]))throw new Error("noUiSlider ("+lt+"): 'range' value isn't numeric.");r.xPct.push(n),r.xVal.push(e[0]),n?r.xSteps.push(!isNaN(e[1])&&e[1]):isNaN(e[1])||(r.xSteps[0]=e[1]),r.xHighestCompleteStep.push(0)}function l(t,e,r){if(e)if(r.xVal[t]!==r.xVal[t+1]){r.xSteps[t]=p([r.xVal[t],r.xVal[t+1]],e,0)/c(r.xPct[t],r.xPct[t+1]);var n=(r.xVal[t+1]-r.xVal[t])/r.xNumSteps[t],i=Math.ceil(Number(n.toFixed(3))-1),o=r.xVal[t]+r.xNumSteps[t]*i;r.xHighestCompleteStep[t]=o}else r.xSteps[t]=r.xHighestCompleteStep[t]=r.xVal[t]}function i(t,e,r){var n;this.xPct=[],this.xVal=[],this.xSteps=[r||!1],this.xNumSteps=[!1],this.xHighestCompleteStep=[],this.snap=e;var i=[];for(n in t)t.hasOwnProperty(n)&&i.push([t[n],n]);for(i.length&&"object"==typeof i[0][0]?i.sort(function(t,e){return t[0][0]-e[0][0]}):i.sort(function(t,e){return t[0]-e[0]}),n=0;n<i.length;n++)s(i[n][1],i[n][0],this);for(this.xNumSteps=this.xSteps.slice(0),n=0;n<this.xNumSteps.length;n++)l(n,this.xNumSteps[n],this)}i.prototype.getDistance=function(t){var e,r=[];for(e=0;e<this.xNumSteps.length-1;e++){var n=this.xNumSteps[e];if(n&&t/n%1!=0)throw new Error("noUiSlider ("+lt+"): 'limit', 'margin' and 'padding' of "+this.xPct[e]+"% range must be divisible by step.");r[e]=p(this.xVal,t,e)}return r},i.prototype.getAbsoluteDistance=function(t,e,r){var n,i=0;if(t<this.xPct[this.xPct.length-1])for(;t>this.xPct[i+1];)i++;else t===this.xPct[this.xPct.length-1]&&(i=this.xPct.length-2);r||t!==this.xPct[i+1]||i++;var o=1,s=e[i],a=0,l=0,u=0,c=0;for(n=r?(t-this.xPct[i])/(this.xPct[i+1]-this.xPct[i]):(this.xPct[i+1]-t)/(this.xPct[i+1]-this.xPct[i]);0<s;)a=this.xPct[i+1+c]-this.xPct[i+c],100<e[i+c]*o+100-100*n?(l=a*n,o=(s-100*n)/e[i+c],n=1):(l=e[i+c]*a/100*o,o=0),r?(u-=l,1<=this.xPct.length+c&&c--):(u+=l,1<=this.xPct.length-c&&c++),s=e[i+c]*o;return t+u},i.prototype.toStepping=function(t){return t=r(this.xVal,this.xPct,t)},i.prototype.fromStepping=function(t){return function(t,e,r){if(100<=r)return t.slice(-1)[0];var n,i=f(r,e),o=t[i-1],s=t[i],a=e[i-1],l=e[i];return n=[o,s],(r-a)*c(a,l)*(n[1]-n[0])/100+n[0]}(this.xVal,this.xPct,t)},i.prototype.getStep=function(t){return t=n(this.xPct,this.xSteps,this.snap,t)},i.prototype.getDefaultStep=function(t,e,r){var n=f(t,this.xPct);return(100===t||e&&t===this.xPct[n-1])&&(n=Math.max(n-1,1)),(this.xVal[n]-this.xVal[n-1])/r},i.prototype.getNearbySteps=function(t){var e=f(t,this.xPct);return{stepBefore:{startValue:this.xVal[e-2],step:this.xNumSteps[e-2],highestStep:this.xHighestCompleteStep[e-2]},thisStep:{startValue:this.xVal[e-1],step:this.xNumSteps[e-1],highestStep:this.xHighestCompleteStep[e-1]},stepAfter:{startValue:this.xVal[e],step:this.xNumSteps[e],highestStep:this.xHighestCompleteStep[e]}}},i.prototype.countStepDecimals=function(){var t=this.xNumSteps.map(e);return Math.max.apply(null,t)},i.prototype.convert=function(t){return this.getStep(this.toStepping(t))};var u={to:function(t){return void 0!==t&&t.toFixed(2)},from:Number},d={target:"target",base:"base",origin:"origin",handle:"handle",handleLower:"handle-lower",handleUpper:"handle-upper",touchArea:"touch-area",horizontal:"horizontal",vertical:"vertical",background:"background",connect:"connect",connects:"connects",ltr:"ltr",rtl:"rtl",textDirectionLtr:"txt-dir-ltr",textDirectionRtl:"txt-dir-rtl",draggable:"draggable",drag:"state-drag",tap:"state-tap",active:"active",tooltip:"tooltip",pips:"pips",pipsHorizontal:"pips-horizontal",pipsVertical:"pips-vertical",marker:"marker",markerHorizontal:"marker-horizontal",markerVertical:"marker-vertical",markerNormal:"marker-normal",markerLarge:"marker-large",markerSub:"marker-sub",value:"value",valueHorizontal:"value-horizontal",valueVertical:"value-vertical",valueNormal:"value-normal",valueLarge:"value-large",valueSub:"value-sub"};function h(t){if("object"==typeof(e=t)&&"function"==typeof e.to&&"function"==typeof e.from)return!0;var e;throw new Error("noUiSlider ("+lt+"): 'format' requires 'to' and 'from' methods.")}function m(t,e){if(!o(e))throw new Error("noUiSlider ("+lt+"): 'step' is not numeric.");t.singleStep=e}function g(t,e){if(!o(e))throw new Error("noUiSlider ("+lt+"): 'keyboardPageMultiplier' is not numeric.");t.keyboardPageMultiplier=e}function v(t,e){if(!o(e))throw new Error("noUiSlider ("+lt+"): 'keyboardDefaultStep' is not numeric.");t.keyboardDefaultStep=e}function b(t,e){if("object"!=typeof e||Array.isArray(e))throw new Error("noUiSlider ("+lt+"): 'range' is not an object.");if(void 0===e.min||void 0===e.max)throw new Error("noUiSlider ("+lt+"): Missing 'min' or 'max' in 'range'.");if(e.min===e.max)throw new Error("noUiSlider ("+lt+"): 'range' 'min' and 'max' cannot be equal.");t.spectrum=new i(e,t.snap,t.singleStep)}function x(t,e){if(e=dt(e),!Array.isArray(e)||!e.length)throw new Error("noUiSlider ("+lt+"): 'start' option is incorrect.");t.handles=e.length,t.start=e}function S(t,e){if("boolean"!=typeof(t.snap=e))throw new Error("noUiSlider ("+lt+"): 'snap' option must be a boolean.")}function w(t,e){if("boolean"!=typeof(t.animate=e))throw new Error("noUiSlider ("+lt+"): 'animate' option must be a boolean.")}function y(t,e){if("number"!=typeof(t.animationDuration=e))throw new Error("noUiSlider ("+lt+"): 'animationDuration' option must be a number.")}function E(t,e){var r,n=[!1];if("lower"===e?e=[!0,!1]:"upper"===e&&(e=[!1,!0]),!0===e||!1===e){for(r=1;r<t.handles;r++)n.push(e);n.push(!1)}else{if(!Array.isArray(e)||!e.length||e.length!==t.handles+1)throw new Error("noUiSlider ("+lt+"): 'connect' option doesn't match handle count.");n=e}t.connect=n}function C(t,e){switch(e){case"horizontal":t.ort=0;break;case"vertical":t.ort=1;break;default:throw new Error("noUiSlider ("+lt+"): 'orientation' option is invalid.")}}function P(t,e){if(!o(e))throw new Error("noUiSlider ("+lt+"): 'margin' option must be numeric.");0!==e&&(t.margin=t.spectrum.getDistance(e))}function N(t,e){if(!o(e))throw new Error("noUiSlider ("+lt+"): 'limit' option must be numeric.");if(t.limit=t.spectrum.getDistance(e),!t.limit||t.handles<2)throw new Error("noUiSlider ("+lt+"): 'limit' option is only supported on linear sliders with 2 or more handles.")}function k(t,e){var r;if(!o(e)&&!Array.isArray(e))throw new Error("noUiSlider ("+lt+"): 'padding' option must be numeric or array of exactly 2 numbers.");if(Array.isArray(e)&&2!==e.length&&!o(e[0])&&!o(e[1]))throw new Error("noUiSlider ("+lt+"): 'padding' option must be numeric or array of exactly 2 numbers.");if(0!==e){for(Array.isArray(e)||(e=[e,e]),t.padding=[t.spectrum.getDistance(e[0]),t.spectrum.getDistance(e[1])],r=0;r<t.spectrum.xNumSteps.length-1;r++)if(t.padding[0][r]<0||t.padding[1][r]<0)throw new Error("noUiSlider ("+lt+"): 'padding' option must be a positive number(s).");var n=e[0]+e[1],i=t.spectrum.xVal[0];if(1<n/(t.spectrum.xVal[t.spectrum.xVal.length-1]-i))throw new Error("noUiSlider ("+lt+"): 'padding' option must not exceed 100% of the range.")}}function U(t,e){switch(e){case"ltr":t.dir=0;break;case"rtl":t.dir=1;break;default:throw new Error("noUiSlider ("+lt+"): 'direction' option was not recognized.")}}function A(t,e){if("string"!=typeof e)throw new Error("noUiSlider ("+lt+"): 'behaviour' must be a string containing options.");var r=0<=e.indexOf("tap"),n=0<=e.indexOf("drag"),i=0<=e.indexOf("fixed"),o=0<=e.indexOf("snap"),s=0<=e.indexOf("hover"),a=0<=e.indexOf("unconstrained");if(i){if(2!==t.handles)throw new Error("noUiSlider ("+lt+"): 'fixed' behaviour must be used with 2 handles");P(t,t.start[1]-t.start[0])}if(a&&(t.margin||t.limit))throw new Error("noUiSlider ("+lt+"): 'unconstrained' behaviour cannot be used with margin or limit");t.events={tap:r||o,drag:n,fixed:i,snap:o,hover:s,unconstrained:a}}function V(t,e){if(!1!==e)if(!0===e){t.tooltips=[];for(var r=0;r<t.handles;r++)t.tooltips.push(!0)}else{if(t.tooltips=dt(e),t.tooltips.length!==t.handles)throw new Error("noUiSlider ("+lt+"): must pass a formatter for all handles.");t.tooltips.forEach(function(t){if("boolean"!=typeof t&&("object"!=typeof t||"function"!=typeof t.to))throw new Error("noUiSlider ("+lt+"): 'tooltips' must be passed a formatter or 'false'.")})}}function D(t,e){h(t.ariaFormat=e)}function M(t,e){h(t.format=e)}function O(t,e){if("boolean"!=typeof(t.keyboardSupport=e))throw new Error("noUiSlider ("+lt+"): 'keyboardSupport' option must be a boolean.")}function L(t,e){t.documentElement=e}function z(t,e){if("string"!=typeof e&&!1!==e)throw new Error("noUiSlider ("+lt+"): 'cssPrefix' must be a string or `false`.");t.cssPrefix=e}function H(t,e){if("object"!=typeof e)throw new Error("noUiSlider ("+lt+"): 'cssClasses' must be an object.");if("string"==typeof t.cssPrefix)for(var r in t.cssClasses={},e)e.hasOwnProperty(r)&&(t.cssClasses[r]=t.cssPrefix+e[r]);else t.cssClasses=e}function vt(e){var r={margin:0,limit:0,padding:0,animate:!0,animationDuration:300,ariaFormat:u,format:u},n={step:{r:!1,t:m},keyboardPageMultiplier:{r:!1,t:g},keyboardDefaultStep:{r:!1,t:v},start:{r:!0,t:x},connect:{r:!0,t:E},direction:{r:!0,t:U},snap:{r:!1,t:S},animate:{r:!1,t:w},animationDuration:{r:!1,t:y},range:{r:!0,t:b},orientation:{r:!1,t:C},margin:{r:!1,t:P},limit:{r:!1,t:N},padding:{r:!1,t:k},behaviour:{r:!0,t:A},ariaFormat:{r:!1,t:D},format:{r:!1,t:M},tooltips:{r:!1,t:V},keyboardSupport:{r:!0,t:O},documentElement:{r:!1,t:L},cssPrefix:{r:!0,t:z},cssClasses:{r:!0,t:H}},i={connect:!1,direction:"ltr",behaviour:"tap",orientation:"horizontal",keyboardSupport:!0,cssPrefix:"noUi-",cssClasses:d,keyboardPageMultiplier:5,keyboardDefaultStep:10};e.format&&!e.ariaFormat&&(e.ariaFormat=e.format),Object.keys(n).forEach(function(t){if(!a(e[t])&&void 0===i[t]){if(n[t].r)throw new Error("noUiSlider ("+lt+"): '"+t+"' is required.");return!0}n[t].t(r,a(e[t])?e[t]:i[t])}),r.pips=e.pips;var t=document.createElement("div"),o=void 0!==t.style.msTransform,s=void 0!==t.style.transform;r.transformRule=s?"transform":o?"msTransform":"webkitTransform";return r.style=[["left","top"],["right","bottom"]][r.dir][r.ort],r}function j(t,b,o){var l,u,s,c,i,a,e,p,f=window.navigator.pointerEnabled?{start:"pointerdown",move:"pointermove",end:"pointerup"}:window.navigator.msPointerEnabled?{start:"MSPointerDown",move:"MSPointerMove",end:"MSPointerUp"}:{start:"mousedown touchstart",move:"mousemove touchmove",end:"mouseup touchend"},d=window.CSS&&CSS.supports&&CSS.supports("touch-action","none")&&function(){var t=!1;try{var e=Object.defineProperty({},"passive",{get:function(){t=!0}});window.addEventListener("test",null,e)}catch(t){}return t}(),h=t,y=b.spectrum,x=[],S=[],m=[],g=0,v={},w=t.ownerDocument,E=b.documentElement||w.documentElement,C=w.body,P=-1,N=0,k=1,U=2,A="rtl"===w.dir||1===b.ort?0:100;function V(t,e){var r=w.createElement("div");return e&&ht(r,e),t.appendChild(r),r}function D(t,e){var r=V(t,b.cssClasses.origin),n=V(r,b.cssClasses.handle);return V(n,b.cssClasses.touchArea),n.setAttribute("data-handle",e),b.keyboardSupport&&(n.setAttribute("tabindex","0"),n.addEventListener("keydown",function(t){return function(t,e){if(O()||L(e))return!1;var r=["Left","Right"],n=["Down","Up"],i=["PageDown","PageUp"],o=["Home","End"];b.dir&&!b.ort?r.reverse():b.ort&&!b.dir&&(n.reverse(),i.reverse());var s,a=t.key.replace("Arrow",""),l=a===i[0],u=a===i[1],c=a===n[0]||a===r[0]||l,p=a===n[1]||a===r[1]||u,f=a===o[0],d=a===o[1];if(!(c||p||f||d))return!0;if(t.preventDefault(),p||c){var h=b.keyboardPageMultiplier,m=c?0:1,g=at(e),v=g[m];if(null===v)return!1;!1===v&&(v=y.getDefaultStep(S[e],c,b.keyboardDefaultStep)),(u||l)&&(v*=h),v=Math.max(v,1e-7),v*=c?-1:1,s=x[e]+v}else s=d?b.spectrum.xVal[b.spectrum.xVal.length-1]:b.spectrum.xVal[0];return rt(e,y.toStepping(s),!0,!0),J("slide",e),J("update",e),J("change",e),J("set",e),!1}(t,e)})),n.setAttribute("role","slider"),n.setAttribute("aria-orientation",b.ort?"vertical":"horizontal"),0===e?ht(n,b.cssClasses.handleLower):e===b.handles-1&&ht(n,b.cssClasses.handleUpper),r}function M(t,e){return!!e&&V(t,b.cssClasses.connect)}function r(t,e){return!!b.tooltips[e]&&V(t.firstChild,b.cssClasses.tooltip)}function O(){return h.hasAttribute("disabled")}function L(t){return u[t].hasAttribute("disabled")}function z(){i&&(G("update.tooltips"),i.forEach(function(t){t&&ut(t)}),i=null)}function H(){z(),i=u.map(r),$("update.tooltips",function(t,e,r){if(i[e]){var n=t[e];!0!==b.tooltips[e]&&(n=b.tooltips[e].to(r[e])),i[e].innerHTML=n}})}function j(e,i,o){var s=w.createElement("div"),a=[];a[N]=b.cssClasses.valueNormal,a[k]=b.cssClasses.valueLarge,a[U]=b.cssClasses.valueSub;var l=[];l[N]=b.cssClasses.markerNormal,l[k]=b.cssClasses.markerLarge,l[U]=b.cssClasses.markerSub;var u=[b.cssClasses.valueHorizontal,b.cssClasses.valueVertical],c=[b.cssClasses.markerHorizontal,b.cssClasses.markerVertical];function p(t,e){var r=e===b.cssClasses.value,n=r?a:l;return e+" "+(r?u:c)[b.ort]+" "+n[t]}return ht(s,b.cssClasses.pips),ht(s,0===b.ort?b.cssClasses.pipsHorizontal:b.cssClasses.pipsVertical),Object.keys(e).forEach(function(t){!function(t,e,r){if((r=i?i(e,r):r)!==P){var n=V(s,!1);n.className=p(r,b.cssClasses.marker),n.style[b.style]=t+"%",N<r&&((n=V(s,!1)).className=p(r,b.cssClasses.value),n.setAttribute("data-value",e),n.style[b.style]=t+"%",n.innerHTML=o.to(e))}}(t,e[t][0],e[t][1])}),s}function F(){c&&(ut(c),c=null)}function R(t){F();var m,g,v,b,e,r,x,S,w,n=t.mode,i=t.density||1,o=t.filter||!1,s=function(t,e,r){if("range"===t||"steps"===t)return y.xVal;if("count"===t){if(e<2)throw new Error("noUiSlider ("+lt+"): 'values' (>= 2) required for mode 'count'.");var n=e-1,i=100/n;for(e=[];n--;)e[n]=n*i;e.push(100),t="positions"}return"positions"===t?e.map(function(t){return y.fromStepping(r?y.getStep(t):t)}):"values"===t?r?e.map(function(t){return y.fromStepping(y.getStep(y.toStepping(t)))}):e:void 0}(n,t.values||!1,t.stepped||!1),a=(m=i,g=n,v=s,b={},e=y.xVal[0],r=y.xVal[y.xVal.length-1],S=x=!1,w=0,(v=v.slice().sort(function(t,e){return t-e}).filter(function(t){return!this[t]&&(this[t]=!0)},{}))[0]!==e&&(v.unshift(e),x=!0),v[v.length-1]!==r&&(v.push(r),S=!0),v.forEach(function(t,e){var r,n,i,o,s,a,l,u,c,p,f=t,d=v[e+1],h="steps"===g;if(h&&(r=y.xNumSteps[e]),r||(r=d-f),!1!==f)for(void 0===d&&(d=f),r=Math.max(r,1e-7),n=f;n<=d;n=(n+r).toFixed(7)/1){for(u=(s=(o=y.toStepping(n))-w)/m,p=s/(c=Math.round(u)),i=1;i<=c;i+=1)b[(a=w+i*p).toFixed(5)]=[y.fromStepping(a),0];l=-1<v.indexOf(n)?k:h?U:N,!e&&x&&n!==d&&(l=0),n===d&&S||(b[o.toFixed(5)]=[n,l]),w=o}}),b),l=t.format||{to:Math.round};return c=h.appendChild(j(a,o,l))}function T(){var t=l.getBoundingClientRect(),e="offset"+["Width","Height"][b.ort];return 0===b.ort?t.width||l[e]:t.height||l[e]}function B(n,i,o,s){var e=function(t){return!!(t=function(t,e,r){var n,i,o=0===t.type.indexOf("touch"),s=0===t.type.indexOf("mouse"),a=0===t.type.indexOf("pointer");0===t.type.indexOf("MSPointer")&&(a=!0);if("mousedown"===t.type&&!t.buttons&&!t.touches)return!1;if(o){var l=function(t){return t.target===r||r.contains(t.target)||t.target.shadowRoot&&t.target.shadowRoot.contains(r)};if("touchstart"===t.type){var u=Array.prototype.filter.call(t.touches,l);if(1<u.length)return!1;n=u[0].pageX,i=u[0].pageY}else{var c=Array.prototype.find.call(t.changedTouches,l);if(!c)return!1;n=c.pageX,i=c.pageY}}e=e||gt(w),(s||a)&&(n=t.clientX+e.x,i=t.clientY+e.y);return t.pageOffset=e,t.points=[n,i],t.cursor=s||a,t}(t,s.pageOffset,s.target||i))&&(!(O()&&!s.doNotReject)&&(e=h,r=b.cssClasses.tap,!((e.classList?e.classList.contains(r):new RegExp("\\b"+r+"\\b").test(e.className))&&!s.doNotReject)&&(!(n===f.start&&void 0!==t.buttons&&1<t.buttons)&&((!s.hover||!t.buttons)&&(d||t.preventDefault(),t.calcPoint=t.points[b.ort],void o(t,s))))));var e,r},r=[];return n.split(" ").forEach(function(t){i.addEventListener(t,e,!!d&&{passive:!0}),r.push([t,e])}),r}function q(t){var e,r,n,i,o,s,a=100*(t-(e=l,r=b.ort,n=e.getBoundingClientRect(),i=e.ownerDocument,o=i.documentElement,s=gt(i),/webkit.*Chrome.*Mobile/i.test(navigator.userAgent)&&(s.x=0),r?n.top+s.y-o.clientTop:n.left+s.x-o.clientLeft))/T();return a=ft(a),b.dir?100-a:a}function X(t,e){"mouseout"===t.type&&"HTML"===t.target.nodeName&&null===t.relatedTarget&&_(t,e)}function Y(t,e){if(-1===navigator.appVersion.indexOf("MSIE 9")&&0===t.buttons&&0!==e.buttonsProperty)return _(t,e);var r=(b.dir?-1:1)*(t.calcPoint-e.startCalcPoint);Z(0<r,100*r/e.baseSize,e.locations,e.handleNumbers)}function _(t,e){e.handle&&(mt(e.handle,b.cssClasses.active),g-=1),e.listeners.forEach(function(t){E.removeEventListener(t[0],t[1])}),0===g&&(mt(h,b.cssClasses.drag),et(),t.cursor&&(C.style.cursor="",C.removeEventListener("selectstart",ct))),e.handleNumbers.forEach(function(t){J("change",t),J("set",t),J("end",t)})}function I(t,e){if(e.handleNumbers.some(L))return!1;var r;1===e.handleNumbers.length&&(r=u[e.handleNumbers[0]].children[0],g+=1,ht(r,b.cssClasses.active));t.stopPropagation();var n=[],i=B(f.move,E,Y,{target:t.target,handle:r,listeners:n,startCalcPoint:t.calcPoint,baseSize:T(),pageOffset:t.pageOffset,handleNumbers:e.handleNumbers,buttonsProperty:t.buttons,locations:S.slice()}),o=B(f.end,E,_,{target:t.target,handle:r,listeners:n,doNotReject:!0,handleNumbers:e.handleNumbers}),s=B("mouseout",E,X,{target:t.target,handle:r,listeners:n,doNotReject:!0,handleNumbers:e.handleNumbers});n.push.apply(n,i.concat(o,s)),t.cursor&&(C.style.cursor=getComputedStyle(t.target).cursor,1<u.length&&ht(h,b.cssClasses.drag),C.addEventListener("selectstart",ct,!1)),e.handleNumbers.forEach(function(t){J("start",t)})}function n(t){t.stopPropagation();var i,o,s,e=q(t.calcPoint),r=(i=e,s=!(o=100),u.forEach(function(t,e){if(!L(e)){var r=S[e],n=Math.abs(r-i);(n<o||n<=o&&r<i||100===n&&100===o)&&(s=e,o=n)}}),s);if(!1===r)return!1;b.events.snap||pt(h,b.cssClasses.tap,b.animationDuration),rt(r,e,!0,!0),et(),J("slide",r,!0),J("update",r,!0),J("change",r,!0),J("set",r,!0),b.events.snap&&I(t,{handleNumbers:[r]})}function W(t){var e=q(t.calcPoint),r=y.getStep(e),n=y.fromStepping(r);Object.keys(v).forEach(function(t){"hover"===t.split(".")[0]&&v[t].forEach(function(t){t.call(a,n)})})}function $(t,e){v[t]=v[t]||[],v[t].push(e),"update"===t.split(".")[0]&&u.forEach(function(t,e){J("update",e)})}function G(t){var n=t&&t.split(".")[0],i=n&&t.substring(n.length);Object.keys(v).forEach(function(t){var e=t.split(".")[0],r=t.substring(e.length);n&&n!==e||i&&i!==r||delete v[t]})}function J(r,n,i){Object.keys(v).forEach(function(t){var e=t.split(".")[0];r===e&&v[t].forEach(function(t){t.call(a,x.map(b.format.to),n,x.slice(),i||!1,S.slice(),a)})})}function K(t,e,r,n,i,o){var s;return 1<u.length&&!b.events.unconstrained&&(n&&0<e&&(s=y.getAbsoluteDistance(t[e-1],b.margin,0),r=Math.max(r,s)),i&&e<u.length-1&&(s=y.getAbsoluteDistance(t[e+1],b.margin,1),r=Math.min(r,s))),1<u.length&&b.limit&&(n&&0<e&&(s=y.getAbsoluteDistance(t[e-1],b.limit,0),r=Math.min(r,s)),i&&e<u.length-1&&(s=y.getAbsoluteDistance(t[e+1],b.limit,1),r=Math.max(r,s))),b.padding&&(0===e&&(s=y.getAbsoluteDistance(0,b.padding[0],0),r=Math.max(r,s)),e===u.length-1&&(s=y.getAbsoluteDistance(100,b.padding[1],1),r=Math.min(r,s))),!((r=ft(r=y.getStep(r)))===t[e]&&!o)&&r}function Q(t,e){var r=b.ort;return(r?e:t)+", "+(r?t:e)}function Z(t,n,r,e){var i=r.slice(),o=[!t,t],s=[t,!t];e=e.slice(),t&&e.reverse(),1<e.length?e.forEach(function(t,e){var r=K(i,t,i[t]+n,o[e],s[e],!1);!1===r?n=0:(n=r-i[t],i[t]=r)}):o=s=[!0];var a=!1;e.forEach(function(t,e){a=rt(t,r[t]+n,o[e],s[e])||a}),a&&e.forEach(function(t){J("update",t),J("slide",t)})}function tt(t,e){return b.dir?100-t-e:t}function et(){m.forEach(function(t){var e=50<S[t]?-1:1,r=3+(u.length+e*t);u[t].style.zIndex=r})}function rt(t,e,r,n,i){return i||(e=K(S,t,e,r,n,!1)),!1!==e&&(function(t,e){S[t]=e,x[t]=y.fromStepping(e);var r="translate("+Q(10*(tt(e,0)-A)+"%","0")+")";u[t].style[b.transformRule]=r,nt(t),nt(t+1)}(t,e),!0)}function nt(t){if(s[t]){var e=0,r=100;0!==t&&(e=S[t-1]),t!==s.length-1&&(r=S[t]);var n=r-e,i="translate("+Q(tt(e,n)+"%","0")+")",o="scale("+Q(n/100,"1")+")";s[t].style[b.transformRule]=i+" "+o}}function it(t,e){return null===t||!1===t||void 0===t?S[e]:("number"==typeof t&&(t=String(t)),t=b.format.from(t),!1===(t=y.toStepping(t))||isNaN(t)?S[e]:t)}function ot(t,e,r){var n=dt(t),i=void 0===S[0];e=void 0===e||!!e,b.animate&&!i&&pt(h,b.cssClasses.tap,b.animationDuration),m.forEach(function(t){rt(t,it(n[t],t),!0,!1,r)});for(var o=1===m.length?0:1;o<m.length;++o)m.forEach(function(t){rt(t,S[t],!0,!0,r)});et(),m.forEach(function(t){J("update",t),null!==n[t]&&e&&J("set",t)})}function st(){var t=x.map(b.format.to);return 1===t.length?t[0]:t}function at(t){var e=S[t],r=y.getNearbySteps(e),n=x[t],i=r.thisStep.step,o=null;if(b.snap)return[n-r.stepBefore.startValue||null,r.stepAfter.startValue-n||null];!1!==i&&n+i>r.stepAfter.startValue&&(i=r.stepAfter.startValue-n),o=n>r.thisStep.startValue?r.thisStep.step:!1!==r.stepBefore.step&&n-r.stepBefore.highestStep,100===e?i=null:0===e&&(o=null);var s=y.countStepDecimals();return null!==i&&!1!==i&&(i=Number(i.toFixed(s))),null!==o&&!1!==o&&(o=Number(o.toFixed(s))),[o,i]}return ht(e=h,b.cssClasses.target),0===b.dir?ht(e,b.cssClasses.ltr):ht(e,b.cssClasses.rtl),0===b.ort?ht(e,b.cssClasses.horizontal):ht(e,b.cssClasses.vertical),ht(e,"rtl"===getComputedStyle(e).direction?b.cssClasses.textDirectionRtl:b.cssClasses.textDirectionLtr),l=V(e,b.cssClasses.base),function(t,e){var r=V(e,b.cssClasses.connects);u=[],(s=[]).push(M(r,t[0]));for(var n=0;n<b.handles;n++)u.push(D(e,n)),m[n]=n,s.push(M(r,t[n+1]))}(b.connect,l),(p=b.events).fixed||u.forEach(function(t,e){B(f.start,t.children[0],I,{handleNumbers:[e]})}),p.tap&&B(f.start,l,n,{}),p.hover&&B(f.move,l,W,{hover:!0}),p.drag&&s.forEach(function(t,e){if(!1!==t&&0!==e&&e!==s.length-1){var r=u[e-1],n=u[e],i=[t];ht(t,b.cssClasses.draggable),p.fixed&&(i.push(r.children[0]),i.push(n.children[0])),i.forEach(function(t){B(f.start,t,I,{handles:[r,n],handleNumbers:[e-1,e]})})}}),ot(b.start),b.pips&&R(b.pips),b.tooltips&&H(),$("update",function(t,e,s,r,a){m.forEach(function(t){var e=u[t],r=K(S,t,0,!0,!0,!0),n=K(S,t,100,!0,!0,!0),i=a[t],o=b.ariaFormat.to(s[t]);r=y.fromStepping(r).toFixed(1),n=y.fromStepping(n).toFixed(1),i=y.fromStepping(i).toFixed(1),e.children[0].setAttribute("aria-valuemin",r),e.children[0].setAttribute("aria-valuemax",n),e.children[0].setAttribute("aria-valuenow",i),e.children[0].setAttribute("aria-valuetext",o)})}),a={destroy:function(){for(var t in b.cssClasses)b.cssClasses.hasOwnProperty(t)&&mt(h,b.cssClasses[t]);for(;h.firstChild;)h.removeChild(h.firstChild);delete h.noUiSlider},steps:function(){return m.map(at)},on:$,off:G,get:st,set:ot,setHandle:function(t,e,r,n){if(!(0<=(t=Number(t))&&t<m.length))throw new Error("noUiSlider ("+lt+"): invalid handle number, got: "+t);rt(t,it(e,t),!0,!0,n),J("update",t),r&&J("set",t)},reset:function(t){ot(b.start,t)},__moveHandles:function(t,e,r){Z(t,e,S,r)},options:o,updateOptions:function(e,t){var r=st(),n=["margin","limit","padding","range","animate","snap","step","format","pips","tooltips"];n.forEach(function(t){void 0!==e[t]&&(o[t]=e[t])});var i=vt(o);n.forEach(function(t){void 0!==e[t]&&(b[t]=i[t])}),y=i.spectrum,b.margin=i.margin,b.limit=i.limit,b.padding=i.padding,b.pips?R(b.pips):F(),b.tooltips?H():z(),S=[],ot(e.start||r,t)},target:h,removePips:F,removeTooltips:z,getTooltips:function(){return i},getOrigins:function(){return u},pips:R}}return{__spectrum:i,version:lt,cssClasses:d,create:function(t,e){if(!t||!t.nodeName)throw new Error("noUiSlider ("+lt+"): create requires a single element, got: "+t);if(t.noUiSlider)throw new Error("noUiSlider ("+lt+"): Slider was already initialized.");var r=j(t,vt(e),e);return t.noUiSlider=r}}});


const rangeSlider = document.getElementById('range-slider');

if (rangeSlider) {
	noUiSlider.create(rangeSlider, {
    start: [<?php echo $minpriceqr[0].','.$maxpriceqr[0]?>],
		connect: true,
		step: 100,
    range: {
			'min': [<?php echo $minpriceqr[0]?>],
			'max': [<?php echo $maxpriceqr[0]?>]
    }
	});

	const input0 = document.getElementById('input-0');
	const input1 = document.getElementById('input-1');
	const inputs = [input0, input1];

	rangeSlider.noUiSlider.on('update', function(values, handle){
		inputs[handle].value = values[handle];
	});

	const setRangeSlider = (i, value) => {
		let arr = [null, null];
		arr[i] = value;

		console.log(arr);

		rangeSlider.noUiSlider.set(arr);
	};

	inputs.forEach((el, index) => {
		el.addEventListener('change', (e) => {
			console.log(index);
			setRangeSlider(index, e.currentTarget.value);
		});
	});
}

	const rangeSlider2 = document.getElementById('range-slider2');

if (rangeSlider2) {
	noUiSlider.create(rangeSlider2, {
    start: [<?php echo $minrasqr[0].','.$maxrasqr[0]?>],
		connect: true,
		step: 0.1,
    range: {
			'min': [<?php echo $minrasqr[0]?>],
			'max': [<?php echo $maxrasqr[0]?>]
    }
	});

	const input01 = document.getElementById('input-01');
	const input11 = document.getElementById('input-11');
	const inputs = [input01, input11];

	rangeSlider2.noUiSlider.on('update', function(values, handle){
		inputs[handle].value = values[handle];
	});

	const setRangeSlider = (i, value) => {
		let arr = [null, null];
		arr[i] = value;

		console.log(arr);

		rangeSlider2.noUiSlider.set(arr);
	};

	inputs.forEach((el, index) => {
		el.addEventListener('change', (e) => {
			console.log(index);
			setRangeSlider(index, e.currentTarget.value);
		});
	});
}

	const rangeSlider3 = document.getElementById('range-slider3');

if (rangeSlider3) {
	noUiSlider.create(rangeSlider3, {
    start: [<?php echo $minugolqr[0].','.$maxugolqr[0]?>],
		connect: true,
		step: 1,
    range: {
			'min': [<?php echo $minugolqr[0]?>],
			'max': [<?php echo $maxugolqr[0]?>]
    }
	});

	const input011 = document.getElementById('input-011');
	const input111 = document.getElementById('input-111');
	const inputs = [input011, input111];

	rangeSlider3.noUiSlider.on('update', function(values, handle){
		inputs[handle].value = values[handle];
	});

	const setRangeSlider = (i, value) => {
		let arr = [null, null];
		arr[i] = value;

		console.log(arr);

		rangeSlider3.noUiSlider.set(arr);
	};

	inputs.forEach((el, index) => {
		el.addEventListener('change', (e) => {
			console.log(index);
			setRangeSlider(index, e.currentTarget.value);
		});
	});
}

	const rangeSlider4 = document.getElementById('range-slider4');

if (rangeSlider4) {
	noUiSlider.create(rangeSlider4, {
    start: [<?php echo $mintqr[0].','.$maxtqr[0]?>],
		connect: true,
		step: 1,
    range: {
			'min': [<?php echo $mintqr[0]?>],
			'max': [<?php echo $maxtqr[0]?>]
    }
	});

	const input0111 = document.getElementById('input-0111');
	const input1111 = document.getElementById('input-1111');
	const inputs = [input0111, input1111];

	rangeSlider4.noUiSlider.on('update', function(values, handle){
		inputs[handle].value = values[handle];
	});

	const setRangeSlider = (i, value) => {
		let arr = [null, null];
		arr[i] = value;

		console.log(arr);

		rangeSlider4.noUiSlider.set(arr);
	};

	inputs.forEach((el, index) => {
		el.addEventListener('change', (e) => {
			console.log(index);
			setRangeSlider(index, e.currentTarget.value);
		});
	});
}

	const rangeSlider5 = document.getElementById('range-slider5');

if (rangeSlider5) {
	noUiSlider.create(rangeSlider5, {
    start: [<?php echo $minpriceconqr[0].','.$maxpriceconqr[0]?>],
		connect: true,
		step: 100,
    range: {
			'min': [<?php echo $minpriceconqr[0]?>],
			'max': [<?php echo $maxpriceconqr[0]?>]
    }
	});

	const input01111 = document.getElementById('input-01111');
	const input11111 = document.getElementById('input-11111');
	const inputs = [input01111, input11111];

	rangeSlider5.noUiSlider.on('update', function(values, handle){
		inputs[handle].value = values[handle];
	});

	const setRangeSlider = (i, value) => {
		let arr = [null, null];
		arr[i] = value;

		console.log(arr);

		rangeSlider5.noUiSlider.set(arr);
	};

	inputs.forEach((el, index) => {
		el.addEventListener('change', (e) => {
			console.log(index);
			setRangeSlider(index, e.currentTarget.value);
		});
	});
}

	const rangeSlider6 = document.getElementById('range-slider6');

if (rangeSlider6) {
	noUiSlider.create(rangeSlider6, {
    start: [<?php echo $minploshadconqr[0].','.$maxploshadconqr[0]?>],
		connect: true,
		step: 1,
    range: {
			'min': [<?php echo $minploshadconqr[0]?>],
			'max': [<?php echo $maxploshadconqr[0]?>]
    }
	});

	const input011111 = document.getElementById('input-011111');
	const input111111 = document.getElementById('input-111111');
	const inputs = [input011111, input111111];

	rangeSlider6.noUiSlider.on('update', function(values, handle){
		inputs[handle].value = values[handle];
	});

	const setRangeSlider = (i, value) => {
		let arr = [null, null];
		arr[i] = value;

		console.log(arr);

		rangeSlider6.noUiSlider.set(arr);
	};

	inputs.forEach((el, index) => {
		el.addEventListener('change', (e) => {
			console.log(index);
			setRangeSlider(index, e.currentTarget.value);
		});
	});
}

	const rangeSlider7 = document.getElementById('range-slider7');

if (rangeSlider7) {
	noUiSlider.create(rangeSlider7, {
    start: [<?php echo $minmoshqr[0].','.$maxmoshqr[0]?>],
		connect: true,
		step: 1,
    range: {
			'min': [<?php echo $minmoshqr[0]?>],
			'max': [<?php echo $maxmoshqr[0]?>]
    }
	});

	const input011111 = document.getElementById('input-0111111');
	const input111111 = document.getElementById('input-1111111');
	const inputs = [input011111, input111111];

	rangeSlider7.noUiSlider.on('update', function(values, handle){
		inputs[handle].value = values[handle];
	});

	const setRangeSlider = (i, value) => {
		let arr = [null, null];
		arr[i] = value;

		console.log(arr);

		rangeSlider7.noUiSlider.set(arr);
	};

	inputs.forEach((el, index) => {
		el.addEventListener('change', (e) => {
			console.log(index);
			setRangeSlider(index, e.currentTarget.value);
		});
	});
}

const rangeSlider8 = document.getElementById('range-slider8');
if (rangeSlider8) {
	noUiSlider.create(rangeSlider8, {
    start: [<?php echo $minshumqr[0].','.$maxshumqr[0]?>],
		connect: true,
		step: 1,
    range: {
			'min': [<?php echo $minshumqr[0]?>],
			'max': [<?php echo $maxshumqr[0]?>]
    }
	});

	const input01111111 = document.getElementById('input-01111111');
	const input11111111 = document.getElementById('input-11111111');
	const inputs = [input01111111, input11111111];

	rangeSlider8.noUiSlider.on('update', function(values, handle){
		inputs[handle].value = values[handle];
	});

	const setRangeSlider = (i, value) => {
		let arr = [null, null];
		arr[i] = value;

		console.log(arr);

		rangeSlider8.noUiSlider.set(arr);
	};

	inputs.forEach((el, index) => {
		el.addEventListener('change', (e) => {
			console.log(index);
			setRangeSlider(index, e.currentTarget.value);
		});
	});
}
	window.camb12=<?php echo '"minprice=',(int)$minpriceqr[0]-1,'.00&maxprice=',(int)$maxpriceqr[0]+1,'.00&minrasresh=',$minrasqr[0],'&maxrasresh=',$maxrasqr[0],'&minugol=',(int)$minugolqr[0]-1,'.00&maxugol=',(int)$maxugolqr[0]+1,'.00&mintemp=',(int)$mintqr[0]-1,'.00&maxtemp=',(int)$maxtqr[0]+1,'.00"'?>;
	window.conb12=<?php echo '"minprice=',(int)$minpriceconqr[0]-1,'.00&maxprice=',(int)$maxpriceconqr[0]+1,'.00&minsquere=',$minploshadconqr[0],'&maxsquere=',$maxploshadconqr[0],'&minpower=',(int)$minmoshqr[0]-1,'.00&maxpower=',(int)$maxmoshqr[0]+1,'.00&minshum=',(int)$minshumqr[0]-1,'.00&maxshum=',(int)$maxshumqr[0]+1,'.00"'?>;
    window.camb12nach=window.camb12;
    window.conb12nach=window.conb12;

	$(".header2").on('click','#gl, #kam, #kon, #corzina' , function(){
event.preventDefault();
console.log($(this).attr("id"));
id=$(this).attr("id");
zap='razdel='+id;
console.log(id);
if (id=='gl'){
   document.getElementById(window.lr).classList.remove('nazhat');
    window.lr='gl';
    window.page=1;
    window.tovarsost=0;
    window.lasthref=this.firstChild.href;
window.history.replaceState(null,null,this.firstChild.href);
window.history.pushState(null,null,this.firstChild.href);
document.querySelector('title').innerHTML='Главная';
document.querySelector('.header1').style.display='flex';
console.log(Math.floor($('.burger').position().top));
        nav.style.top=Math.floor($('.burger').position().top)+'px';
        console.log(nav.style.top);
document.querySelector('.dno').style.display='flex';
document.querySelector('.camerfilt').style.display='none';
document.querySelector('.condfilt').style.display='none';
document.querySelector('.catalog').style.display='none';
document.querySelector('.tekst').style.display='flex';
document.querySelector('.contentcardcam').style.display='none';
document.querySelector('.catalog-conteiner').style.display='flex';
document.querySelector('.chatcon').style.display='none';
	document.getElementById('gl').classList.toggle('nazhat');
    $('html').animate({
            scrollTop: $('.header2').offset().top // прокручиваем страницу к требуемому элементу
        }, 500 // скорость прокрутки
        );
	tov=document.querySelector('.tovar');
	tov.innerHTML='';
}
else{
	cat=document.querySelector('.catalog');
    	l=document.getElementById('vlevo');
			r=document.getElementById('vpravo');
			tov=document.querySelector('.tovar');
			tov.innerHTML='';
	if (id=='kon'){
        document.querySelector('.center').style.display='flex';
        document.getElementById(window.lr).classList.remove('nazhat');
    window.lr='kon';
    window.page=1;
    window.tovarsost=0;
    window.lasthref=this.firstChild.href;
        document.querySelector('title').innerHTML='Кондиционеры';
        document.querySelector('.header1').style.display='flex';
        console.log(Math.floor($('.burger').position().top));
        nav.style.top=Math.floor($('.burger').position().top)+'px';
        console.log(nav.style.top);
document.querySelector('.dno').style.display='flex';
document.querySelector('.camerfilt').style.display='none';
document.querySelector('.condfilt').style.display='flex';
document.querySelector('.catalog').style.display='none';
document.querySelector('.tekst').style.display='none';
document.querySelector('.contentcardcam').style.display='none';
document.querySelector('.catalog-conteiner').style.display='flex';
document.querySelector('.chatcon').style.display='none';
	document.getElementById('kon').classList.toggle('nazhat');
    $('html').animate({
            scrollTop: $('.header2').offset().top // прокручиваем страницу к требуемому элементу
        }, 500 // скорость прокрутки
        );
	str=window.conb12+"&page=1";
	phdoc="https://condicam.ru/55.php";
	method="GET";
	}
	if (id=='kam'){
        document.querySelector('.center').style.display='flex';
        document.getElementById(window.lr).classList.remove('nazhat');
    window.lr='kam';
    window.page=1;
    window.tovarsost=0;
    window.lasthref=this.firstChild.href;
        document.querySelector('title').innerHTML='Видеонаблюдение';
      document.querySelector('.header1').style.display='flex';
      console.log(Math.floor($('.burger').position().top));
        nav.style.top=Math.floor($('.burger').position().top)+'px';
        console.log(nav.style.top);
document.querySelector('.dno').style.display='flex';
document.querySelector('.camerfilt').style.display='flex';
document.querySelector('.condfilt').style.display='none';
document.querySelector('.catalog').style.display='none';
document.querySelector('.tekst').style.display='none';
document.querySelector('.contentcardcam').style.display='none';
document.querySelector('.catalog-conteiner').style.display='flex';
document.querySelector('.chatcon').style.display='none';
	document.getElementById('kam').classList.toggle('nazhat');
    $('html').animate({
            scrollTop: $('.header2').offset().top // прокручиваем страницу к требуемому элементу
        }, 500 // скорость прокрутки
        );
	str=window.camb12+"&page=1";
	phdoc="https://condicam.ru/5.php";
	method="GET";
	}
	if (id=='corzina'){
document.getElementById(window.lr).classList.remove('nazhat');
    window.lr='corzina';
    window.page=1;
        document.querySelector('.header1').style.display='flex';
        console.log(Math.floor($('.burger').position().top));
        nav.style.top=Math.floor($('.burger').position().top)+'px';
        console.log(nav.style.top);
document.querySelector('.dno').style.display='flex';
document.querySelector('.camerfilt').style.display='none';
document.querySelector('.condfilt').style.display='none';
document.querySelector('.catalog').style.display='none';
document.querySelector('.tekst').style.display='none';
document.querySelector('.contentcardcam').style.display='none';
document.querySelector('.catalog-conteiner').style.display='flex';
document.querySelector('.chatcon').style.display='none';
	document.getElementById('corzina').classList.toggle('nazhat');
    $('html').animate({
            scrollTop: $('.header2').offset().top // прокручиваем страницу к требуемому элементу
        }, 500 // скорость прокрутки
        );
	str=window.camcorz+window.concorz+"&page=1";
	phdoc="https://condicam.ru/538.php";
	method="POST";
	}
	document.getElementById('p_prld').style.display='flex';
	jQuery.ajax({
        url:     phdoc, //url страницы (action_ajax_form.php)
        type:     method, //метод отправки
        dataType: "JSON", //формат данных
        data: str,  // Сеарилизуем объект
        success: function(response) { //Данные отправлены успешно
        	result=response;
            window.kolvo=result.kolvo;
        		if (phdoc=="https://condicam.ru/5.php"){
                    if (result.kolvo==0){
                pus=document.createElement('div');
                pus.innerHTML='К сожалению, ничего подходящего не нашлось(';
                pus.id='pusto';
                pus.style.display='flex';
                tov.appendChild(pus);
            }
            else{
        		result.cards.forEach((el) => {
				camcard(el);
			})
            }
			}
			if (phdoc=="https://condicam.ru/55.php"){
				if (result.kolvo==0){
                pus=document.createElement('div');
                pus.innerHTML='К сожалению, ничего подходящего не нашлось(';
                pus.id='pusto';
                pus.style.display='flex';
                tov.appendChild(pus);
            }
            else{
                result.cards.forEach((el) => {
				condcard(el);
				})
            }
			}
			if (phdoc=="https://condicam.ru/538.php"){
				if (result.kolvo==0){
				pus=document.createElement('div');
                document.querySelector('.center').style.display='none';
        		pus.innerHTML='К сожалению, ничего подходящего вы пока не нашли(';
        		pus.id='pusto';
        		pus.style.display='flex';
        		tov.appendChild(pus);
                l.style.display='none';
                l.href='#';
                r.style.display='none';
                r.href='#';
        	}
        	else{
                document.querySelector('.center').style.display='flex';
				result.cams.forEach((el) => {
        			camcard(el);
        		})
        		result.conds.forEach((el) => {
        			condcard(el);
        		})
        	}
			}
        		if (result.kolvo>1){
			l.style.display='none';
            l.href='#';
			r.style.display='block';
            if (window.lr=='kam'){
                r.href='https://condicam.ru/cameras/page=2';
            }
            else{
                r.href='https://condicam.ru/conditioners/page=2';
            }
		}
			else{
				l.style.display='none';
                l.href='#';
			r.style.display='none';
            r.href='#';
			}
            if (result.kolvo==1){
            l.style.display='none';
            l.href='#';
            r.style.display='none';
            r.href='#';
        }
        document.getElementById('p_prld').style.display='none';
        document.querySelector('.catalog').style.display='flex';
        document.querySelector('.center').innerHTML=window.page+' / '+window.kolvo;
        window.history.replaceState(null,null,window.lasthref);
				window.history.pushState(null,null,window.lasthref);
				console.log(window.lasthref);
    	},
    	error: function(response) { // Данные не отправлены
    		document.querySelector('.catalog').innerHTML = "Ошибка. Данные не отправлены. ";
    	}
 	});
}
});
    $(".filt").on('click','#otpr, #otprcon', function() {
    	cat=document.querySelector('.catalog');
    	l=document.querySelector('#vlevo');
			r=document.querySelector('#vpravo');
			tov=document.querySelector('.tovar');
			tov.innerHTML='';
			window.page=1;
			if ($(this).attr("id")=='otpr'){
				forma="#form1";
				phdoc="https://condicam.ru/5.php";
				window.camb12=jQuery(forma).serialize();
		    window.cambc=window.camb12 +"&page=1";
		    data=window.cambc;
			}
			else{
				forma="#form2";
				phdoc="https://condicam.ru/55.php";
				window.conb12=jQuery(forma).serialize();
		    window.conbc=window.conb12 +"&page=1";
		    data=window.conbc;
			}
		    document.getElementById('p_prld').style.display='flex';
        	document.querySelector('.catalog').style.display='none';
			jQuery.ajax({
        url:     phdoc, //url страницы (action_ajax_form.php)
        type:     "GET", //метод отправки
        dataType: "JSON", //формат данных
        data: data,  // Сеарилизуем объект
        success: function(response) { //Данные отправлены успешно
        	result=response;
        	console.log(phdoc);
            window.kolvo=result.kolvo;
        	if (result.kolvo==0){
                document.querySelector('.center').style.display='none';
        		pus=document.createElement('div');
        		pus.innerHTML='К сожалению, ничего подходящего не нашлось(';
        		pus.id='pusto';
                pus.style.display='flex';
        		tov.appendChild(pus);
                l.style.display='none';
                l.href='#';
                r.style.display='none';
                r.href='#';
        	}
        	else{
                document.querySelector('.center').style.display='flex';
     			if (phdoc=="https://condicam.ru/5.php"){
        		result.cards.forEach((el) => {
				camcard(el);
			})
			}
			else{
				result.cards.forEach((el) => {
				condcard(el);
				})

			}
        	if (result.kolvo>1){
			r.style.display='block';
            if(window.lr=='kon'){
                r.href='https://condicam.ru/conditioners/page=2';
            }
            else{
                r.href='https://condicam.ru/cameras/page=2';
            }
			l.style.display='none';
            l.href='#';
		};
        if (result.kolvo==1){
            l.style.display='none';
            l.href='#';
            r.style.display='none';
            r.href='#';
        }
        	}
        	document.getElementById('p_prld').style.display='none';
        	document.querySelector('.catalog').style.display='flex';
            document.querySelector('.center').innerHTML=window.page+' / '+window.kolvo;
        	console.log(result.kolvo);
    	},
    	error: function(response) { // Данные не отправлены
    		document.querySelector('.catalog').innerHTML = "Ошибка. Данные не отправлены.";
    	}
 	});
		});
function pag(){
            if (window.lr=="kam"){
            window.cambc=window.camb12 +"&page="+window.page;
            data=window.cambc;
            phdoc="https://condicam.ru/5.php";
            method="GET";
            }
            if (window.lr=="kon"){
            window.conbc=window.conb12 +"&page="+window.page;
            data=window.conbc;
            console.log('data',data);
            phdoc="https://condicam.ru/55.php";
            method="GET";
            }
            if (window.lr=="corzina"){
            corbc=window.camcorz+window.concorz +"&page="+window.page;
            data=corbc;
            phdoc="https://condicam.ru/538.php";
            method="POST";
            }
            document.getElementById('p_prld').style.display='flex';
            document.querySelector('.catalog').style.display='none';
            $('html').animate({
            scrollTop: $('.header2').offset().top // прокручиваем страницу к требуемому элементу
        }, 500 // скорость прокрутки
        );
            jQuery.ajax({
        url:     phdoc, //url страницы (action_ajax_form.php)
        type:     method, //метод отправки
        dataType: "JSON", //формат данных
        data: data,  // Сеарилизуем объект
        success: function(response) { //Данные отправлены успешно
            result=response;
            window.kolvo=result.kolvo
            console.log(result.kolvo);
                if (phdoc=="https://condicam.ru/5.php"){
                result.cards.forEach((el) => {
                camcard(el);
            })
            }
            if (phdoc=="https://condicam.ru/55.php"){
                result.cards.forEach((el) => {
                condcard(el);
                })
            }
            if (phdoc=="https://condicam.ru/538.php"){
                result.cams.forEach((el) => {
                    camcard(el);
                })
                result.conds.forEach((el) => {
                    condcard(el);
                })
            }
            if(window.lr=='kon' || window.lr=='kam'){
                window.history.replaceState(null,null,window.lasthref);
								window.history.pushState(null,null,window.lasthref);
								console.log(window.lasthref);
            if (window.page>1 && window.page<result.kolvo){
            l.style.display='block';
            if(window.lr=='kon'){
                l.href='https://condicam.ru/conditioners/page='+(window.page-1);
            }
            else{
                l.href='https://condicam.ru/cameras/page='+(window.page-1);
            }
            r.style.display='block';
            if(window.lr=='kon'){
                r.href='https://condicam.ru/conditioners/page='+(window.page+1);
            }
            else{
                r.href='https://condicam.ru/cameras/page='+(window.page+1);
            }
            }
        if (window.page>1 && window.page==result.kolvo){
            l.style.display='block';
            if(window.lr=='kon'){
                l.href='https://condicam.ru/conditioners/page='+(window.page-1);
            }
            else{
                l.href='https://condicam.ru/cameras/page='+(window.page-1);
            }
            r.style.display='none';
            r.href='#'
        }
        if (window.page==1){
            l.style.display='none';
            l.href='#'
            r.style.display='block';
            if(window.lr=='kon'){
                r.href='https://condicam.ru/conditioners/page='+(window.page+1);
            }
            else{
                r.href='https://condicam.ru/cameras/page='+(window.page+1);
            }
        }
    }
    else{
        if (window.page>window.kolvo || window.page==window.kolvo){
            l.style.display='block';
            r.style.display='none';
        }
        if ((window.kolvo<=1 || window.kolvo==1) && window.page==1){
            l.style.display='none';
            r.style.display='none';
            document.querySelector('.center').style.display='none';
        }
        if (window.page==1 && window.kolvo>1){
            l.style.display='none';
            r.style.display='block';
        }

    }
        document.querySelector('.center').innerHTML=window.page+' / '+window.kolvo;
            document.getElementById('p_prld').style.display='none';
            document.querySelector('.catalog').style.display='flex';
        },
        error: function(response) { // Данные не отправлены
            document.querySelector('.tovar').innerHTML = "Ошибка. Данные не отправлены.";
        }
    });
        }
	var arr=[];
    arr.push(document.getElementById('vlevo'));
    arr.push(document.getElementById('vpravo'));
	arr.forEach(function(e){
        e.addEventListener('click', function(){
            event.preventDefault();
            window.tovarsost=0;
        window.lasthref=this.href;
        cat=document.querySelector('.catalog');
        l=document.getElementById('vlevo');
        console.log(window.page);
            r=document.getElementById('vpravo');
            tov=document.querySelector('.tovar');
            tov.innerHTML='';
            if (this.id=='vpravo'){
            window.page=window.page+1;
            console.log('page',window.page);
            }
            else{
            window.page=window.page-1;
            console.log('page',window.page);
            }
            pag();
        });
    });

$(".catalog").on('click','.cardim, .im, .card, .cencorz, .name, .netnalichie, .estnalichie, .rasresh, .ugol, .cena' ,  function(){
event.preventDefault();
if (!this.classList.contains('card')){
window.tovarsost=1;
window.lasthref=this.parentElement.href;
window.lasttitle=document.querySelector('title').innerHTML;
console.log(this.parentElement.href);
document.querySelector('.camerfilt').style.display='none';
	document.querySelector('.condfilt').style.display='none';
	document.querySelector('.tekst').style.display='none';
	document.querySelector('.catalog').style.display='none';
	document.getElementById('p_prld').style.display='flex';
	id=$(this).attr("id");
zap='zapis='+id;
 if (this.classList.contains('cam')){
 	phdoc='https://condicam.ru/534.php';
 }
 else{
 	phdoc='https://condicam.ru/535.php';
 }
	jQuery.ajax({
        url:     phdoc, //url страницы (action_ajax_form.php)
        type:     "GET", //метод отправки
        dataType: "JSON", //формат данных
        data: zap,  // Сеарилизуем объект
        success: function(response) { //Данные отправлены успешно
        	if (phdoc=='https://condicam.ru/534.php'){
        	document.querySelector('.contentcardcam').innerHTML = "<div class='cardbigcam' ><div class='nameback' ><div class='sr1'><div class='strelka' id='cam' ><img class='back'src='https://condicam.ru/back.svg'></div></div><div class='namecam' ></div></div><div class='imcencorz'><div class='imbig'><img class='cardimbig'></div><div class='cencorz'><div class='cencon'><div class='cencam'>Цена:</div><div class='zn'></div></div><div class='estnalichieb'>Есть в наличии</div><div class='corzcam'><div class='corzca' style='color: #FCEA66; background: #3433FF;'>В корзине</div></div></div></div><div class='ophar'><div class='opharv'><div class='op'>Описание</div><div class='har'>Характеристики</div></div><div class='opharcon'><div class='opv'><div></div></div><div class='harv'><div class='conv'><div class='pro'>Производитель:</div><div class='proisvod'></div></div><div class='conv'><div class='cnstr'>Конструкция:</div><div class='constr'></div></div><div class='conv'><div class='angle'>Угол обзора:</div><div class='ugolm'></div></div><div class='conv'><div class='formati'>Форматы видеонаблюдения:</div><div class='frm'></div></div><div class='conv'><div class='sredi'>Допустимые среды работы:</div><div class='srd'></div></div><div class='conv'><div class='tempd'>Температурный диапазон:</div><div class='temps'></div></div><div class='conv'><div class='rasres'>Разрешение:</div><div class='res'></div></div><div class='conv'><div class='ms'>Совместимость со смартфонами:</div><div class='sovm'></div></div><div class='conv'><div class='ws'>Беспроводное подключение:</div><div class='wrs'></div></div><div class='conv'><div class='sc'>Поддержка сим-карт:</div><div class='sim'></div></div><div class='conv'><div class='dadv'>Датчик движения:</div><div class='dd'></div></div><div class='conv'><div class=AV>Защита от вандализма:</div><div class='anv'></div></div><div class='conv'><div class='nm'>Ночной режим:</div><div class='night'></div></div><div class='conv'><div class='aud'>Поддержка аудио:</div><div class='ad'></div></div><div class='conv'><div class='mc'>Запись на карту памяти:</div><div class='mcrd'></div></div><div class='conv'><div class='p2p'>Протокол Р2Р:</div><div class='pitupi'></div></div><div class='conv'><div class='OV'>Технология OnVif:</div><div class='onvif'></div></div></div></div></div></div>";
        	document.querySelector('.namecam').innerHTML=response.name;
            document.querySelector('title').innerHTML=response.name;
        	document.querySelector('.cardimbig').setAttribute("src",response.path);
            document.querySelector('.cardimbig').setAttribute("alt",'Камера видеонаблюдения '+response.name);
        	document.querySelector('.zn').innerHTML='&nbsp'+response.price;
        	if (response.nalichie==0){
        		document.querySelector('.estnalichieb').innerHTML='Нет в наличии';
        		document.querySelector('.estnalichieb').className='netnalichieb';
        	}
        	zam="&camcorz%5B%5D="+response.id;
        	if (window.camcorz.indexOf(zam)<0){
        		document.querySelector('.corzcam').innerHTML="<div class='corzca' style='color: #3433FF; background: #FCEA66;' >В корзину</div>";
                document.querySelector('.corzca').background='#FCEA66';
                console.log(document.querySelector('.corzca').background);
                document.querySelector('.corzca').color='#3433FF';
        	}
        	document.querySelector('.corzca').setAttribute("id",response.id);
        	document.querySelector('.opv').innerHTML='&nbsp'+response.opisaniecam;
        	document.querySelector('.proisvod').innerHTML='&nbsp'+response.nameconstruct;
        	document.querySelector('.constr').innerHTML='&nbsp'+response.nameconst;
        	document.querySelector('.ugolm').innerHTML='&nbsp'+response.ugol+"°";
        	formati="";
        	sredi="";
        	if (response.AHD==1){
        		formati+=' AHD';
        	}
        	if (response.TVI==1){
        		formati+=' TVI';
        	}
        	if (response.CVI==1){
        		formati+=' CVI';
        	}
        	if (response.CVBS==1){
        		formati+=' CVBS';
        	}
        	document.querySelector('.frm').innerHTML='&nbsp'+formati;
        	if (response.pomeshenie==1){
        		sredi+=' Помещение';
        	}
        	if (response.ulitsa==1){
        		sredi+=' Улица';
        	}
        	document.querySelector('.srd').innerHTML='&nbsp'+sredi;
        	document.querySelector('.temps').innerHTML='&nbsp'+'от '+response.mint+'° до '+response.maxt+'°';
        	document.querySelector('.res').innerHTML='&nbsp'+response.rasreshenie+'МП';
        	if (response.mobsov==1){
        		document.querySelector('.sovm').innerHTML='&nbsp да';
        	}
        	else{
        		document.querySelector('.sovm').innerHTML='&nbsp нет';
        	}
        	if (response.wireless==1){
        		document.querySelector('.wrs').innerHTML='&nbsp да';
        	}
        	else{
        		document.querySelector('.wrs').innerHTML='&nbsp нет';
        	}
        	if (response.simcard==1){
        		document.querySelector('.sim').innerHTML='&nbsp да';
        	}
        	else{
        		document.querySelector('.sim').innerHTML='&nbsp нет';
        	}
        	if (response.datchdvizh==1){
        		document.querySelector('.dd').innerHTML='&nbsp да';
        	}
        	else{
        		document.querySelector('.dd').innerHTML='&nbsp нет';
        	}
        	if (response.AV==1){
        		document.querySelector('.anv').innerHTML='&nbsp да';
        	}
        	else{
        		document.querySelector('.anv').innerHTML='&nbsp нет';
        	}
        	if (response.nightmode==1){
        		document.querySelector('.night').innerHTML='&nbsp да';
        	}
        	else{
        		document.querySelector('.night').innerHTML='&nbsp нет';
        	}
        	if (response.audio==1){
        		document.querySelector('.ad').innerHTML='&nbsp да';
        	}
        	else{
        		document.querySelector('.ad').innerHTML='&nbsp нет';
        	}
        	if (response.memorycard==1){
        		document.querySelector('.mcrd').innerHTML='&nbsp да';
        	}
        	else{
        		document.querySelector('.mcrd').innerHTML='&nbsp нет';
        	}
        	if (response.P2P==1){
        		document.querySelector('.pitupi').innerHTML='&nbsp да';
        	}
        	else{
        		document.querySelector('.pitupi').innerHTML='&nbsp нет';
        	}
        	if (response.Onvif==1){
        		document.querySelector('.onvif').innerHTML='&nbsp да';
        	}
        	else{
        		document.querySelector('.onvif').innerHTML='&nbsp нет';
        	}

        	document.getElementById('p_prld').style.display='none';
        	document.querySelector('.contentcardcam').style.display='flex';
        }
        else{
        	document.querySelector('.contentcardcam').innerHTML ="<div class='cardbigcam' ><div class='nameback' ><div class='sr1'><div class='strelka' id='cam' ><img class='back'src='https://condicam.ru/back.svg'></div></div><div class='namecam' ></div></div><div class='imcencorz'><div class='imbig'><img class='cardimbig'></div><div class='cencorz'><div class='cencon'><div class='cencam'>Цена:</div><div class='zn' ></div></div><div class='estnalichieb'>Есть в наличии</div><div class='corzcon'><div class='corzco' style='color: #FCEA66; background: #3433FF;' >В корзине</div></div></div></div><div class='ophar'><div class='opharv'><div class='op'>Описание</div><div class='har'>Характеристики</div></div><div class='opharcon'><div class='opv'><div class='opv'></div></div><div class='harv'><div class='conv'><div class='pro'>Производитель:</div><div class='proisvod'></div></div><div class='conv'><div class='cnstr'>Конструкция:</div><div class='constr'></div></div><div class='conv'><div class='angle'>Мощность:</div><div class='mosh sod'></div></div><div class='conv'><div class='formati'>Режимы работы:</div><div class='regim sod'></div></div><div class='conv'><div class='sredi'>Инвертор:</div><div class='srd'></div></div><div class='conv'><div class='tempd'>Тип внутреннего блока:</div><div class='type sod'></div></div><div class='conv'><div class='rasres'>Рекомендуемая площадь:</div><div class='squ sod'></div></div><div class='conv'><div class='ms'>Уровень шума:</div><div class='shum sod'></div></div><div class='conv'><div class='ws'>Ширина внутреннего блока:</div><div class='wide sod'></div></div></div></div></div></div>"
        	document.querySelector('.namecam').innerHTML=response.name;
            document.querySelector('title').innerHTML=response.name;
        	document.querySelector('.cardimbig').setAttribute("src",response.path);
            document.querySelector('.cardimbig').setAttribute("alt",'Кондиционер '+response.name);
        	document.querySelector('.zn').innerHTML=response.cena;
        	if (response.nalichie==0){
        		document.querySelector('.estnalichieb').innerHTML='Нет в наличии';
        		document.querySelector('.estnalichieb').className='netnalichieb';
        	}
        	zam="&concorz%5B%5D="+response.id;
        	if (window.concorz.indexOf(zam)<0){
        		document.querySelector('.corzcon').innerHTML="<div class='corzco' style='color: #3433FF; background: #FCEA66;' >В корзину</div>";
                document.querySelector('.corzco').background='#FCEA66';
                document.querySelector('.corzco').color='#3433FF';
        	}
        	document.querySelector('.corzco').setAttribute("id",response.id);
        	document.querySelector('.opv').innerHTML='&nbsp'+response.opisaniecon;
        	document.querySelector('.proisvod').innerHTML='&nbsp'+'&nbsp'+response.connameprod;
        	document.querySelector('.constr').innerHTML='&nbsp'+response.nameconcons;
        	document.querySelector('.mosh').innerHTML='&nbsp'+response.moshnost+"Ватт";
        	reg="";
        	if (response.ventilyacia==1){
        		reg+=" Вентиляция ";
        	}
        	if (response.osushenie==1){
        		reg+=" Осушение ";
        	}
        	if (response.ochlazhdenie==1){
        		reg+=" Охлаждение ";
        	}
        	if (response.obogrev==1){
        		reg+=" Обогрев ";
        	}
        	document.querySelector('.regim').innerHTML='&nbsp'+reg;
        	if (response.invertor==1){
        		document.querySelector('.srd').innerHTML='&nbsp Да';
        	}
            else{
                document.querySelector('.srd').innerHTML='&nbsp Нет';
            }
        	if (response.tipvnutbl==1){
        		document.querySelector('.type').innerHTML='&nbsp Мобильный';
        	}
        	if (response.tipvnutbl==2){
        		document.querySelector('.type').innerHTML='&nbsp Настенный';
        	}
        	document.querySelector('.squ').innerHTML=' &nbsp'+response.ploshad+'M<sup>2</sup>';
        	document.querySelector('.shum').innerHTML='&nbsp '+response.shum+'ДБ';
        	document.querySelector('.wide').innerHTML=' &nbsp'+response.shirina+'См';
        	document.getElementById('p_prld').style.display='none';
        	document.querySelector('.contentcardcam').style.display='flex';
        }
        window.history.replaceState(null,null,window.lasthref);
				window.history.pushState(null,null,window.lasthref);
				console.log(window.lasthref);
    	},
    	error: function(response) { // Данные не отправлены
    		document.querySelector('.catalog').innerHTML = "Ошибка. Данные не отправлены.";
    	}
 	});
}
});

document.addEventListener("DOMContentLoaded",function(){
window.addEventListener('popstate',function(){
    event.preventDefault();
		console.log(event);
		window.location.href=event.target.location.href;
	});
});


$(".contentcardcam").on('click','.strelka' ,  function(){
window.history.replaceState(null,null,window.lasthref.replace(RegExp(/id=\d*$/),''));
document.querySelector('title').innerHTML=window.lasttitle;
console.log(window.lasthref.replace(RegExp(/id=\d*$/),''));
	document.querySelector('.contentcardcam').innerHTML='';
document.querySelector('.contentcardcam').style.display='none';
	if (window.lr=='kam'){
	document.querySelector('.camerfilt').style.display='block';
	document.querySelector('.condfilt').style.display='none';
}
if (window.lr=='kon'){
	document.querySelector('.camerfilt').style.display='none';
	document.querySelector('.condfilt').style.display='block';
}
if (window.lr=='corzina'){
	document.querySelector('.camerfilt').style.display='none';
	document.querySelector('.condfilt').style.display='none';
}
	document.querySelector('.catalog').style.display='flex';
	document.querySelector('.tekst').style.display='none';
});



$(".catalog").on('click','.corzcam, .corzcon' ,  function(){
	event.preventDefault();
    id=$(this).attr("id");
	sc=document.querySelector('.schetchik').innerHTML;
	if (this.classList.contains('corzcam')){
idc='.cam'+id;
zam="&camcorz%5B%5D="+id;
if (document.querySelector(idc).innerHTML=='В корзине'){
	window.camcorz=window.camcorz.replace(zam,"");
	document.querySelector(idc).innerHTML='В корзину';
	sc=Number(sc)-1;
	document.querySelector('.schetchik').innerHTML=sc;
	document.querySelector(idc).style.background='#FCE434';
    document.querySelector(idc).style.color='#3433FF';
}
else{
	window.camcorz+="&camcorz%5B%5D="+id;
	document.querySelector(idc).innerHTML='В корзине'
	sc=Number(sc)+1;
	document.querySelector('.schetchik').innerHTML=sc;
	document.querySelector(idc).style.background='#3433FF';
    document.querySelector(idc).style.color='#FCE434';
}
}
if (this.classList.contains('corzcon')){
	idc='.con'+id;
zam="&concorz%5B%5D="+id;
if (document.querySelector(idc).innerHTML=='В корзине'){
	window.concorz=window.concorz.replace(zam,"");
	document.querySelector(idc).innerHTML='В корзину';
	sc=Number(sc)-1;
	document.querySelector('.schetchik').innerHTML=sc;
	document.querySelector(idc).style.background='#FCE434';
    document.querySelector(idc).style.color='#3433FF';
}
else{
	window.concorz+="&concorz%5B%5D="+id;
	document.querySelector(idc).innerHTML='В корзине'
	sc=Number(sc)+1;
	document.querySelector('.schetchik').innerHTML=sc;
	document.querySelector(idc).style.background='#3433FF';
    document.querySelector(idc).style.color='#FCE434';
}
}
console.log(window.concorz);
localStorage.setItem('concorz',window.concorz);
console.log(window.camcorz);
localStorage.setItem('camcorz',window.camcorz);
});
$(".dno").on('click','.c' ,  function(){
document.querySelector('.fn').style.display='flex';
document.querySelector('.punct1').style.display='flex';
document.querySelector('.frm1').style.display='flex';
})
$(".header1").on('click','.cc' ,  function(){
document.querySelector('.fn').style.display='flex';
document.querySelector('.punct1').style.display='none';
document.querySelector('.frm1').style.display='flex';
})
$(".fn").on('click','.cross' ,  function(){
document.querySelector('.fn').style.display='none';
})
window.zaykolv=0;
$(".fn").on('click','.zapusk' ,  function(){
	if (document.querySelector('.frmin2').value!='' && window.zaykolv<4){
		window.zaykolv++;
	messageData = {
			action: 'zayavka',
			MessageName: document.querySelector('.frmin4').value,
			MessageTime: document.querySelector('.frmin3').value,
			MessageNum: document.querySelector('.frmin2').value,
			MessagePozh:document.querySelector('.frmin1').value,
			FromUser:pole.id,
			ToUser:'1m1'
	}
			str=JSON.stringify(messageData);
			socket.send(str);
document.querySelector('.frmin4').value='';
document.querySelector('.frmin3').value='';
document.querySelector('.frmin2').value='';
document.querySelector('.frmin1').value='';
document.querySelector('.frm1').style.display='none';
document.querySelector('.punct10').style.display='flex';
setTimeout(function(){
	document.querySelector('.punct10').style.display='none';
	document.querySelector('.fn').style.display='none';
}, 1500);
}
else{
	if (window.zaykolv<4){
	document.querySelector('.zag').innerHTML='Поля с * обязательны к заполнению!';
	document.querySelector('.zag').style.color='#ED1C24';
}
else{
	document.querySelector('.frmin4').value='';
	document.querySelector('.frmin3').value='';
	document.querySelector('.frmin2').value='';
	document.querySelector('.frmin1').value='';
	document.querySelector('.frm1').style.display='none';
	document.querySelector('.punct10').style.display='flex';
	setTimeout(function(){
		document.querySelector('.punct10').style.display='none';
		document.querySelector('.fn').style.display='none';
	}, 1500);
}
}
})
$(".contentcardcam").on('click','.corzca, .corzco' ,  function(){
	id=$(this).attr("id");
	sc=document.querySelector('.schetchik').innerHTML;
if (this.classList.contains('corzca')){
	idc='.cam'+id;
	zam="&camcorz%5B%5D="+id;
	cor=window.camcorz
	idcc='.cardcam'+id;
}
if (this.classList.contains('corzco')){
	idc='.con'+id;
	zam="&concorz%5B%5D="+id;
	cor=window.concorz;
	idcc='.cardcon'+id;
}
if (this.innerHTML=='В корзине'){
	cor=cor.replace(zam,"");
	sc=Number(sc)-1;
	document.querySelector('.schetchik').innerHTML=sc;
	this.innerHTML='В корзину';
	this.style.background='#FCE434';
    this.style.color='#3433FF';
		document.querySelector(idcc).style.display='none';
	document.querySelector(idc).style.background='#FCE434';
    document.querySelector(idc).style.color='#3433FF';
	document.querySelector(idc).innerHTML='В корзину';
}
else{
	cor+=zam;
	this.innerHTML='В корзине';
	sc=Number(sc)+1;
	document.querySelector('.schetchik').innerHTML=sc;
	this.style.background='#3433FF';
    this.style.color='#FCE434';
	document.querySelector(idcc).style.display='flex';
	document.querySelector(idc).style.background='#3433FF';
    document.querySelector(idc).style.color='#FCE434';
	document.querySelector(idc).innerHTML='В корзине';
}
if (this.classList.contains('corzca')){
	window.camcorz=cor;
}
if (this.classList.contains('corzco')){
	window.concorz=cor;
}
console.log(window.camcorz);
localStorage.setItem('concorz',window.concorz);
console.log(window.concorz);
localStorage.setItem('camcorz',window.camcorz);
});
window.onload=function(){
        setTimeout(()=>{preloader.style.opacity='0';
    preloader.style.visibility= 'hidden';
    preloader.style.transition= 'opacity 1s, visibility 0s 1s';
    },500);
}
</script>
</footer>
</body>
</html>
