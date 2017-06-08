<?php
/**
 * Created by PhpStorm.
 * User: VLAD
 * Date: 07/06/2017
 * Time: 22:53
 */
?>
<html>
<head>
    <title>Home :: XML Migrate</title>
</head>
<body>
    <h2>::Menu::</h2>
    <p style="border: double; padding: 10px 10px 10px 10px;">
        <a href="create_tables.php" target="_blank"><b>[MySQL]</b> Create Tables <b>'alunos'</b> and <b>'cursos'</b></a><br>
        <a href="populate_cursos.php" target="_blank"><b>[MySQL]</b> Populate table <b>'cursos'</b></a><br>
        <a href="populate_alunos.php" target="_blank"><b>[MySQL]</b> Populate table <b>'alunos'</b></a><br>
        <a href="list_alunos.php" target="_blank"><b>[MySQL]</b> List content of table <b>'alunos'</b></a><br><br>
        <button style="background-color: grey;"><a href="to_xml.php" target="_blank" style="color: chartreuse;"><b>Export to XML</b></a><br></button>
    </p>
    <br>
    <p style="border: double; padding: 10px 10px 10px 10px">
        <a href="create_tables_pg.php" target="_blank"><b>[PostgreSQL]</b> Create Tables <b>'alunos'</b> and <b>'cursos'</b></a><br><br>
        <button style="background-color: lightsteelblue;"><a href="populate_cursos_pg.php" target="_blank" style="color: darkgreen;"><b>Populate table 'CURSOS' from XML</b></a> </button>
        <button style="background-color: lightsteelblue;"><a href="populate_alunos_pg.php" target="_blank" style="color: darkgreen;"><b>Populate table 'ALUNOS' from XML</b></a> </button>
    </p>
    <br>
</body>
</html>
