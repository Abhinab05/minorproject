<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$course = $_POST['course'];
$admission_date = $_POST['admission_date'];

$sql = "INSERT INTO students (name, email, course, admission_date) 
        VALUES ('$name', '$email', '$course', '$admission_date')";

if ($conn->query($sql) === TRUE) {
    echo "Admission successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>