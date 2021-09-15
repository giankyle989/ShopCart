<?php
  session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Shop Cart</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="css/product.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/cart.css">

</head>
<body>

  <nav>
    <a href="">
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-command" viewBox="0 0 16 16">
      <path d="M3.5 2A1.5 1.5 0 0 1 5 3.5V5H3.5a1.5 1.5 0 1 1 0-3zM6 5V3.5A2.5 2.5 0 1 0 3.5 6H5v4H3.5A2.5 2.5 0 1 0 6 12.5V11h4v1.5a2.5 2.5 0 1 0 2.5-2.5H11V6h1.5A2.5 2.5 0 1 0 10 3.5V5H6zm4 1v4H6V6h4zm1-1V3.5A1.5 1.5 0 1 1 12.5 5H11zm0 6h1.5a1.5 1.5 0 1 1-1.5 1.5V11zm-6 0v1.5A1.5 1.5 0 1 1 3.5 11H5z"/>
                      </svg>
    </a>
    <button class="hamburger" id="hamburger">
      <i class="fas fa-bars"></i>
    </button>
    <ul class="nav-ul" id="nav-ul">
      <li><a href="index.php">Home</a></li>
      <li><a href="index.php#fashion">Fashion</a></li>
      <li><a href="index.php#peripherals">Peripherals</a></li>
      <li><a href="index.php#about">Contact</a></li>
      <?php 

      if (isset($_SESSION["usersUid"])){
      echo  "<li><a href='#'>Profile</a></li>";
      echo  "<li><a href='cart.php'>Cart</a></li>";
      echo  "<li><a href='includes/logout.inc.php'>Logout</a></li>";
      }else {
        echo  "<li><a href='login.php'>Login</a></li>";
        echo  "<li><a href='signup.php'>Sign Up</a></li>";
        }
      ?>
    </ul>
  
    <ul class="nav-button"></ul>

  </nav>
