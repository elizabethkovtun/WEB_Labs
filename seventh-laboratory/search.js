function startSearch(str) {
	const xhttp = new XMLHttpRequest();
	console.log(str);
	xhttp.onload = function () {
		console.log(this.responseText);
		document.getElementById("Result").innerHTML = this.responseText;
	};

	xhttp.open("GET", "search.php?value=" + str);
	xhttp.send();
}