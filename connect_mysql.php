<?php
/**
 * Created by PhpStorm.
 * User: VLAD
 * Date: 07/06/2017
 * Time: 22:47
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "topicosbd";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>