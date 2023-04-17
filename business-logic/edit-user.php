<?php

// Model class for users-table in database

class UserModel
{
  public $user_id;
  public $username;
  public $password;
  public $location;
  public $premium;
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
  <form action="EditUSer.php" method="POST">
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



  <!-- Update User and Redirect back to Weather Page -->
  <?php
  require_once __DIR__."/database.php";
  //Get post data
  $id = $_POST["id"];
  $username = $_POST["username"];
  $password = $_POST["password"];
  $location = $_POST["location"];
  $premium = $_POST["premium"];
  //Send post data to DB
  $query = "UPDATE users SET username = ?, password = ?, location = ?, premium = ?, WHERE id = ?";
  $stmt = $conn->prepare($query);
  $stmt->bind_param("ssi", $username, $password, $location, $premium);
  $success = $stmt->execute();

  if($success){
    header("location: WeatherPage.php");

  }else{
    echo "Error";
  }
  ?>
</body>
</html>
