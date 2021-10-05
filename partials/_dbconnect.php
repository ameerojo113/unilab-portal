<?php
$host = "localhost";
$user = "root";
$password = "052621";
$database = "unilab-portal";



$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
    die("Error" . mysqli_connect_error());
}
