<?php

$servidor = "localhost";
$usuario = "id3365231_matheus";
$senha = "12345";
$db = "id3365231_curso";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);


$query = "SELECT * FROM cursos";
$consulta_cursos = mysqli_query($conexao, $query);


$query = "SELECT * FROM alunos";
$consulta_alunos = mysqli_query($conexao, $query);

$query = "SELECT aluno_curso.id_aluno_curso, alunos.nome_aluno, cursos.nome_curso FROM alunos, cursos, aluno_curso WHERE aluno_curso.id_aluno = alunos.id_aluno AND aluno_curso.id_curso = cursos.id_curso";
            
$consulta_matricula = mysqli_query($conexao, $query);            