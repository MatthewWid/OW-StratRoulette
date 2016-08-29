if (document.location.hash == "" || document.location.has == "#") {
	document.location.hash = "#menu";
}

function copyStrat() {
	document.getElementById("stratCopy").select();
	try {
		document.execCommand("copy");
		document.querySelector("#gen .button.copy a").innerHTML = "Copied!";
	} catch (err) {
		console.log("Failed to copy");
	}
}

var canGen = true;

function genStrat() {
	if (canGen) {
		canGen = false;
		var httpRequest, data;
		httpRequest = new XMLHttpRequest();
		httpRequest.onreadystatechange = function() {
			if (httpRequest.readyState === XMLHttpRequest.DONE) {
				if (httpRequest.status === 200) {
					console.log("Received data successfully - genStrat()");
					data = JSON.parse(httpRequest.responseText);
					document.getElementById("stratHeader").innerHTML = data[0].header;
					document.getElementById("stratText").innerHTML = data[0].text;
					document.getElementById("stratAuthor").innerHTML = data[0].author;
					document.getElementById("stratCopy").value = data[0].text;
					document.querySelector("#genContent").classList.remove("fadeIn");
					setTimeout(function() {
						document.querySelector("#genContent").classList.add("fadeIn");
					}, 1);
					document.querySelector("#gen .button.copy a").innerHTML = "Copy to Clipboard";
				} else {
					console.error("Failed to receive data from server");
				}
			}
		}
		httpRequest.open("GET", "backend/getStrat.php");
		httpRequest.send();
		setTimeout(function() {
			canGen = true;
		}, 500);
	}
}

function sendStrat() {
	var httpRequest, data;
	httpRequest = new XMLHttpRequest();
	httpRequest.onreadystatechange = function() {
		if (httpRequest.readyState === XMLHttpRequest.DONE) {
			if (httpRequest.status === 200) {
				console.log("Received response successfully - sendStrat()");
				document.getElementById("response").innerHTML = httpRequest.responseText;

				document.getElementById("createHeader").value = "";
				document.getElementById("createText").value = "";
				document.getElementById("createAuthor").value = "";

				document.querySelector("#response").classList.remove("fadeIn");
				setTimeout(function() {
					document.querySelector("#response").classList.add("fadeIn");
				}, 1);
			}
		}
	}

	var title = escape(document.getElementById("createHeader").value);
	var text = escape(document.getElementById("createText").value);
	var author = escape(document.getElementById("createAuthor").value);

	var sendString = "?title=" + title + "&text=" + text + "&author=" + author;

	httpRequest.open("GET", "backend/setStrat.php" + sendString);
	httpRequest.send();
}

document.querySelector("#gen .button.copy a").addEventListener("click", copyStrat);
document.querySelector("#gen .button.gen a").addEventListener("click", genStrat);
document.querySelector("#sendStrat a").addEventListener("click", sendStrat);

genStrat();

document.addEventListener("keypress", function(event) {
	var e = event.keyCode;
	if (e == 32 && location.hash == "#gen") {
		genStrat();
		console.log("Pressed #gen");
	} else if (e == 13 && location.hash == "#create") {
		sendStrat();
		console.log("Pressed #create");
	}
});