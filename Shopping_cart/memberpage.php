<?php
session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    header('location: Login page');
    exit();
}
    // if the user is not logged in, send them back to login.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member page</title>
</head>
<body>

<?php
print("Welcome, $username!");
    // Greet the user with their name, i.e. get the session variable and print "Welcome, (username)!"
?>

<p><a href="login.php?logout">Log out</a></p>
    
</body>
</html>