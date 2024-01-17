<?php

$servername = "localhost";
$username = "root";
$password = ""; // Replace with your actual MySQL password
$database = "lab"; // Replace with your actual database name

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
} else {
    echo "Connection was successful";
}

// Select the database
if (!mysqli_select_db($conn, $database)) {
    die("Error selecting database: " . mysqli_error($conn));
}

?>
