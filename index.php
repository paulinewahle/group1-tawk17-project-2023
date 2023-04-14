<?php
//Implement API  OpenWeatherMap
if (isset($_POST["submit"])) {
    if (empty($_POST["city"])) {
        echo "Enter your City";
    }else{
        $city = $_POST["city"];
        $api_key = "a74c60a34f798eefa00278309f5c1b24";
        $api = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$api_key";
        $api_data = file_get_contents($api);
        //print_r($api_data);

        $weather = json_decode($api_data, true);
        $celcius = $weather["main"]["temp"] - 273;
        //print_r($weather);
    }
}
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
    <?php echo "<h1>" . $city["city"] . "</h1>"; ?>
        </div>
        <br>
        <div class="weatherdescription">
    <?php echo "<h1>" . $weather["weather"][0]["description"] . "</h1>"; ?>
        </div>
        <br>
        <div class="humidity">
    <?php echo "<h1>" . $weather["humidity"] . "</h1>"; ?>
        </div>
        <br>
        <div class="temperature">
    <?php echo "<h1>" . $celcius . "°C" . "</h1>"; ?>
        </div>

  
       
        <div class="weather-icon">
            <img src="weatherIcons/day/176.png" alt="Weather Icon">
        </div>
       
    </div>
</body>
</html>