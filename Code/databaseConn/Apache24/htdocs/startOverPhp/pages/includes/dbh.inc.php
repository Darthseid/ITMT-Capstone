<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "Clarinet51423!";
$dBName = "logintest";
$user = "admin";
$pass = "root";

//connection to our database
$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!'conn') {
    die("Connection failed: ".mysqli_connect_error());
}

$sql = "CREATE TABLE usercom (
    idUsers INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    uidUsers TINYTEXT NOT NULL,
    emailUsers TINYTEXT NOT NULL,
    pwdUsers TINYTEXT NOT NULL,
    comments LONGTEXT NOT NULL
    )";



if ($conn->query($sql)) {
    echo "Table created successfully";
} else {
    
}

//prepares the statement to look into table
$stmt1 = $conn->prepare('SELECT uidUsers, pwdUsers FROM usercom WHERE uidUsers = ? OR pwdUsers = ?');
$stmt1->bind_param('ss', $user, $pass);
$stmt1->execute();
$stmt1->store_result();

//checks if admin was already created
if ($stmt1->num_rows) {
    echo "ezists";
}
//automatically creates an admin account
else {
    echo "created";
    $admin = "INSERT INTO usercom (idUsers, uidUsers, emailUsers, pwdUsers, comments)
    VALUES ('0', 'admin', 'admin@example.com', 'root', '')";
    $conn->query($admin);
}


