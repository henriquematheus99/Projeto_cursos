<?php 

include 'db.php';


$id_curso = $_GET['id_curso'];


$query = "DELETE FROM cursos where ID_CURSO = $id_curso";

mysqli_query($conexao, $query);

header ('location:index.php?pagina=cursos');