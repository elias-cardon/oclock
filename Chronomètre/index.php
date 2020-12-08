<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chronomètre</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="controls">
    <button onclick="start()">Start</button>
    <button onclick="pause()">Pause</button>
    <button onclick="stop()">Stop</button>
    <button onclick="restart()">Restart</button>
    <button onclick="lap()">Tour</button>
    <button onclick="resetLaps()">Reset tour</button>
</div>
<div class="stopwatch">
    00:00:00
</div>
<ul class="laps">

</ul>
<script src="script.js"></script>
</body>
</html>