<?php
require_once __DIR__ . "/../Template.php";

Template::header("Home");
?>

<body>
    <section>
    <h1>Broken Weather App</h1>
    <form method="post">
    <button class="edit-user-btn">Edit User</button>
    <input type = "text" name = "city" id = "">
    <input name = "submit" type = "submit" value = "Check Weather">
    </form>
    </section>

    <div class="weather-container">
        
        <div class="location">
        <!-- <h2> <?= $city ?></h2> -->
        </div>
        <br>
        <div class="weatherdescription">
        <!-- <h2> <?= $weather["weather"][0]["description"] ?></h2> -->
        </div>
        <br>
        <div class="temperature">
        <!-- <h2> <?= $celcius?> °C </h2> -->
        </div>
        <div class="weather-icon">
            <img src="weatherIcons/day/176.png" alt="Weather Icon">
        </div>
       
    </div>
</body>

<?php Template::footer(); ?>
@@ -1,46 +0,0 @@

<?php require_once __DIR__."../../../api/WeatherAPI.php"; ?>
