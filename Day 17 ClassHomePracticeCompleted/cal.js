$('#btn').click(function(){
	let fname = Number($('#firstNum').val());
	let lname = Number($('#secondNum').val());
	// alert(fname);
	$('#result').text(fname+lname);
})