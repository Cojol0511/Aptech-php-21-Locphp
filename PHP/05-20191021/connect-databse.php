<?php
$serverName = "localhost";
$userName = "root";
$password = "";

// Create connection
$conn = mysqli_connect($serverName, $userName, $password);


mysqli_close($conn);
