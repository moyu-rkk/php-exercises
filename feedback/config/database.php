<?php
  define('DB_HOST', 'localhost');
  define('DB_USER', 'moonbeam');
  define('DB_PASS', 'qwerty');
  define('DB_NAME', 'php_dev');

  // Create connection
  $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

  // Check connection
  if($conn->connect_error) {
    die('Connection Failed' . $conn->connect_error);
  }

  // echo 'CONNECTED!';
