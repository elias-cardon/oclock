<!DOCTYPE html>
<html>
<head>
	<title>Minuteur</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<header>
    	<h1 class="title">Minuteur</h1>
    </header>
    <div class="content">
    	<div class="counter"></div>
    	<input id="seconds" type="number" placeholder="Secondes">
    	<div class="buttons">
    		<button class="btn start" id="start" value="1" onclick="check(this)">Commencer</button>
    		<button class="btn start" id="continue" value="1" onclick="check(this)">Continuer</button>
    		<button class="btn stop" id="stop" value="0" onclick="check(this)">Stop</button>
    		<button class="btn start" id="submit" onclick="subm()">Valider</button>
    	</div>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>