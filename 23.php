<script type='text/javascript' src='jquery-min-3.5.1.js'>
</script>
<script type="text/javascript">
  window.conb12=<?php echo '"minprice=',(int)$minpriceconqr[0]-1,'.00&maxprice=',(int)$maxpriceconqr[0]+1,'.00&minsquere=',$minploshadconqr[0],'&maxsquere=',$maxploshadconqr[0],'&minpower=',(int)$minmoshqr[0]-1,'.00&maxpower=',(int)$maxmoshqr[0]+1,'.00&minshum=',(int)$minshumqr[0]-1,'.00&maxshum=',(int)$maxshumqr[0]+1,'.00"'?>;
  window.con1=0;
  window.con2=0;
  window.con3=0;
  window.con4=0;
  window.con5=0;
  window.conpage=1;
  window.concountpage=document.getElementById('pagecon').innerHTML;
$(".catalog").on('click','#vpravocon' , function(){
			window.conpage=window.conpage+1;
			window.conbc=window.conb12 +"&page="+window.conpage;
			jQuery.ajax({
        url:     "https://condicam.ru/666.php", //url страницы (action_ajax_form.php)
        type:     "POST", //метод отправки
        dataType: "html", //формат данных
        data: window.conbc,  // Сеарилизуем объект
        success: function(response) { //Данные отправлены успешно
        	document.querySelector('.tovar').innerHTML = response;
    	},
    	error: function(response) { // Данные не отправлены
    		document.querySelector('.tovar').innerHTML = "Ошибка. Данные не отправлены.";
    	}
 	});
			if (window.conpage>1 && window.conpage<window.concountpage){
		document.getElementById('vlevocon').style.display='block';
		document.getElementById('vpravocon').style.display='block';
	}
	if (window.conpage==window.concountpage){
		document.getElementById('vlevocon').style.display='block';
		document.getElementById('vpravocon').style.display='none';
	}
			return false;
		}
	);

	$(".catalog").on('click','#vlevocon' ,  function(){
			window.conpage=window.conpage-1;
			window.conbc=window.conb12 +"&page="+window.conpage+"&vlevo=1";
			if (window.conpage==1){
		document.getElementById('vlevocon').style.display='none';
		document.getElementById('vpravocon').style.display='block';
	}
	if (window.conpage>1 && window.conpage<window.concountpage) {
		document.getElementById('vlevocon').style.display='block';
		document.getElementById('vpravocon').style.display='block';
	}
			jQuery.ajax({
        url:     "https://condicam.ru/666.php", //url страницы (action_ajax_form.php)
        type:     "POST", //метод отправки
        dataType: "html", //формат данных
        data: window.conbc,  // Сеарилизуем объект
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
      url: 'https://condicam.ru/66.php', // путь к php-обработчику
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
      url: 'https://condicam.ru/77.php', // путь к php-обработчику
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
      url: 'https://condicam.ru/88.php', // путь к php-обработчику
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
      url: 'https://condicam.ru/99.php', // путь к php-обработчику
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
      url: 'https://condicam.ru/100.php', // путь к php-обработчику
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
