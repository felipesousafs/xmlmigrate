<?php
/**
 * Created by PhpStorm.
 * User: fmsoft
 * Date: 06/06/17
 * Time: 08:46
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "topicosbd";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT `matricula`, `nome`, `email`, `cod_curso` FROM `alunos`";
$result = mysqli_query($conn, $sql);

$xml = "<?xml version='1.0' encoding='UTF-8'?>n";//cabeçalho do arquivo
$xml .= "<topicosbd> n";

while($reg = mysqli_fetch_assoc($result)){
    $xml .= "t<alunos>n";
    $xml .= "tt<matricula>$reg[matricula]</matricula>n";
    $xml .= "tt<nome>$reg[nome]</nome>n";
    $xml .= "tt<email>$reg[email]</email> n";
    $xml .= "tt<codcurso>$reg[cod_curso]</codcurso> n";
    $xml .= "t</alunos>n";
}
$xml .= "</topicosbd>";

$ponteiro = fopen('backup.xml', 'w'); //cria um arquivo com o nome backup.xml
fwrite($ponteiro, $xml); // salva conteúdo da variável $xml dentro do arquivo backup.xml

$ponteiro = fclose($ponteiro); //fecha o arquivo

?>