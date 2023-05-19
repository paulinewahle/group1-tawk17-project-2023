<?php
require_once __DIR__ . "/../frontend/views/home.php";
// Check for a defined constant or specific file inclusion
if (!defined('MY_APP') && basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    die('This file cannot be accessed directly.');
}

class WeatherDataAccess{
    $apiKey = 'a74c60a34f798eefa00278309f5c1b24Y';
    $api = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$api_key";
    $city = isset($_GET['city']) ? $_GET['city'] : '';
    $city = trim($city); // Remove whitespace
    $city = filter_var($city, FILTER_SANITIZE_STRING); // Sanitize the input
    $api_data = file_get_contents($api);
    $weather = json_decode($api_data, true);
    $celcius = $weather["main"]["temp"] - 273;
                   
                    
                    
    
    // Proceed with the API request if the city is not empty
    if (!empty($city)) {
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
    }



                    

}


<?php
$apiKey = 'a74c60a34f798eefa00278309f5c1b24Y';
$city = isset($_GET['city']) ? $_GET['city'] : '';
$city = trim($city); // Remove whitespace
$city = filter_var($city, FILTER_SANITIZE_STRING); // Sanitize the input

// Proceed with the API request if the city is not empty
if (!empty($city)) {
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
}
?>
?>