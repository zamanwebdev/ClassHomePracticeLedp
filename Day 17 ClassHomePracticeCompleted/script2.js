$('#firstName').keyup(function(){
	// alert('test')
	let fname = $('#firstName').val();
	$('#name1').text(fname);
})
$('#lastName').keyup(function(){
	let lname = $('#lastName').val();
	$('#name2').text(lname);
})
$('#firstName, #lastName').keyup(function(){
	let fname = $('#firstName').val();
	let lname = $('#lastName').val();
	$('#name3').text(fname+""+lname);
})
// $('#lastName').blur(function(){
// 	let fname = $('#firstName').val();
// 	let lname = $('#lastName').val();
// 	$('#name3').text(fname+""+lname);
// })



$('#btn').click(function(){
	let fname = $('#firstName').val();
	let lname = $('#lastName').val();
	// alert(fname);
	$('#fullName').text(fname+" "+lname);
})