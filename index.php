<?php

session_start();

# incluindo conexão
include 'db.php';

# incluindo cabeçalho
include 'header.php';

# Conteúdo da página
session_start();
if(isset($_SESSION['login'])){
    if(isset($_GET['pagina'])){
        $pagina = $_GET['pagina'];
    }
    else{
        $pagina = 'cursos';
    }
}
else{
    $pagina = 'home';
}




switch ($pagina){
    case 'cursos':include 'view/cursos.php'; break;
    case 'alunos':include 'view/alunos.php'; break;
    case 'matriculas':include 'view/matriculas.php'; break;
    case 'inserir_curso':include 'view/inserir_curso.php'; break;
    case 'inserir_aluno':include 'view/inserir_aluno.php'; break;
    case 'inserir_matricula':include 'view/inserir_matricula.php'; break;
    default: include 'view/home.php'; break;
}


# Incluindo Rodapé
include 'footer.php';





