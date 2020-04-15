<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "Clarinet51423!";
$dBName = "logintest";

//connection to our database
$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!conn) {
    die("Connection failed: ".mysqli_connect_error());
}