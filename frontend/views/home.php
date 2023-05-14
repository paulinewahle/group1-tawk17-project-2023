<?php
require_once __DIR__ . "/../Template.php";

Template::header("Home");
?>

<body>
    <section>
    <form method="post">
    <h1>Weather App</h1>
    <button class="edit-user-btn">Edit User</button>
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

<?php Template::footer(); ?>

@@ -1,46 +0,0 @@
<?php
require_once __DIR__."/WeatherAPI.php";



?>
