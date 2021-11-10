var unread=0;
var mesPage=1;
var cp=0;
var sp=0;
var met=0;
var uk=0;
var sob='';
var tryes=0;
var ttb=0;
    function message(data, par,or) {
    con=document.querySelector('.chatlist');
    a=document.querySelectorAll('.usersection');
    if (par!=1){
    	if (data.FromUser!='1m1'){
        n=document.querySelector('#'+data.FromUser);
        console.log(n);
        a=document.querySelectorAll('.usersection');
        if (n==null){
        	met++;
            a.forEach(function(e) {
                w=e.style.order;
                console.log(w);
                w=Number(w)+1;
                e.style.order=w;
            });
            d=mydate(data.date);
            b=document.createElement('div');
            b.className='usersection';
            b.id=data.FromUser;
            b.style.order=1;
            us="Клиент";
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
            unreadkolvo=1
            console.log('unread', style);
            stl='style="display:flex"';
            dt='В сети';
            stli='style="color:#0FC378"';
            b.innerHTML='<div class="usercon"><div class="username">'+data.FromUser+
            '</div><div class="vseti" '+stli+' >'+dt+
            '</div></div><div class="consoob"><div class="consoobvn">'+
            '<div class="lastmessage"><div class="FromName">'
            +us+'</div><div class="MessageText"'+style+'>'
            +data.MessageText+'</div>'+'<div class="date">'+d+
            '</div></div></div><div class="unr"'+stl+
            '><div class="unrv">'+unreadkolvo+'</div></div></div>';
             con.appendChild(b);
        }
        else{
            t=Number(n.style.order);
            a.forEach(function(e) {
              	w=Number(e.style.order);
                if (t>=w){
                	w=w+1;
                	e.style.order=w;
           		}
            });
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
            ty=n.querySelector('.unrv');
            d=mydate(data.date);
            us="Клиент";
            unreadkolvo=Number(ty.innerHTML);
            unreadkolvo++;
            ty.innerHTML=unreadkolvo;
            stl='style="display:flex"';
            dt='В сети';
            stli='style="color:#0FC378"';
            n.innerHTML='<div class="usercon"><div class="username">'+data.FromUser+'</div><div class="vseti" '+stli+' >'+dt+'</div></div><div class="consoob"><div class="consoobvn"><div class="lastmessage"><div class="FromName">  '+us+'</div><div class="MessageText"'+style+'>'
            +data.MessageText+'</div>'+'<div class="date">'+d+'</div></div></div><div class="unr"'+stl+
            '><div class="unrv">'+unreadkolvo+'</div></div></div>';
            n.style.order='1';
            if (data.FromUser==sob){
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
            s.style.justifyContent = "flex-start";
            s.style.WebkitjustifyContent = "flex-start";
            v.innerHTML='<div class="FromName">Клиент</div><div class="MessageText"'+style+'>'+data.MessageText+'</div>'+ '<div class="date">'+d+'</div>';
            r=document.createElement('div');
            r.className='readedl';
            if (data.readed==1){
                r.style.display='none';
            }
            s.appendChild(v);
            s.appendChild(r);
            a=document.querySelectorAll('.section');
            s.style.order='1';
            a.forEach(function(e) {
                w=Number(e.style.order);
                w=w+1;
                e.style.order=w;
                }
            );
    n.appendChild(s);
            }
        }
    }
    else{
    	n=document.querySelector('#'+sob);
    			t=Number(n.style.order);
            a.forEach(function(e) {
              	w=Number(e.style.order);
                if (t>=w){
                	w=w+1;
                	e.style.order=w;
           		}
            });
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
            d=mydate(data.date);
            us="Я";
            dt=n.querySelector('.vseti').innerHTML;
            stl='style="display:none"';
            if (dt=='В сети'){
            stli='style="color:#0FC378"';
        }
        else{
        	stli='style="color:#FF3333"';
        }
            n.innerHTML='<div class="usercon"><div class="username">'+sob+'</div><div class="vseti" '+stli+' >'+dt+'</div></div><div class="consoob"><div class="consoobvn"><div class="lastmessage"><div class="FromName">  '+us+'</div><div class="MessageText"'+style+'>'
            +data.MessageText+'</div>'+'<div class="date">'+d+'</div></div></div><div class="unr"'+stl+
            '><div class="unrv">0</div></div></div>';
            n.style.order='1';
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
            a=document.querySelectorAll('.section');
            s.style.order='1';
            a.forEach(function(e) {
                w=Number(e.style.order);
                w=w+1;
                e.style.order=w;
                }
            );
    n.appendChild(s);
    }
    }
    else{
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
        else{
            s.style.justifyContent = "flex-start";
            s.style.WebkitjustifyContent = "flex-start";
            v.innerHTML='<div class="FromName">Клиент</div><div class="MessageText"'+style+'>'+data.MessageText+'</div>'+ '<div class="date">'+d+'</div>';
            r=document.createElement('div');
            r.className='readedl';
            if (data.readed==1){
                r.style.display='none';
            }
            s.appendChild(v);
            s.appendChild(r);
        }
        s.style.order=or;
            n.appendChild(s);
    }
}
var bl = document.querySelector('.chat-result');
var bb=document.querySelector('.chatlist');
bb.addEventListener('scroll', function(){
	str='&met='+met;
	console.log(this.scrollHeight,this.scrollTop,this.clientHeight)
	if ((this.scrollHeight-this.scrollTop-this.clientHeight<3) && (met<Number(sp))) {
		console.log(met,sp);
	jQuery.ajax({
        url:     'us.php', //url страницы (action_ajax_form.php)
        type:     'POST', //метод отправки
        dataType: "JSON", //формат данных
        data: str,  // Сеарилизуем объект
        success: function(response) { //Данные отправлены успешно
                data=response;
                console.log(data);
                data.users.forEach(function(e){
                	met++;
                	console.log('met',met);
                	if(e.type!='CON'){
                	d=mydate(e.mes_date);
                	a=document.createElement('div');
                	a.className='usersection';
                	a.id=e.user;
                	a.style.order=met;
                	n++;
                	if(e.FromUser=='1m1'){
                		us="  Я";
                	}
                	else{
                		us="  Клиент";
                	}
                	if (e.m_text.length>21){
                var mas='';
                var res='';
                var style='';
                for (var i =0; i < e.m_text.length; i++) {
                        mas+=e.m_text[i];
                        if (i % 21==0 && i!=0){
                                if (mas.indexOf(' ')<0){
                                style='style="word-break: break-all;"';
                                break;
                                }
                                mas='';
                        }
                        if(i==e.m_text.length-1){
                                style='style="word-wrap: break-word;"';
                        }
                }
            }
                	if (e.unreadkolvo>0){
                	stl='style="display:flex"';
                }
                else{
                	stl='style="display:none"';
                }
                if(e.vos>e.vis){
                	dt='В сети';
                	stli='style="color:#0FC378"';
                }
                else{
                	dt=mydate(e.vis);
                	dt='Был в сети '+dt;
                	stli='style="color:#FF3333"';
                }
                	a.innerHTML='<div class="usercon"><div class="username">'+e.user+'</div><div class="vseti" '+stli+' >'+dt+'</div></div><div class="consoob"><div class="consoobvn"><div class="lastmessage"><div class="FromName">  '+us+'</div><div class="MessageText"'+style+'>'
                	+e.m_text+'</div>'+'<div class="date">'+d+'</div></div></div><div class="unr"'+stl+
                	'><div class="unrv">'+e.unreadkolvo+'</div></div></div>';
                	document.querySelector('.chatlist').appendChild(a);
                }
                else{
                	if(e.vos>e.vis){
                	d=+mydate(e.mes_date);
                	a=document.createElement('div');
                	a.className='usersection';
                	a.id=e.user;
                	a.style.order=n;
                	n++;
                	us="Клиент";
                	stl='style="display:none"';
                	dt='В сети';
                	stli='style="color:#0FC378"';
                	a.innerHTML='<div class="usercon"><div class="username">'+e.user+'</div><div class="vseti" '+stli+' >'+dt+'</div></div><div class="consoob"><div class="consoobvn"><div class="lastmessage"><div class="FromName">  '+us+'</div><div class="MessageText">'
                	+e.m_text+'</div>'+'<div class="date">'+d+'</div></div></div><div class="unr"'+stl+
                	'><div class="unrv">'+e.unreadkolvo+'</div></div></div>';
                	a.style.order=met;
                	document.querySelector('.chatlist').appendChild(a);
                	}
                }
                })
        },
        error: function(response) { // Данные не отправлены
                console.log(response);
        }
        });
	}
})
bl.addEventListener('scroll', function(){
    if (this.scrollHeight+this.scrollTop-this.clientHeight<3) {
        if (mesPage<=cp){
        str='user='+sob+'&Page='+mesPage;
        mesPage+=1;
        jQuery.ajax({
        url:     'mes.php', //url страницы (action_ajax_form.php)
        type:     'POST', //метод отправки
        dataType: "JSON", //формат данных
        data: str,  // Сеарилизуем объект
        success: function(response) { //Данные отправлены успешно
                data=response;
                or =(mesPage-2)*30+1;
                console.log(data);
                data.messages.forEach(function(e) {
                message(e,1,or);
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
var pole=document.querySelector('.chat');
    document.querySelector('.send').addEventListener('click', function(){
        if (pole.value=='' || pole.value.match(/^[ ]+$/)) {
        console.info('Неотправлено');
        document.querySelector('.chat').value='';
        }
        else{
        messageData = {
            action: 'message',
            MessageText: pole.value,
            FromUser:'1m1',
            ToUser: sob
        }
            str=JSON.stringify(messageData);
            socket.send(str);
            console.info('Отправлено');
            console.info(messageData);
            pole.value='';
        }
    });
    adr='wss://condicam.ru:8000/?user=1m1&coockie=e3r4t5';
    str='&met='+met;
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
                    	console.log(sob);
                    	console.log(data.FromUser);
                    	if (data.FromUser==sob){
                    		console.log('typing');
                    		console.log(sob);
                    		console.log(data.FromUser);
                        if(Date.now()-ttb>5000){
                            ttb=Date.now();
                        document.querySelector('.info3').style.backgroundColor='#2C629B';
                document.querySelector('.info3').style.color='#B8FF9A';
                document.querySelector('.info3').innerHTML='Печатает...';
                document.querySelector('.info3').style.opacity='1';
                setTimeout(()=>document.querySelector('.info3').style.opacity='0',5000);
                console.log(ttb);
            }
            			}
                    }
                    else{
                        if(data.action=='CL'){
                        	n=document.querySelector('#'+data.FromUser);
                            d=mydate(data.vis);
                            if(data.FromUser==sob){
                    			document.querySelector('.info2').innerHTML='Был в сети '+d;
                          n.querySelector('.vseti').innerHTML='Был в сети '+d;
                          n.querySelector('.vseti').style.color='#FF3333';
                			}
                			else{
                				if(n!=null){
                    				n.querySelector('.vseti').innerHTML='Был в сети '+d;
                    				n.querySelector('.vseti').style.color='#FF3333';
                        		}
                        	}
                    	}
                        else{
                            if(data.action=='CON'){
                            	n=document.querySelector('#'+data.FromUser);
                            	if(data.FromUser==sob){
                    				document.querySelector('.info2').innerHTML='В сети ';
                    				n.querySelector('.vseti').innerHTML='В сети';
                    				n.querySelector('.vseti').style.color='#0FC378';
               	 				}
                				else{
                					if(n==null){
                							d=mydate(data.vos);
                							con=document.querySelector('.chatlist');
                							a=document.querySelectorAll('.usersection');
            								a.forEach(function(e) {
                									w=e.style.order;
                									console.log(w);
                									w=Number(w)+1;
                									e.style.order=w;
                									});
                							b=document.createElement('div');
                							b.className='usersection';
                							b.id=data.FromUser;
                							b.style.order=1;
                							us="Клиент";
                							unreadkolvo=0
                							console.log('unread', unreadkolvo);
                							stl='style="display:none"';
                							dt='В сети';
                							stli='style="color:#0FC378"';
                							b.innerHTML='<div class="usercon"><div class="username">'+data.FromUser+
                							'</div><div class="vseti" '+stli+' >'+dt+
                							'</div></div><div class="consoob"><div class="consoobvn">'+
                							'<div class="lastmessage"><div class="FromName">'
                							+us+'</div><div class="MessageText">Пользователь зашел на сайт</div>'+
                							'<div class="date">'+d+
                							'</div></div></div><div class="unr"'+stl+
                							'><div class="unrv">'+unreadkolvo+'</div></div></div>';
                							con.appendChild(b);
                					}
                					else{
                						n.querySelector('.vseti').innerHTML='В сети';
                    					n.querySelector('.vseti').style.color='#0FC378';
                					}
            					}
                        	}
                        	else{
                        		message(data, 0, 0);
                        		if (data.FromUser!='1m1'){
                            		document.querySelector('.chat-result').scrollTop=document.querySelector('.chat-result').scrollHeight;
                    			}
                			}
                		}
                	}
                }
            }
        };
	}
	$('.chatlist').on('click', '.usersection', function(){
		sob=this.id;
		mesPage=1;
		console.log(sob);
		document.querySelector('.chat-result').style.display='none';
		document.querySelector('.chatlist').style.display='none';
		document.querySelector('.control').style.display='none';
		document.querySelector('#p_prl').style.display='flex';
		document.querySelector('.vnok').style.display='flex';
		document.querySelector('.sobname').innerHTML=sob;
		str='user='+sob+'&Page='+mesPage+'&adm=1';
        mesPage+=1;
        jQuery.ajax({
        url:     'mes.php', //url страницы (action_ajax_form.php)
        type:     'POST', //метод отправки
        dataType: "JSON", //формат данных
        data: str,  // Сеарилизуем объект
        success: function(response) { //Данные отправлены успешно
                data=response;
                var or =(mesPage-2)*30+1;
                console.log(data);
                if(Number(data.vos)>Number(data.vis)){
                	console.log(Number(data.vos)-Number(data.vis));
                    document.querySelector('.info2').innerHTML='В сети';
                }
                else{
                    d=mydate(data.vis);
                    document.querySelector('.info2').innerHTML='Был в сети '+d;
                }
                if (data.kolvo!=0){
                cp=data.kolvo;
                data.messages.forEach(function(e) {
                message(e,1,or);
                or++;
                });
    }
    else{
    	document.querySelector('.info2').innerHTML='Сообщений пока нет';
    }
    document.querySelector('#p_prl').style.display='none';
                document.querySelector('.chat-result').style.display='flex';
                document.querySelector('.control').style.display='flex';
        },
        error: function(response) { // Данные не отправлены
                console.log(response);
        }
        });
	})
	$('.vnok').on('click', '.str2', function(){
		sob='';
		cp=0;
		mesPage=1;
		document.querySelector('.chatlist').style.display='flex';
		document.querySelector('.vnok').style.display='none';
		document.querySelector('.chat-result').innerHTML='';
	})
	document.querySelector('.chat').addEventListener('input',function(){
		y=document.querySelector('#'+sob);
if (y.querySelector('.unrv').innerHTML!='0'){
                	document.querySelectorAll('.readedl').forEach(function(e) {
                e.style.display='none';
            })
                y.querySelector('.unrv').innerHTML=0;
                y.querySelector('.unrv').style.display='none';
                messageData = {
            action: 'readed',
            FromUser:'1m1',
            ToUser:sob
        }
        str=JSON.stringify(messageData);
            socket.send(str);
        }
    if (document.querySelector('.chat').value.length % 2 ==0){
    messageData = {
            action: 'typing',
            FromUser:'1m1',
            ToUser: sob
        }
        str=JSON.stringify(messageData);
            socket.send(str);
            console.log('typing',unread);
        }
    })
    const socketOpenListener = (event) => {
    	jQuery.ajax({
        url:     'us.php', //url страницы (action_ajax_form.php)
        type:     'POST', //метод отправки
        dataType: "JSON", //формат данных
        data: str,  // Сеарилизуем объект
        success: function(response) { //Данные отправлены успешно
                data=response;
                console.log(data);
                sp=data.kolvo;
                n=1;
                data.users.forEach(function(e){
                	met++;
                	if(e.type!='CON'){
                	d=mydate(e.mes_date);
                	a=document.createElement('div');
                	a.className='usersection';
                	a.id=e.user;
                	a.style.order=n;
                	n++;
                	if(e.FromUser=='1m1'){
                		us="  Я";
                	}
                	else{
                		us="  Клиент";
                	}
                	if (e.m_text.length>21){
                var mas='';
                var res='';
                var style='';
                for (var i =0; i < e.m_text.length; i++) {
                        mas+=e.m_text[i];
                        if (i % 21==0 && i!=0){
                                if (mas.indexOf(' ')<0){
                                style='style="word-break: break-all;"';
                                break;
                                }
                                mas='';
                        }
                        if(i==e.m_text.length-1){
                                style='style="word-wrap: break-word;"';
                        }
                }
            }
                	if (e.unreadkolvo>0){
                	stl='style="display:flex"';
                }
                else{
                	stl='style="display:none"';
                }
                if(e.vos>e.vis){
                	dt='В сети';
                	stli='style="color:#0FC378"';
                }
                else{
                	dt=mydate(e.vis);
                	dt='Был в сети '+dt;
                	stli='style="color:#FF3333"';
                }
                	a.innerHTML='<div class="usercon"><div class="username">'+e.user+'</div><div class="vseti" '+stli+' >'+dt+'</div></div><div class="consoob"><div class="consoobvn"><div class="lastmessage"><div class="FromName">  '+us+'</div><div class="MessageText"'+style+'>'
                	+e.m_text+'</div>'+'<div class="date">'+d+'</div></div></div><div class="unr"'+stl+
                	'><div class="unrv">'+e.unreadkolvo+'</div></div></div>';
                	document.querySelector('.chatlist').appendChild(a);
                }
                else{
                	if(e.vos>e.vis){
                	d=+mydate(e.mes_date);
                	a=document.createElement('div');
                	a.className='usersection';
                	a.id=e.user;
                	a.style.order=n;
                	n++;
                	us="Клиент";
                	stl='style="display:none"';
                	dt='В сети';
                	stli='style="color:#0FC378"';
                	a.innerHTML='<div class="usercon"><div class="username">'+e.user+'</div><div class="vseti" '+stli+' >'+dt+'</div></div><div class="consoob"><div class="consoobvn"><div class="lastmessage"><div class="FromName">  '+us+'</div><div class="MessageText">'
                	+e.m_text+'</div>'+'<div class="date">'+d+'</div></div></div><div class="unr"'+stl+
                	'><div class="unrv">'+e.unreadkolvo+'</div></div></div>';
                	document.querySelector('.chatlist').appendChild(a);
                	}
                }
                console.log('met',met);
                })
        },
        error: function(response) { // Данные не отправлены
                console.log(response);
        }
        });
        setTimeout(()=>{document.querySelector('#alert').style.display='none';},2000);
    console.log('Connected');
    };

    const socketCloseListener = (event) => {
    socket = new WebSocket(adr);
    socket.addEventListener('open', socketOpenListener);
    socket.addEventListener('message', socketMessageListener);
    socket.addEventListener('close', socketCloseListener);
    if (socket) {
    	tryes++;
    	if(tryes>4){
        document.querySelector('#alert').innerHTML='Обеспечиваем соединение... пока не получается(...';
    }
    else{
    	document.querySelector('#alert').innerHTML='Обеспечиваем соединение...';
    }
    }
    };

    socketCloseListener();
