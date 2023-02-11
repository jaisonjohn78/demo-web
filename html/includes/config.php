<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "easyearn_master_db";

// $hostname = "sql103.epizy.com";
// $username = "epiz_31513890";
// $password = "o8CWyaQlmJe";
// $database = "epiz_31513890_database";

$conn = mysqli_connect($hostname, $username, $password, $database) or die("Database connection failed");

$base_url = "https://easyearn.in/html/home/index.php";
$my_email = "easyearnfoundation@gmail.com";

?>