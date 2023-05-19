<?php 
require_once __DIR__ . "/../data-access/WeatherDataAccess.php";
class WeatherService{
    public static function getCurrencies(){
        $weather_fetcher = new WeatherFetcher();

        $weather = $weather_fetcher->fetchWeather();

        return $weather;
    } 
}