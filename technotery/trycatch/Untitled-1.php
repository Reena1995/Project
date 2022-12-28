<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Check if the form has been submitted
if (isset($_POST['submit'])) {
  try {
    // Connect to the database
    $db = new PDO('mysql:host=localhost;dbname=try', 'root', '');
    // Set up the prepared statement
    $stmt = $db->prepare('INSERT INTO users (name, email) VALUES (:name, :email)');
    $stmt->bindValue(':nk
    ame', $_POST['name']);
    $stmt->bindValue(':email', $_POST['email']);
    // Execute the prepared statement
    $stmt->execute();
    echo"success";
  } catch (PDOException $e) {
    // If there was an error, display it
    echo $e->getMessage();
    echo"error";
  }
}
?>
<form  method="post">
  <label for="name">Name:</label>
  <input type="text" name="name" id="name">
  <br>
  <label for="email">Email:</label>
  <input type="email" name="email" id="email">
  <br>
  <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>