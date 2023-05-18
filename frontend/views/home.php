<?php
require_once __DIR__ . "/../Template.php";
require_once __DIR__ . "/../../api/WeatherAPI.php";

Template::header("Home");
?>

<head>
        <link rel="stylesheet" href="../../assets/css/style.css">
    </head>
<body>
    <section>
    <h1>Weather App</h1>
    <form method="post">
    <input type = "text" name = "city" id = "">
    <input name = "submit" type = "submit" value = "Check Weather">
    </form>
    </section>

    <div class="weather-container">
        
        <div class="location">
        <h2> <?= $this->model ?></h2>
        </div>
        <br>
        <div class="weatherdescription">
        <h2> <?= $weather["weather"][0]["description"] ?></h2>
        </div>
        <br>
        <div class="temperature">
        <h2> <?= $celcius?> °C </h2>
        </div>
        <div class="weather-icon">
            <img src="weatherIcons/day/176.png" alt="Weather Icon">
        </div>
       
    </div>
</body>

<?php Template::footer(); ?>
@@ -1,46 +0,0 @@

<?php require_once __DIR__."../../../api/WeatherAPI.php"; ?>
