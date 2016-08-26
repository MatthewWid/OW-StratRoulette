if (document.location.hash == "" || document.location.has == "#") {
	document.location.hash = "#menu";
}

var httpRequest, data;

function copyStrat() {
	document.getElementById("stratCopy").select();
	try {
		document.execCommand("copy");
		document.querySelector("#gen .button.copy a").innerHTML = "Copied!";
	} catch (err) {
		console.log("Failed to copy");
	}
}

function genStrat() {
	httpRequest = new XMLHttpRequest();
	httpRequest.onreadystatechange = function() {
		if (httpRequest.readyState === XMLHttpRequest.DONE) {
			if (httpRequest.status === 200) {
				console.log("Received data successfully");
				data = JSON.parse(httpRequest.responseText);
				document.getElementById("stratName").innerHTML = data[0].header;
				document.getElementById("stratText").innerHTML = data[0].text;
				document.getElementById("stratCredit").innerHTML = data[0].author;
			}
		}
	}
	httpRequest.open("GET", "../backend/getStrat.php");
	httpRequest.send(null);

	document.querySelector("#genContent").classList.remove("fadeIn");
	setTimeout(function() {
		document.querySelector("#genContent").classList.add("fadeIn");
	}, 1);
}

document.querySelector("#gen .button.copy a").addEventListener("click", copyStrat);
document.querySelector("#gen .button.gen a").addEventListener("click", genStrat);

genStrat();

document.addEventListener("keypress", function(event) {
	var e = event.keyCode;
	if (e == 32) {
		genStrat();
		console.log("Pressed");
	}
});