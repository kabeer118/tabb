    	function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
const mail=document.getElementById('username');
const form = document.getElementById('form');
const error = document.getElementById('error');
form.addEventListener('submit',(e)=>{

	e.preventDefault();

	Email();
})
function Email(){
	let message= [];
	if(!validateEmail(mail.value)) {
		message.push('   *invalid email')
		error.innerText = message.join('')
	}
	else{
		if(mail.value=="Naveed@gmail.com"){
			window.location.href="Admin.html";
		}
		//else{
		//	window.location.href="product.html";
		//}

	}
}



