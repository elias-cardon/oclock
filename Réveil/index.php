<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css"/>
    <script src="script.js"></script>
</head>


<div class="container">
    <audio controls autoplay style="opacity:0">
        <source src="" type="audio/mp3">
        .
    </audio>

    <body onload="getNewTime();">

    <div class="clockHolder">
        <h1>Alarme</h1>
        <div class="digits">
            <span class="hours"></span>
            <span class="minutes"></span>
            <span class="seconds"></span>
        </div>

        <h3>Réveil</h3>

        <select class="hours">
            <option value="" disabled selected>Heures</option>
        </select>
        <select class="minutes">
            <option value="" disabled selected>Minutes</option>
        </select>
        <select class="seconds">
            <option value="" disabled selected>Secondes</option>
        </select>

        <button type="reset" value="submit" name="submit" class="submit">Effacer</button>

    </div>
</div>
</body>
</html>