<?php
// Define global constant to prevent direct script loading 
define('MY_APP', true);

// Load the router responsible for handling API requests
require_once __DIR__ . "/api/APIRouter.php";

// Get URL path
$path = $_GET["path"];
$path_parts = explode("/", $path);
$base_path = strtolower($path_parts[0]);

// If the URL path starts with "api", load the API
if($base_path == "api" && count($path_parts) > 1){
    $query_params = $_GET;

    // Handle requests using the API router
    $api = new APIRouter($path_parts, $query_params);
    $api->handleRequest();
}
else{ // If URL path is not API, respond with "not found"
    http_response_code(404);
    die("Page not found");
}

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