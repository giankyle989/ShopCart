<?php


function emptyInputSignup ($name, $email, $username, $pass) {
   
    $result;

    if (empty($name) || empty($email)|| empty($username) ||empty($pass)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;

}

function invalidUid($username) {
   
    $result;

    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;

}

function invalidEmail($email) {
   
    $result;

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;

}


function uidExists($conn, $username){
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);


    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}




function createUser($conn, $name, $email, $username, $pass){
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPass) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }


    $hashedPass = password_hash($pass, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username,$hashedPass);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../index.php?error=none");
    exit();
}



function emptyInputLogin ($username, $pass) {
   
    $result;

    if (empty($username) || empty($pass)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;

}

function loginUser($conn, $username, $pass) {
    $uidExists = uidExists($conn, $username, $username);
  
    if ($uidExists === false) {
      header("location:../login.php?error=wronglogin");
      exit();
    }
  
    $passHashed = $uidExists["usersPass"];
    $checkPass = password_verify($pass, $passHashed);
  
    if ($checkPass === false) {
      header("location:../login.php?error=wronglogin");
      exit();
    } else if ($checkPass === true) {
      session_start();
      $_SESSION["usersId"] = $uidExists["usersId"];
      $_SESSION["usersUid"] = $uidExists["usersUid"];
      header("location: ../index.php");
      exit();
    }
  
  }