$('#fadeToggle').click(function(){
	$('#head1').fadeToggle(1000);
})
$('#fadeIn').click(function(){
	$('#head1').fadeIn(1000);
})
$('#fadeOut').click(function(){
	$('#head1').fadeOut(1000);
})
$('#slideToggle').click(function(){
	$('#head1').slideToggle(2000);
})
$('#head1').html("Hello World from ('#head1').html");
// $('#head1').text("Hello World from ('#head1').text")
$('#p1').click(function(){
	// alert('clicked')
	// $('#p1').text('Clicked')
	// $('#p1').css('color','blue')
	// $('#p1').css('font-size','30px')
	// $('#head1').css({
	// 	'color':'blue',
	// 	'border':'2px solid black',
	// 	'padding':'20px'
	// })
	// $('#head1').hide(1000);
	$('#head1').slideDown(2000);
})
$('#btn1').click(function(){
	// $('#head1').show(2000);
	// $('#head1').toggle(2000);
	$('#head1').slideUp();
})

$('#p2').dblclick(function(){
	// alert('clicked')
	$('#p2').text('Clicked')
})
$('#p3').hover(function(){
	// alert('clicked')
	$('#p3').text('hover')
})
$('#p4').mouseup(function(){
	// alert('clicked')
	$('#p4').text('mouseup')
})

