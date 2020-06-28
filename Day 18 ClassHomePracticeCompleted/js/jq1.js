// $('.div1').click(function(){
	$('.div1').animate({
		left: '100px',
	},1000).animate({
		top:'100px'
	})
// })
$('.div2').click(function(){
	$('.div2').animate({
		width: '500px',
		// top: '200px',
	},1000).animate({
		width: '200px'
	})
})
$('.div3').animate({
	width: '400px',
	height: '400px'
},1000).animate({
	width: '200px',
	height: '400px'
}).animate({
	width: '200px',
	height: '200px'
},1000)
$('.div4').animate({
	left: 1150
},1000).animate({
	left: 1150,
	top: 400
},1000).animate({
	left: 1150,
	top: 400,
	left: 0
},1000).animate({
	left: 1150,
	top: 400,
	left: 0,
	top: 0
})
function loop() {
	// body...
	$('.div5').animate({
		top: 0
	},1000).animate({
		top: 100
	},1000,loop)
}
loop()