function time(){
	var date = new Date();
	var hours = date.getHours();
	var minutes = date.getMinutes();
	var seconds = date.getSeconds();
	document.getElementById('watch').innerText = hours+":"+minutes+":"+seconds;
}
setInterval(time, 1000)

// time();
 
// function demo(){
// 	alert('test');
// }
// demo()
// setInterval(demo, 5000)

// let date = new Date();
// alert(date.getHours())
