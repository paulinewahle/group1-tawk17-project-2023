<?php
    $weather = "";
    $error = "";
     
    if ($_GET['city']) {
         
     $urlContents = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=".urlencode($_GET['city']).",uk&appid=4b6cbadba309b7554491c5dc66401886");
         
        $weatherArray = json_decode($urlContents, true);
         
        if ($weatherArray['cod'] == 200) {
         
            $weather = "The weather in ".$_GET['city']." is currently '".$weatherArray['weather'][0]['description']."'. ";
 
            $tempInCelcius = intval($weatherArray['main']['temp'] - 273);
 
            $weather .= " Temperature: ".$tempInCelcius."&deg;C"."Wind speed".$weatherArray['wind']['speed']."m/s.";
             
        } else {
             
            $error = "Could not find city - please try again.";
             
        }
         
    }
?>

<?php
// Check for a defined constant or specific file inclusion
if (!defined('MY_APP') && basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    die('This file cannot be accessed directly.');
}
require_once __DIR__ . "/UsersAPI.php";
require_once __DIR__ . "/WeatherAPI.php";
require_once __DIR__ . "/UsersAPI.php";
// Class for routing all our API requests

class APIRouter{

    private $path_parts, $query_params;
    private $routes = [];

    public function __construct($path_parts, $query_params)
    {
        $this->routes = [
            "users" => "UsersAPI"
        ];

        $this->path_parts = $path_parts;
        $this->query_params = $query_params;
    }

    public function handleRequest(){

        // Get the requested resource from the URL such as "Customers" or "Products"
        $resource = strtolower($this->path_parts[1]);

        // Cet the class specified in the routes
        $route_class = $this->routes[$resource];

        // Create a new object from the resource class
        $route_object = new $route_class($this->path_parts, $this->query_params);

        // Handle the request
        $route_object->handleRequest();
    }
}