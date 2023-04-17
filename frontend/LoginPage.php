<?php
require_once __DIR__."/WeatherAPI.php";
require_once __DIR__."/WeatherPage.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Log In</title>
</head>
  <body>
    <!-- User Log In Field -->
    <h1>Login</h1>
    <form action="process-login.php" method="POST">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required><br><br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required><br><br>
      <input type="submit" value="Login">
    </form>
    <!-- Redirect to WeatherPage -->
    <?php
  if (isset($_POST['submit'])) {
    // process form data here
    header("Location: WeatherPage.php");
    exit();
  }
  ?>
  </body>
</html>