function checkFirstName(){
	let fname = $('#firstName').val();
	var reg = /^[A-Za-z .-]{2,20}$/;
	// var reg = /^[a-zA-Z\s\.]*$/;
	if(reg.test(fname)){
		$('#fnameError').text('')
		return true;
	}else{
		$('#fnameError').text('First name should be in right format.')
		return false;
	}
}
$('#firstName').keyup(function(){
	checkFirstName()
})

function checkLastName(){
	let lname = $('#lastName').val();
	var reg = /^[A-Za-z .-]{2,20}$/;

	if(reg.test(lname)){
		$('#lnameError').text('');
		return true;
	}else{
		$('#lnameError').text('Last name should be in right format.');
		return false;
	}
}
$('#lastName').keyup(function(){
	checkLastName()
})
function checkEmail(){
	let email = $('#email').val();
	var reg =/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;

	if(reg.test(email)){
		$('#emailError').text('');
		return true;
	}else{
		$('#emailError').text('Email is invalid.');
		return false;
	}
}
$('#email').keyup(function(){
	checkEmail()
})
function checkPhone(){
	let phoneNum = $('#phoneNumber').val();
	var reg =/^(?:\+88|01)?(?:\d{11}|\d{13})$/;

	if(reg.test(phoneNum)){
		$('#phoneError').text('');
		return true;
	}else{
		$('#phoneError').text('Phone Number invalid.');
		return false;
	}
}
$('#phoneNumber').keyup(function(){
	checkPhone()
})
function checkPassword(){
	let password = $('#password').val()
	let reg = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,8}$/
	if (reg.test(password)) {
		$('#passwordError').text('');
		return true;
	}else{
		$('#passwordError').text('Password must be at least 4 characters, no more than 8 characters, and must include at least one upper case letter, one lower case letter, and one numeric digit.');
		return false;
	}
}
$('#passwordError').keyup(function(){
	checkPassword()
})
function checkConfirm(){
	let confirm = $('#confirm').val();
	let password = $('#password').val();
	if (password == confirm) {
		$('#confirmError').text('');
		return true;
	}else{
		$('#confirmError').text('Password and Confirm Password did nt match');
		return false;
	}
}
$('#confirm').keyup(function(){
	checkConfirm();
})
$('#showPassword').click(function(){
	let attr = $('#password').attr('type');
	if (attr == 'password') {
		$('#password').attr('type','text');
	}else{
		$('#password').attr('type','password');
	}
})
function checkGender(){
	let gender = $('input[type="radio"]:checked').val();
	if (gender == 'male' || gender == 'female') {
		$('#genderError').text('');
		return true;
	}else{
		$('#genderError').text('Please give your gender info');
		return false;
	}
}
// $('#btn').click(function(){
// 	checkGender();
// })

function checkDivision(){
	let devision = $('#division').val();
	if(devision == '') {
		$('#divisionError').text('Please give division info');
		return false;
	}else{
		$('#divisionError').text('');
		return true;
	}
}
// $('#btn').click(function(){
// 	checkDivision();
// })
$('#form').submit(function(){
	if (checkFirstName() == true && checkLastName() == true && checkEmail() == true &&  checkPhone() == true && checkPassword() == true && checkConfirm() == true && checkGender() == true && checkDivision() == true ) {
		return true;
	}else{
		return false;
	}
})

// Aa@45678

// $('#firstName').click(function(){
// 	checkFirstName()
// })

// $('#firstName').blur(function(){
// 	checkFirstName()
// })



// $('#firstName').keyup(function(){
// 	let fname = $('#firstName').val();
// 	if(fname.length > 2 && fname.length < 10){
// 		$('#fnameError').text('');
// 	}else{
// 		$('#fnameError').text('First name should be more then 2 and less then 10 character.');
// 	}
// })