<?php
  $db_host = 'localhost';
  $db_username = 'root';
  $db_password = '';
  $db_name = 'vncorner';
  $db_port = 8000;

  $connection = mysqli_connect($db_host, $db_username, $db_password, $db_name, $db_port)
  or die ("Connection to database failed");
?>