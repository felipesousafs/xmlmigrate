<?php
/**
 * Created by PhpStorm.
 * User: fmsoft
 * Date: 06/06/17
 * Time: 10:22
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

$sql = "INSERT INTO `cursos` (`codigo`, `descricao`, `carga_horaria`) VALUES
    ('1', 'PHP', '60'),
    ('2', 'Ruby', '60'),
    ('3', 'Ruby + Rails', '60'),
    ('4', 'Java', '40'),
    ('5', 'Python', '60'),
    ('6', 'Python + Django', '90'),
    ('7', 'Front-End com CSS + HTML5', '60'),
    ('8', 'Gestão de projetos', '120'),
    ('9', 'Python + Flesk', '60'),
    ('10', 'Banco de Dados MariaDB', '60')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully"."<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>