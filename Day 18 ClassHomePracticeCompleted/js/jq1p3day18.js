// $('#a1').click(function(){
// 	$('html, body').animate({
// 		scrollTop: $('#div1').offset().top
// 	},2000)
// })
// $('#a2').click(function(){
// 	$('html, body').animate({
// 		scrollTop: $('#div2').offset().top
// 	},2000)
// })
// $('#a3').click(function(){
// 	$('html, body').animate({
// 		scrollTop: $('#div3').offset().top
// 	},2000)
// })
// $(document).ready(function() {
//   $('.image-link').magnificPopup({type:'image'});
// });
$('#slideshow > div:gt(0)').hide()
setInterval(function(){
	$('#slideshow > div:first')
	.fadeOut(1000).next().fadeIn(1000).end().appendTo('#slideshow')
},3000)