<?php
  if (!isset($_SESSION["username"])) {
    echo "<script>loadLogin()</script>";
  }
  if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    echo "<script>loadProfile()</script>";
  }
?>   