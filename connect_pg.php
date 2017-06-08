<?php
/**
 * Created by PhpStorm.
 * User: VLAD
 * Date: 07/06/2017
 * Time: 23:23
 */

$servidor = "localhost";
$usuario = "postgres";
$senha = "postgres";
$dbname = "topicosbd";
$conexao = pg_connect(
    "host=".$servidor
    ." dbname=".$dbname
    ." user=".$usuario
    ." password=".$senha) or die ("Não foi possível conectar PostGreSQL");
echo "Conexão efetuada com sucesso!!"."<br>";

?>