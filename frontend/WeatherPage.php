<?php
require_once __DIR__."/WeatherAPI.php";
require_once __DIR__."/WeatherPage.php";

//
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Weather</title>
</head>

<body>
    <section>
    <form method="post">
    <h1>Weather App</h1>
    <input type = "text" name = "city" id = "">
    <input name = "submit" type = "submit" value = "Check Weather">


    <div class="weather-container">
        
        <div class="location">
        <h2> <?= $city ?></h2>
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
</html>