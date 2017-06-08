<?php
/**
 * Created by PhpStorm.
 * User: VLAD
 * Date: 07/06/2017
 * Time: 22:45
 */
include 'connect_mysql.php';

$sql = "SELECT * FROM alunos";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<b>Matricula: </b>" . $row["matricula"] . "<br>"
            . "<b>Nome: </b>" . $row["nome"] . "<br>"
            . "<b>Curso: </b>" . $row["email"] . "<br>"
            . "<b>Codigo do Curso: </b>" . $row["cod_curso"] . "<br><br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

?>