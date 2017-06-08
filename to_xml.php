<?php
/**
 * Created by PhpStorm.
 * User: fmsoft
 * Date: 06/06/17
 * Time: 08:46
 */
include 'connect_mysql.php';

$sql = "SELECT * FROM `cursos`";
$result = mysqli_query($conn, $sql);

$xml = "";
$xml .= "<topicosbd> \n";

while($reg = mysqli_fetch_assoc($result)){
    $xml .= "\t<cursos>\n";
    $xml .= "\t\t<codigo>$reg[codigo]</codigo>\n";
    $xml .= "\t\t<descricao>$reg[descricao]</descricao>\n";
    $xml .= "\t\t<carga_horaria>$reg[carga_horaria]</carga_horaria> \n";
    $xml .= "\t</cursos>\n";
}
$xml .= "</topicosbd>";

$ponteiro = fopen('cursos.xml', 'w'); //cria um arquivo com o nome cursos.xml
fwrite($ponteiro, $xml); // salva conteúdo da variável $xml dentro do arquivo backup.xml

$ponteiro = fclose($ponteiro); //fecha o arquivo

$sql = "SELECT * FROM `alunos`";
$result = mysqli_query($conn, $sql);

$xml = "";
$xml .= "<topicosbd> \n";

while($reg = mysqli_fetch_assoc($result)){
    $xml .= "\t<alunos>\n";
    $xml .= "\t\t<matricula>$reg[matricula]</matricula>\n";
    $xml .= "\t\t<nome>$reg[nome]</nome>\n";
    $xml .= "\t\t<email>$reg[email]</email> \n";
    $xml .= "\t\t<cod_curso>$reg[cod_curso]</cod_curso> \n";
    $xml .= "\t</alunos>\n";
}
$xml .= "</topicosbd>";

$ponteiro = fopen('alunos.xml', 'w'); //cria um arquivo com o nome alunos.xml
fwrite($ponteiro, $xml); // salva conteúdo da variável $xml dentro do arquivo backup.xml

$ponteiro = fclose($ponteiro); //fecha o arquivo

echo "Export done!"."<br>";
?>