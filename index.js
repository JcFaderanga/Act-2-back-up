var show = false;
	function expandSideBar(){
	if(show == false){
		document.querySelector('.sidebar').classList.add('active');
		document.querySelector('.sidebar').classList.remove('remove');
		return show = true;
	}else{
		document.querySelector('.sidebar').classList.remove('active');
		document.querySelector('.sidebar').classList.add('remove');
		return show = false;
	}
}	
document.getElementById('menu').onclick = function(){
	expandSideBar();
};

const icons = document.querySelectorAll('.icon');
icons.forEach (icon => {  
  icon.addEventListener('click', (event) => {
   expandSideBar();
  });
});

