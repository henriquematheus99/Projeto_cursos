<?php

include 'db.php';

$id_aluno = $_POST['escolha_aluno'];
$id_curso = $_POST['escolha_curso'];

$query = "insert into aluno_curso(id_aluno, id_curso) values($id_aluno, $id_curso)";

mysqli_query($conexao, $query);

header('location:index.php?pagina=matriculas');