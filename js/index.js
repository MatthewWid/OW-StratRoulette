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

var last = -1;
function genStrat() {
	var getRand = Math.floor(Math.random() * strats.length) + 0;
	var strat = strats[getRand];
	if (getRand != last) {
		document.getElementById("stratName").innerHTML = strat.header;
		document.getElementById("stratText").innerHTML = strat.text;
		document.getElementById("stratAuthor").innerHTML = strat.author;
		document.getElementById("stratCopy").value = strat.text;
	} else {
		genStrat();
	}

	document.querySelector("#gen .button.copy a").innerHTML = "Copy to Clipboard";
	last = getRand;
	
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