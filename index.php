<!DOCTYPE html>
<html>
	
	<head>

		<title>OW Strat Roulette</title>

		<!--
			Created by Matthew W.
			as part of a school project.
		-->

		<link rel="stylesheet" type="text/css" href="css/global.css" />
		<link rel="stylesheet" type="text/css" href="css/index.css" />

		<script src="js/strats.js" type="text/javascript" defer></script>
		<script src="js/index.js" type="text/javascript" defer></script>

	</head>

	<body>

		<div id="header">
			<div id="headerMenu">
				<a href="#menu">
					<img width="168" height="56" src="images/logo.png" alt="Return to Homepage" />
				</a>
			</div>
		</div>

		<div id="content">

			<div id="menu">
				<div class="button">
					<a href="#gen">Generate a New Strat</a>
				</div>
				<div class="button">
					<a href="#create">Create a New Strat</a>
				</div>
			</div>

			<div id="gen">
				<div id="genContent">
					<h1 id="stratHeader">[Strat Header]</h1>
					<p id="stratText">[Strat Text]</p>
					<p id="stratCredit">Strat by <span id="stratAuthor">[Author]</span></p>
				</div>
				<div class="button copy">
					<a href="javascript:void(0);">Copy to Clipboard</a>
				</div>
				<div class="button gen">
					<a href="javascript:void(0);">Generate a New Strat</a>
				</div>
				<div class="button">
					<a href="#create">Create a New Strat</a>
				</div>
				<textarea id="stratCopy"></textarea>
			</div>

			<div id="create">
				<input type="text" id="createHeader" class="createField" placeholder="Title" maxlength="255" />
				<input type="text" id="createText" class="createField" placeholder="Instructions" maxlength="255" />
				<input type="text" id="createAuthor" class="createField" placeholder="Author" maxlength="255" />
				<div class="button" id="sendStrat">
					<a href="javascript:void(0);">Submit New Strat</a>
				</div>
				<div class="button">
					<a href="#gen">Generate a New Strat</a>
				</div>
				<div id="response"></div>
			</div>
			
		</div>

		<div id="footer">
			<p>I do not own anything, or am representitive of, or affiliated with &copy;2016 BLIZZARD ENTERTAINMENT, INC., including the Overwatch logo, brand, trademark, or concept.</p>
		</div>

	</body>

</html>
