<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "Amairani11";
$dBName = "schooltest";

//connection to our database
$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!'conn') {
    die("Connection failed: ".mysqli_connect_error());
}