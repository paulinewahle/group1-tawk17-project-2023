<?php
require_once __DIR__ . "/RestAPI.php";
require_once __DIR__ . "/UsersAPI.php";
require_once __DIR__ . "/APIRouter.php";

//Premium User Get Weather Data
if ($user->isPremium()) {
    if (isset($_POST["submit"])) {
        if (empty($_POST["city"])) {
            echo "Enter your City";
        }else{
            $city = $_POST["city"];
            $api_key = "a74c60a34f798eefa00278309f5c1b24";
            $api = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$api_key";
            $api_data = file_get_contents($api);
            $weather = json_decode($api_data, true);
            $celcius = $weather["main"]["temp"] - 273;
        }
    }
    $user->updateProfile($username, $password, $location, $premium);
    
}

// Normal User Get Weather Data
else {
    if (isset($_POST["submit"])) {
        if (empty($_POST["city"])) {
            echo "Enter your City";
        }else{
            $city = $_POST["city"];
            $api_key = "a74c60a34f798eefa00278309f5c1b24";
            $api = "api.openweathermap.org/data/2.5/forecast?weather?q=$city&appid=$api_key";
            $api_data = file_get_contents($api);
            $weather = json_decode($api_data, true);
            $celcius = $weather["main"]["temp"] - 273;
        }
    }
}
  


?>