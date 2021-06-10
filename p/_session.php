<?php
  session_start();
  include "connection.php";
  
  if (!isset($_SESSION['login-attempt'])) {
    $_SESSION['login-attempt'] = "clear";
  } elseif ($_SESSION['login-attempt'] == "fail") {
    echo "<script>alert('Username or Password is Wrong. Please Try Again!');</script>";
  }
  $_SESSION['login-attempt'] = "clear";

  if (!isset($_SESSION['reg-attempt'])) {
    $_SESSION['login-attempt'] = "clear";
  } elseif ($_SESSION['reg-attempt'] == "fail") {
    echo "<script>alert('Username already exist! Please try again..')</script>";
  } elseif ($_SESSION['reg-attempt'] == "success") {
    echo "<script>alert('Register success!')</script>";
  }
  $_SESSION['reg-attempt'] = "clear";

?>