<script type='text/javascript' src='jquery-min-3.5.1.js'>
</script>
<script type="text/javascript">

	window.camb12=<?php echo '"minprice=',(int)$minpriceqr[0]-1,'.00&maxprice=',(int)$maxpriceqr[0]+1,'.00&minrasresh=',$minrasqr[0],'&maxrasresh=',$maxrasqr[0],'&minugol=',(int)$minugolqr[0]-1,'.00&maxugol=',(int)$maxugolqr[0]+1,'.00&mintemp=',(int)$mintqr[0]-1,'.00&maxtemp=',(int)$maxtqr[0]+1,'.00"'?>;
	window.campage=1;
	window.camcountpage=document.getElementById('pagecon').innerHTML;
$(".catalog").on('click','#vpravo' , function(){
			window.campage=window.campage+1;
			window.cambc=window.camb12 +"&page="+window.campage;
			jQuery.ajax({
        url:     "https://condicam.ru/555.php", //url страницы (action_ajax_form.php)
        type:     "POST", //метод отправки
        dataType: "html", //формат данных
        data: window.cambc,  // Сеарилизуем объект
        success: function(response) { //Данные отправлены успешно
        	document.querySelector('.tovar').innerHTML = response;
    	},
    	error: function(response) { // Данные не отправлены
    		document.querySelector('.tovar').innerHTML = "Ошибка. Данные не отправлены.";
    	}
 	});

			if (window.campage>1 && window.campage<window.camcountpage){
		document.getElementById('vlevo').style.display='block';
		document.getElementById('vpravo').style.display='block';
	}
	if (window.campage==window.camcountpage){
		document.getElementById('vlevo').style.display='block';
		document.getElementById('vpravo').style.display='none';
	}
			return false;
		}
	);

	$(".catalog").on('click','#vlevo' ,  function(){
			window.campage=window.campage-1;
			window.cambc=window.camb12 +"&page="+window.campage+"&vlevo=1";
			if (window.campage==1){
		document.getElementById('vlevo').style.display='none';
		document.getElementById('vpravo').style.display='block';
	}
	if (window.campage>1 && window.campage<window.camcountpage) {
		document.getElementById('vlevo').style.display='block';
		document.getElementById('vpravo').style.display='block';
	}
			jQuery.ajax({
        url:     "https://condicam.ru/555.php", //url страницы (action_ajax_form.php)
        type:     "POST", //метод отправки
        dataType: "html", //формат данных
        data: window.cambc,  // Сеарилизуем объект
        success: function(response) { //Данные отправлены успешно
        	document.querySelector('.tovar').innerHTML = response;
    	},
    	error: function(response) { // Данные не отправлены
    		document.querySelector('.tovar').innerHTML = "Ошибка. Данные не отправлены.";
    	}
 	});
			return false;
		}
	);
</script>
	<script type="text/javascript">
$(".catalog").on('click','#vnesti' , function(){
	form=document.getElementById('my_form');
    formData = new FormData(form); // создаем новый экземпляр объекта и передаем ему нашу форму (*)
    $.ajax({
      url: 'https://condicam.ru/6.php', // путь к php-обработчику
      type: 'POST',
      dataType: 'html',
      contentType: false, // важно - убираем форматирование данных по умолчанию
      processData: false, // важно - убираем преобразование строк по умолчанию
      data: formData,
       // метод передачи данных
      success: function(response) { //Данные отправлены успешно
        	document.querySelector('.otvet').innerHTML = response;
      }
    });
    form.reset();
  });
</script>
<script type="text/javascript">
$(".catalog").on('click','#vnestikom' , function(){
	form1=document.getElementById('my_form1');
    formData = new FormData(form1); // создаем новый экземпляр объекта и передаем ему нашу форму (*)
    $.ajax({
      url: 'https://condicam.ru/7.php', // путь к php-обработчику
      type: 'POST',
      dataType: 'html',
      contentType: false, // важно - убираем форматирование данных по умолчанию
      processData: false, // важно - убираем преобразование строк по умолчанию
      data: formData,
       // метод передачи данных
      success: function(response) { //Данные отправлены успешно
        	document.querySelector('.otvet1').innerHTML = response;
      }
    });
    form1.reset();
  });
</script>
<script type="text/javascript">
$(".catalog").on('click','#vnestikon' , function(){
	form2=document.getElementById('my_form2');
    formData = new FormData(form2); // создаем новый экземпляр объекта и передаем ему нашу форму (*)
    $.ajax({
      url: 'https://condicam.ru/8.php', // путь к php-обработчику
      type: 'POST',
      dataType: 'html',
      contentType: false, // важно - убираем форматирование данных по умолчанию
      processData: false, // важно - убираем преобразование строк по умолчанию
      data: formData,
       // метод передачи данных
      success: function(response) { //Данные отправлены успешно
        	document.querySelector('.otvet2').innerHTML = response;
      }
    });
    form2.reset();
  });
</script>
<script type="text/javascript">
$(".catalog").on('click','.nal' , function(){
val=$(this).attr("value");
id=$(this).attr("name");
zap='id='+id+'&value='+val;
$.ajax({
      url: 'https://condicam.ru/9.php', // путь к php-обработчику
      type: 'POST',
      dataType: 'html',
      data: zap,
      success: function(response) { //Данные отправлены успешно
        	document.querySelector('.otvet2').innerHTML = response;
      }
    });
});
</script>
<script type="text/javascript">
$(".catalog").on('click','.del' , function(){
id=$(this).attr("id");
zap='id='+id;
idc=id+'c';
idn=id+'n';
card = document.getElementById(idc);
named=document.getElementById(idn);
namadi=named.innerHTML;
zap+='&name='+namadi;
$.ajax({
      url: 'https://condicam.ru/10.php', // путь к php-обработчику
      type: 'POST',
      dataType: 'html',
      data: zap,
      success: function(response) { //Данные отправлены успешно
        	document.querySelector('.otvet2').innerHTML = response;
      }
    });
card.parentNode.removeChild(card);
})
</script>
