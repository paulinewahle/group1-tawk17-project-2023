<?php

// Define global constant to prevent direct script loading 
define('MY_APP', true);

// Load the router responsible for handling API requests
require_once __DIR__ . "/api/APIRouter.php";
require_once __DIR__."/frontend/FrontendRouter.php";

// Get URL path
$path = $_GET["path"];
$path_parts = explode("/", $path);
$base_path = strtolower($path_parts[0]);


// If the URL path starts with "api", load the API
if($base_path == "home" && count($path_parts) > 1){
    $query_params = $_GET;
    
 // Handle requests using the API router
 $api = new FrontendRouter($path_parts, $query_params);
 $api->handleRequest();

}

else if($base_path == "api" && count($path_parts) > 1){
    $query_params = $_GET;

        //Handle request using API router
        $frontend = new APIRouter($path_parts, $query_params);
        $frontend -> handleRequest();
}
else{ // If URL path is not API, respond with "not found"
    //http_response_code(404);
    header('Location: home');
    die("Page not found");
}
