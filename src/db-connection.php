<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "lifefragrance";

$connection = mysqli_connect($servername, $username, $password, $database);
if (!$connection) {
    die("Connection error : " . mysqli_connect_error());
}
