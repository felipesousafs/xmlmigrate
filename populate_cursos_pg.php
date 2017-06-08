<?php
/**
 * Created by PhpStorm.
 * User: VLAD
 * Date: 08/06/2017
 * Time: 08:31
 */
include 'connect_pg.php';

$xml = simplexml_load_file('cursos.xml'); /* Lê o arquivo XML e recebe um objeto com as informações */

/* Percorre o objeto e salva as informações no banco de dados */
foreach ($xml as $curso){
    pg_query($conexao,"INSERT INTO cursos(codigo, descricao, carga_horaria) 
    VALUES ('$curso->codigo', '$curso->descricao', '$curso->carga_horaria')") or die("Fail!"."<br>");
}
echo "Import 'cursos'... Done!"."<br>";

?>