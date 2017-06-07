<?php phpinfo(); ?>
<?php
/**
 * Created by PhpStorm.
 * User: fmsoft
 * Date: 06/06/17
 * Time: 11:35
 */

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "topicosbd";
$conexao = pg_connect(
    "host=".$servidor
    ." user".$usuario
    ." password=".$senha) or die ("Não foi possível conectar PostGreSQL");
echo "Conexão efetuada com sucesso!!";
//http://www.rafaelwendel.com/2011/07/como-importar-dados-de-um-arquivo-xml/
?>

