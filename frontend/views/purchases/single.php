<?php
require_once __DIR__ . "/../../../frontend/controllers/WeatherController.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Weather Information</title>
</head>
<body>
    <h1>Weather Information</h1>
    <?php if (isset($errorMessage)): ?>
        <p>Error: <?php echo $errorMessage; ?></p>
    <?php else: ?>
        <p>Temperature: <?php echo $temperature; ?> Celsius</p>
        <p>Description: <?php echo $description; ?></p>
        <?php if (isset($icon)): ?>
            <img src="https://openweathermap.org/img/w/<?php echo $icon; ?>.png" alt="Weather Icon">
        <?php endif; ?>
    <?php endif; ?>
</body>
</html>
