let add = document.getElementById('addition')
add.onclick = function(){
	let fnum = Number(document.getElementById('first_number').value);
	let lnum = Number(document.getElementById('last_number').value);
	document.getElementById('result').innerHTML = fnum+lnum;

}

let sub = document.getElementById('substraction')
sub.onclick = function(){
	let fnum = Number(document.getElementById('first_number').value);
	let lnum = Number(document.getElementById('last_number').value);
	document.getElementById('result').innerHTML = fnum-lnum;

}

let multi = document.getElementById('multi')
multi.onclick = function(){
	let fnum = Number(document.getElementById('first_number').value);
	let lnum = Number(document.getElementById('last_number').value);
	document.getElementById('result').innerHTML = fnum*lnum;

}

let div = document.getElementById('division')
div.onclick = function(){
	let fnum = Number(document.getElementById('first_number').value);
	let lnum = Number(document.getElementById('last_number').value);
	document.getElementById('result').innerHTML = fnum/lnum;

}

let mod = document.getElementById('modulas')
mod.onclick = function(){
	let fnum = Number(document.getElementById('first_number').value);
	let lnum = Number(document.getElementById('last_number').value);
	document.getElementById('result').innerHTML = fnum%lnum;

}
