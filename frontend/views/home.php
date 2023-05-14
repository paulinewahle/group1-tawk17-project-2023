<?php
require_once __DIR__ . "/../Template.php";

Template::header("Home");
?>

<<<<<<< Updated upstream
<body>
    <section>
    <form method="post">
    <h1>Weather App</h1>
    <button class="edit-user-btn">Edit User</button>
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
=======
<h1>Welcome home: <?= $this->home ?></h1>

<p>
    We are delighted to have you visit our website. Here you will find a selection of products and services that we provide.
    From our high quality apparel and accessories to our professional services, we are committed to providing our users
    with only the best. Whether you are looking for a new wardrobe or need help with a project, we have the perfect solution for you.
</p>

<p>
    Take a look around and explore our selection of products and services. We have something for everyone, from fashion-forward
    apparel to creative services. We are confident that you will find something that you love.

</p>

<p>
    Thank you for visiting our website. We look forward to serving you and helping you find the perfect product or service that you need.
</p>
>>>>>>> Stashed changes

<?php Template::footer(); ?>

@@ -1,46 +0,0 @@
<?php
require_once __DIR__."/WeatherAPI.php";



?>
