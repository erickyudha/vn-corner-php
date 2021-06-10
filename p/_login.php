<?php
  session_start();
  include "connection.php";
  $username = $_POST["username"];
  $password = $_POST["password"];
  $query = mysqli_query($connection, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");

  $check = mysqli_num_rows($query);

  if ($check) {
    $_SESSION['username'] = $username;
    header("location: ../index.php");
  } else {
    $_SESSION['login-attempt'] = "fail";
    header("location: ../index.php");
  }
?>