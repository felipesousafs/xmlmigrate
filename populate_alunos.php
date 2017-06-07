<?php
/**
 * Created by PhpStorm.
 * User: fmsoft
 * Date: 06/06/17
 * Time: 10:57
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

$sql = "INSERT INTO `alunos` (`matricula`, `nome`, `email`, `cod_curso`) VALUES 
    ('1', 'Aluno 1', 'email1@gmail.com', '8'), 
    ('2', 'Aluno 2', 'aluno2@gmail.com', '4'), 
    ('3', 'Aluno 3', 'aluno3@gmail.com', '9'), 
    ('4', 'Aluno 4', 'aluno4@gmail.com', '1'), 
    ('5', 'Aluno 5', 'aluno5@gmail.com', '10'), 
    ('6', 'Aluno 6', 'aluno6@gmail.com', '9'), 
    ('7', 'Retardado', 'aluno7@gmail.com', '4'), 
    ('8', 'Aluno 8', 'aluno8@gmail.com', '1'), 
    ('9', 'Aluno 9', 'aluno9@gmail.com', '6'), 
    ('10', 'Aluno 10', 'aluno10@gmail.com', '10')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully"."<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>