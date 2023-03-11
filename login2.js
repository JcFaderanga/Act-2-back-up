var clicked = true;
const form = document.querySelectorAll('#register-now');
form.forEach (swtich => {
 swtich.addEventListener('click', (event) => {	
    if(clicked == true){
       setTimeout(function (){
         document.getElementById('login').style.display = "none";
         document.getElementById('register').style.display = "block";
       },900);
       document.querySelector('.form-container').classList.remove('remove');
       document.querySelector('.form-container').classList.add('active-width');
       setTimeout(function (){
        document.getElementById('title').innerHTML = "REGISTER";
       },900);
      return clicked = false;
    }else{ 
     	  setTimeout(function(){
          document.getElementById('login').style.display = "block";
	        document.getElementById('register').style.display = "none";
          document.getElementById('title').innerHTML = "LOGIN";
       	},900);
       document.querySelector('.form-container').classList.remove('active-width');
       document.querySelector('.form-container').classList.add('remove');
      return clicked = true;
    }

  });
});