<?php

$server = "localhost";
$user = "root";
$pw = "root";
$db = "nordic_greens";

$conn = mysqli_connect($server, $user, $pw, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}