var images = ['images/slider1.jpg','images/slider2.jpg','images/slider3.jpg','images/slider4.jpg'];
var index = 0;

function changeImage(){
	var mainImg = document.getElementById('mainImage');
	mainImg.setAttribute('src',images[index]);
	index++;
	if (index >= images.length) {
		index = 0;
	}
}
setInterval(changeImage, 2000);

// changeImage();
// function time(){
// 	var date = new Date();
// 	var hours = date.getHours();
// 	var minutes = date.getMinutes();
// 	var seconds = date.getSeconds();
// 	document.getElementById('watch').innerText = hours+":"+minutes+":"+seconds;
// }
// setInterval(time, 1000)

// time();
 
// function demo(){
// 	alert('test');
// }
// demo()
// setInterval(demo, 5000)

// let date = new Date();
// alert(date.getHours())
