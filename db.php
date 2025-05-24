<?php
$host = "localhost";
$user = "root"; // DB username
$pass = "";     // DB password
$db = "student_admission";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>