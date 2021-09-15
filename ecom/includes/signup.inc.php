<?php


if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pass = $_POST["password"];


    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup ($name, $email, $username,$pass) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidUid($username) !== false) {
        header("location: ../signup.php?error=invaliduid");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if (uidExists($conn, $username) !== false) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $name, $email, $username, $pass);
    
} else {
    header('location: ../signup.php');
    exit();
}