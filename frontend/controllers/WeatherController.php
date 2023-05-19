<?php
// Check for a defined constant or specific file inclusion
if (!defined('MY_APP') && basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    die('This file cannot be accessed directly.');
}

require_once __DIR__ . "/../../api/WeatherAPI.php";

// class WeatherController extends ControllerBase
// {

//     public function handleRequest()
//     {
//         $this->model["city"] = $city;
//         "weather" -> WeatherDataAccess($weather->weather)
//     }
// }