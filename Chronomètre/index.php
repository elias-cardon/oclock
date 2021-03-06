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
    <button class="btn-grad" onclick="start()">Marche</button>
    <button class="btn-grad" onclick="pause()">Pause</button>
    <button class="btn-grad" onclick="stop()">Arrêt</button>
    <button class="btn-grad" onclick="restart()">Recommencer</button>
    <button class="btn-grad" onclick="lap()">Tours</button>
    <button class="btn-grad" onclick="resetLaps()">Reset tour</button>
</div>
<div class="stopwatch">
    00:00:00
</div>
<ul class="laps">

</ul>
<script src="script.js"></script>
</body>
</html>