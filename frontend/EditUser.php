<?php

// Check for a defined constant or specific file inclusion
if (!defined('MY_APP') && basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    die('This file cannot be accessed directly.');
}

// Model class for users-table in database

class UserModel{
    public $user_id;
    public $first_name;
    public $last_name;
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Edit Profile</title>
  </head>
  <body>
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
  </body>
</html>