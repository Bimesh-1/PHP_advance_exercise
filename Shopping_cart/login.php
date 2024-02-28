<?php
    $message = "";

    // this is a handy little trick to know if the form has been sent
    // you don't need a separate page to handle login (plus you can show errors at the form if there are any)
    if(isset($_POST["username"]) && isset($_POST["password"])) {
        if (($_POST["username"] == 'teacher' &&  $_POST["password"] == 'react') 
        || ($_POST["username"] == 'student' &&  $_POST["password"] == 'bc-college')) {
        // TODO: check if the username / password combo is student / bc-college or teacher / react
        // if yes, set the session variable (e.g. $_SESSION["username"]) and redirect the user to memberpage.php
        
        session_start();
        $_SESSION['username'] = $_POST['username'];
        header('location: memberpage.php');
        exit();
        } else {
            // else set $message to "Wrong username or password."
            $message = "Wrong username or password.";


        }
    }
    // this comes from the member page link
    else if(isset($_GET["logout"])) {
        // destroy the session
        session_start();
        session_unset();
        session_destroy();
        // you can also show some kind of message on the page if you like (not here - this is outside the body)
        $message = "Logout successfull";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login task</title>
</head>
<body>
    <form action="login.php" method="post">
        <p>
            <label for="username">User name: </label>
        <input type="text" id="username" name="username">
    </p>
        <p>
            <label for="password">Password: </label>
        <input type="password" id="password" name="password">
    </p>
        <p>
            <?php print $message; ?></p>
        <p><input type="submit" id="login-button" value="Log in">
    </p>
    </form>
    
</body>
</html>