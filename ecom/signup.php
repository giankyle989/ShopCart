<?php
session_start();

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sliding Log-Reg</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/logstyle.css">
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
        
        <div class="container" id="container">
            <!--SignUp-->
            <div class="form-container sign-up-container">
                <form action="includes/signup.inc.php" method="post">
                    <h1>Create Account</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class='bx bxl-facebook-circle'></i></a>
                        <a href="#" class="social"><i class='bx bxl-google' ></i></a>
                        <a href="#" class="social"><i class='bx bxl-linkedin' ></i></i></a>
                    </div>
                    <span>or use your email for registration</span>
                    <input type="text" name="name" placeholder="Full Name" />
                    <input type="text" name="email" placeholder="Email" />
                    <input type="text" name="uid" placeholder="Username" />
                    <input type="password" name="password" placeholder="Password" />
                    <button type="submit" name="submit">Sign Up</button>
                    <?php
if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
        echo "<p>Fill in all fields.</p>";
    }
    else if ($_GET["error"] == "invaliduid") {
        echo "<p>Choose a proper username.</p>";
    }
    else if ($_GET["error"] == "invalidEmail") {
        echo "<p>Choose a proper email.</p>";
    }
    else if ($_GET["error"] == "usernametaken") {
        echo "<p>Username is already taken.</p>";
    }
    else if ($_GET["error"] == "stmtfailed") {
        echo "<p>Something went wrong, try again!</p>";
    }
    else if($_GET["error"] == "none") {
        echo "<p>You have signed up.</p>";
    }
}
                    ?>
                </form>


            </div>


<?php
include_once'login.php';
?>