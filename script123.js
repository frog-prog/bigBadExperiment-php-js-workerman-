document.querySelector('.knop').addEventListener('click', function(){
	dan1=document.querySelector('.dan').value;
	//dan1=dan.replaceAll('.000;',';');
	dan2=dan1.replaceAll(',','.');
	document.querySelector('.res').innerHTML=dan2;
})