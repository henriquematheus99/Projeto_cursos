<?php 

include 'db.php';


$id_aluno_curso = $_GET['id_aluno_curso'];


$query = "DELETE FROM aluno_curso where id_aluno_curso = $id_aluno_curso";

mysqli_query($conexao, $query);

header ('location:index.php?pagina=matriculas');