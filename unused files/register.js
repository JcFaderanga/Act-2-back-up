document.getElementById('register-now').onclick = function(){
	if(a == true){
		/*document.getElementById('register-now').id = "backToLogin";*/
        document.getElementById('register-now').innerHTML = "I all ready have an accout";
		document.getElementById("username-login").id = "username-register";
		document.getElementById("password-login").id = "password-register";
		document.getElementById('btn-submit').innerHTML = "Register";

setInterval(function (){
document.getElementById('login').style.display = "none";
document.getElementById('register').style.display = "block";
},500);


        document.querySelector('form').classList.remove('active-remove');
		document.querySelector('.register').classList.remove('active-remove');
		document.querySelector('.register').classList.add('active');
		document.querySelector('form').classList.add('active');	
		 return a = false;
}else{
	document.querySelector('form').classList.add('active-remove');
		document.querySelector('.register').classList.add('active-remove');
        document.querySelector('.register').classList.remove('active');
		document.querySelector('form').classList.remove('active');

		document.getElementById("password-register").id = "username-login";
		document.getElementById("username-register").id = "password-login";
		document.getElementById('title').innerHTML = "LOGIN";
		document.getElementById('register-now').innerHTML = "Register now!";

		/* document.getElementById('span-register').innerHTML = 
		  `Dont have accout? &nbsp;<label id="backToLogin">I all ready have an accout</label>`;
		 */
		  return a = true;
}
	}
	var a= true;
	
	

