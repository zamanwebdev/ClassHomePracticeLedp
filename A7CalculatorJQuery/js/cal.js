$('#addition').click(function(){
	let fname = Number($('#first_number').val());
	let lname = Number($('#last_number').val());
	// alert(fname);
	$('#result').text(fname+lname);
})
$('#substraction').click(function(){
	let fname = Number($('#first_number').val());
	let lname = Number($('#last_number').val());
	// alert(fname);
	$('#result').text(fname-lname);
})
$('#multi').click(function(){
	let fname = Number($('#first_number').val());
	let lname = Number($('#last_number').val());
	// alert(fname);
	$('#result').text(fname*lname);
})
$('#division').click(function(){
	let fname = Number($('#first_number').val());
	let lname = Number($('#last_number').val());
	// alert(fname);
	$('#result').text(fname/lname);
})
$('#modulas').click(function(){
	let fname = Number($('#first_number').val());
	let lname = Number($('#last_number').val());
	// alert(fname);
	$('#result').text(fname%lname);
})