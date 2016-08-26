<!DOCTYPE html>
<html>
	
	<body>

		<button id="getData">Get Data</button><br />
		Header: <div id="header"></div><br />
		Text: <div id="text"></div><br />
		Author: <div id="author"></div>

		<script>
			var httpRequest, data;

			function echoData() {
				if (httpRequest.readyState === XMLHttpRequest.DONE) {
					if (httpRequest.status === 200) {
						console.log("Received data successfully");
						data = JSON.parse(httpRequest.responseText);
						document.getElementById("header").innerHTML = data[0].header;
						document.getElementById("text").innerHTML = data[0].text;
						document.getElementById("author").innerHTML = data[0].author;
					}
				}
			}

			document.getElementById("getData").addEventListener("click", function() {
				httpRequest = new XMLHttpRequest();
				httpRequest.onreadystatechange = echoData;
				httpRequest.open("GET", "db_connect.php");
				httpRequest.send(null);
			});

		</script>

	</body>

</html>