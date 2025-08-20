<?php

$host = "localhost";
$user = "root";  // your MYSQL username
$pass = "";     // your MYSQL password
$db = "todo_app"; // db name

$conn = new mysqli($host, $user, $pass, $db);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
