<?php
  session_start();
  include "connection.php";
  $username = $_POST["username"];
  $password = $_POST["password"];
  $query = mysqli_query($connection, "SELECT * FROM user WHERE username = '$username'");

  $check = mysqli_num_rows($query);

  if ($check) {
    $_SESSION['reg-attempt'] = "fail";
    header("location: ../index.php");
  } else {
    $reg_query = mysqli_query($connection, "INSERT INTO `user` (`username`, `password`) VALUES ('$username', '$password')");
    $_SESSION['reg-attempt'] = "success";
    header("location: ../index.php");
  }
?>