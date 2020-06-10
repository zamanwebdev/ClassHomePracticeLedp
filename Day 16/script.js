function makeSeries(){
	var start = Number(document.getElementById('startingNumber').value)
	var end = Number(document.getElementById('endingNumber').value)
	let j = ""
	for(i = start; i <= end; i++){
		j+= i+" "; // j = j+i
	}
	document.getElementById('result').innerText = j;
}

