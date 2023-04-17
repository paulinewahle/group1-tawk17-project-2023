<?php
//helper method to retrieve data from the URL path or query string
 function extractParam($pathSegments, $pathIndex, $query_params, $query_param) {
   if (count($pathSegments)>$pathIndex) return trim(urldecode($pathSegments[$pathIndex]));
   if ($query_params[$query_param]!=null) return trim(urldecode($query_params[$query_param]));
   return null;
 }

 $segments = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));
 $query_str = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
 parse_str($query_str, $query_params);
//the location for the weather data (an address or partial address)
 $location=extractParam($segments,1, $query_params, "location");

// the unit group - us, metric or uk
 $unitGroup=extractParam($segments,2, $query_params, "unitGroup");

//we want weather data to aggregated to daily details.
 $aggregateHours=24;
// My API key
 $apiKey="https://www.visualcrossing.com/resources/documentation/weather-api/how-do-i-add-weather-forecast-to-my-webpage/";

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