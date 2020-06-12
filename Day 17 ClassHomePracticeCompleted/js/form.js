$('#firstName').keyup(function(){
	let fname = $('#firstName').val();
	var reg = /^[a-zA-Z\s\.]*$/;

	if(reg.test(fname)){
		$('#fnameError').text('');
	}else{
		$('#fnameError').text('First name should be in right format.');
	}
})
$('#lastName').keyup(function(){
	let lname = $('#lastName').val();
	var reg = /^[a-zA-Z\s\.]*$/;

	if(reg.test(lname)){
		$('#lnameError').text('');
	}else{
		$('#lnameError').text('Last name should be in right format.');
	}
})
$('#email').keyup(function(){
	let email = $('#email').val();
	var reg =/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;

	if(reg.test(email)){
		$('#emailError').text('');
	}else{
		$('#emailError').text('Email is invalid.');
	}
})
$('#phoneNumber').keyup(function(){
	let phoneNum = $('#phoneNumber').val();
	var reg =/^(?:\+88|01)?(?:\d{11}|\d{13})$/;

	if(reg.test(phoneNum)){
		$('#phoneError').text('');
	}else{
		$('#phoneError').text('Phone Number invalid.');
	}
})
// $('#firstName').keyup(function(){
// 	let fname = $('#firstName').val();
// 	if(fname.length > 2 && fname.length < 10){
// 		$('#fnameError').text('');
// 	}else{
// 		$('#fnameError').text('First name should be more then 2 and less then 10 character.');
// 	}
// })