var mainImg = document.getElementById('mainImage');

var img1 = document.getElementById('img1');
img1.onmouseover = function(){
	var changeImg = img1.getAttribute('src');
	mainImg.setAttribute('src', changeImg);
}

var img2 = document.getElementById('img2');
img2.onmouseover = function(){
	var changeImg = img2.getAttribute('src');
	mainImg.setAttribute('src', changeImg);
}
var img3 = document.getElementById('img3');
img3.onclick = function(){
	var changeImg = img3.getAttribute('src');
	mainImg.setAttribute('src', changeImg);
}
var img4 = document.getElementById('img4');
img4.onclick = function(){
	var changeImg = img4.getAttribute('src');
	mainImg.setAttribute('src', changeImg);
}
// var attr = mainImg.getAttribute('width'); 
// alert(attr);
// mainImg.setAttribute('src','images/slider2.jpg')
// mainImg.setAttribute('width','200px')
