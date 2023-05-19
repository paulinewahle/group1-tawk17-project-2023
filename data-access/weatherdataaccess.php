<?php

// Check for a defined constant or specific file inclusion
if (!defined('MY_APP') && basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    die('This file cannot be accessed directly.');
}

$apiKey = 'a74c60a34f798eefa00278309f5c1b24Y';
$city = 'London'; 

// API URL
$url = "https://api.openweathermap.org/data/2.5/weather?q=" . urlencode($city) . "&appid=" . $apiKey;

// Make API request and get the response
$response = file_get_contents($url);

// Convert JSON response to PHP array
$data = json_decode($response, true);

// Check if the API request was successful
if ($data['cod'] === 200) {
    // Weather data is available
    $temperature = $data['main']['temp'];
    $description = $data['weather'][0]['description'];
    $icon = $data['weather'][0]['icon'];
} else {
    // API request failed, handle the error
    $errorMessage = $data['message'];
    // Handle the error gracefully (e.g., display a default value or an error message)
}


class WeatherDataAccess{
        $city = $_POST["city"];
                    $api_key = "a74c60a34f798eefa00278309f5c1b24";
                    $api = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$api_key";
                    $api_data = file_get_contents($api);
                    $weather = json_decode($api_data, true);
                    $celcius = $weather["main"]["temp"] - 273;
}
?>