<?php

require_once __DIR__ . "/RestAPI.php";
require_once __DIR__ . "/UsersAPI.php";
require_once __DIR__ . "/APIRouter.php";
require_once __DIR__ . "/../business-logic/UsersService.php";


if (!defined('MY_APP') && basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    die('This file cannot be accessed directly.');
}


class WeatherAPI extends RestAPI
{
    private $weatherService;
    // Handles the request by calling the appropriate member function
    public function __construct(WeatherService $weatherService)
        {
            $this->weatherService = $weatherService;
        }
    
        public function getWeatherByCity($city)
        {
            // Call the WeatherService to retrieve weather data by city
            $weatherData = $this->weatherService->getWeatherByCity($city);
    
            // Return the weather data as a JSON response
            header('Content-Type: application/json');
            echo json_encode($weatherData);
        }
    } 

   