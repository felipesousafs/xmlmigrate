<?php
/**
 * Created by PhpStorm.
 * User: VLAD
 * Date: 08/06/2017
 * Time: 09:27
 */

include 'connect_pg.php';

$xml = simplexml_load_file('alunos.xml'); /* Lê o arquivo XML e recebe um objeto com as informações */

/* Percorre o objeto e salva as informações no banco de dados */
foreach ($xml as $aluno){
    pg_query($conexao,"INSERT INTO alunos(matricula, nome, email, cod_curso) 
    VALUES ('$aluno->matricula', '$aluno->nome', '$aluno->email', '$aluno->cod_curso')") or die("Fail!"."<br>");
}
echo "Import 'alunos'... Done!"."<br>";

?>