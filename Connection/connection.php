<?php

$servername = "localhost";
$dbName = "rental_car";
$username = "root";
$password = "";

$con = mysqli_connect($servername,$dbName, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
