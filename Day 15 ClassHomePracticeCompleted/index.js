function add(){
		var f_number = Number(document.getElementById('first_number').value);
		var l_number = Number(document.getElementById('last_number').value);
		var result = f_number + l_number;
		document.getElementById('result').innerHTML = result;
	}
	function sub(){
		var f_number = Number(document.getElementById('first_number').value);
		var l_number = Number(document.getElementById('last_number').value);
		var result = f_number - l_number;
		document.getElementById('result').innerHTML = result;
	}
	function multi(){
		var f_number = Number(document.getElementById('first_number').value);
		var l_number = Number(document.getElementById('last_number').value);
		var result = f_number * l_number;
		document.getElementById('result').innerHTML = result;
	}
	function div(){
		var f_number = Number(document.getElementById('first_number').value);
		var l_number = Number(document.getElementById('last_number').value);
		var result = f_number / l_number;
		document.getElementById('result').innerHTML = result;
	}
	function modulas(){
		var f_number = Number(document.getElementById('first_number').value);
		var l_number = Number(document.getElementById('last_number').value);
		var result = f_number % l_number;
		document.getElementById('result').innerHTML = result;
	}