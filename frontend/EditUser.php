<?php

// Check for a defined constant or specific file inclusion
if (!defined('MY_APP') && basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
  die('This file cannot be accessed directly.');
}

// Model class for users-table in database

class UserModel
{
  public $user_id;
  public $first_name;
  public $last_name;
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Edit Profile</title>
</head>
<body>
  <!-- Edit Profile Information -->
  <h1>Edit Profile</h1>
  <form action="process-edit-profile.php" method="POST">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>
    <label for="location">Location:</label>
    <input type="text" id="location" name="location"><br><br>
    <label for="premium">Premium:</label>
    <input type="checkbox" id="premium" name="premium"><br><br>
    <input type="submit" value="Save Changes">
  </form>
  <!-- Redirect back to Weather Page -->
  <?php
  if (isset($_POST['submit'])) {
    // process form data here
    header("Location: WeatherPage.php");
    exit();
  }
  ?>
</body>

</html>