<?php
$serverName = "localhost";
$userName = "root";
$password = "";

// Create connection
$conn = mysqli_connect($serverName, $userName, $password);

// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// Create Database
$sql = "CREATE DATABASE ap_21_4";

// if (mysqli_query($conn, $sql)) {
//     echo "Tao Database Thanh Cong";
// } else {
//     echo "Tao Database That Bai: " . mysqli_error($conn);
// }

// Create Table
$creTableUsers = "CREATE TABLE ap_21_4.users(
    id int AUTO_INCREMENT PRIMARY KEY,
    email varchar(50),
    pass varchar(16)
)";
// if (mysqli_query($conn, $creTableUsers)) {
//     echo "Table users created successfully";
// } else {
//     echo "Error creating table: " . mysqli_error($conn);
// }

// Insert valuses 
$u1 = "INSERT INTO ap_21_4.users (id, email, pass)
        VALUES (1, 'john1@example.com', '1')";
$u2 = "INSERT INTO ap_21_4.users (id, email, pass)
        VALUES (2, 'john2@example.com', '2')";
$u3 = "INSERT INTO ap_21_4.users (id, email, pass)
        VALUES (3, 'john3@example.com', '3')";
$u4 = "INSERT INTO ap_21_4.users (id, email, pass)
        VALUES (4, 'john4@example.com', '4')";
$u5 = "INSERT INTO ap_21_4.users (id, email, pass)
        VALUES (5, 'john5@example.com', '5')";
$u6 = "INSERT INTO ap_21_4.users (id, email, pass)
        VALUES (6, 'john6@example.com', '6')";

// if (!mysqli_query($conn, $u1)) {    // u2, u3, .....
//     echo "Error: " . $u1 . "<br>" . mysqli_error($conn);
// }

// Select values
$sentence_Select = "SELECT * FROM ap_21_4.users";
$select_all_users = mysqli_query($conn, $sentence_Select);

if (mysqli_num_rows($select_all_users) > 0) {
    // Output data of each row
    while ($row = mysqli_fetch_assoc($select_all_users)) {
        echo "Id: " . $row["id"] . " - Email: " . $row["email"] . " - Password" . $row["pass"] . "<br>";
    }
}else {
    echo "0 results";
}



mysqli_close($conn);
