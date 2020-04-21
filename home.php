<?php 
include("includes/config.php");

// session_destroy(); this code will logout a user

if(isset($_SESSION['userLoggedIn'])){
  $userLoggedIn = $_SESSION['userLoggedIn'];
  echo $userLoggedIn . ", ";
}
else {
  header("Location: register.php");
}
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperFetch</title>
</head>
<body>
   <?php echo "welcome home!"; ?>
</body>
</html>