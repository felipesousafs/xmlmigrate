<?php
/**
 * Created by PhpStorm.
 * User: fmsoft
 * Date: 06/06/17
 * Time: 08:50
 */

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully"."</br>";

// Create database
$sql = "CREATE DATABASE topicosbd";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);

?>