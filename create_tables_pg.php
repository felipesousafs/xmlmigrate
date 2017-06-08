<?php
/**
 * Created by PhpStorm.
 * User: VLAD
 * Date: 07/06/2017
 * Time: 17:18
 */
include 'connect_pg.php';

//Create table 'cursos'
$sql =<<<EOF
      CREATE TABLE cursos
      (codigo INTEGER NOT NULL PRIMARY KEY ,
      descricao VARCHAR(60) NOT NULL,
      carga_horaria INT NOT NULL);
EOF;

$ret = pg_query($conexao, $sql);
if(!$ret) {
    echo pg_last_error($conexao);
} else {
    echo "Table 'cursos' created successfully"."<br>";
}

//Create table 'alunos'
$sql =<<<EOF
      CREATE TABLE alunos
      (matricula INTEGER NOT NULL PRIMARY KEY,
      nome VARCHAR(60) NOT NULL,
      email VARCHAR(60) NOT NULL,
      cod_curso INT NOT NULL REFERENCES cursos(codigo));
EOF;

$ret = pg_query($conexao, $sql);
if(!$ret) {
    echo pg_last_error($conexao);
} else {
    echo "Table 'alunos' created successfully"."<br>";
}

pg_close($conexao);

?>