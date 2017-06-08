<?php
/**
 * Created by PhpStorm.
 * User: fmsoft
 * Date: 06/06/17
 * Time: 09:40
 */

include 'connect_mysql.php';

// sql to create table

$create_cursos = "CREATE TABLE cursos (
        codigo INT NOT NULL,
        descricao VARCHAR(60) NOT NULL ,
        carga_horaria INT NOT NULL ,
        PRIMARY KEY (codigo)
        )";
if (mysqli_query($conn, $create_cursos)) {
    echo "Table cursos created successfully"."<br>";
}else {
    echo "Error creating table: " . mysqli_error($conn)."<br>";
}
$create_alunos = "CREATE TABLE alunos (
        matricula INT NOT NULL,
        nome VARCHAR(60) NOT NULL ,
        email VARCHAR(60) NOT NULL ,
        cod_curso INT NOT NULL ,
        PRIMARY KEY (matricula),
        FOREIGN KEY (cod_curso) REFERENCES cursos(codigo)
        )";

if (mysqli_query($conn, $create_alunos)) {
    echo "Table alunos created successfully"."<br>";
}else {
    echo "Error creating table: " . mysqli_error($conn)."<br>";
}

mysqli_close($conn);

?>