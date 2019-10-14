<!doctype html>
<html>
<head>
    <title>CRUD PHP</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>    
    <header>
        <div class="container">
           <a href="?pagina=home"><img src="img/logo.jpg" title="Logo" alt="Logo"></a>
            <div id="menu">
               <a href="?pagina=cursos">Cursos</a>
               <a href="?pagina=alunos">Alunos</a>
               <a href="?pagina=matriculas">Matriculas</a>
               <?php if(isset($_SESSION['login'])){ ?>
               <a href="logout.php">
                   <?php echo $_SESSION['usuario'];?>(Sair)</a>
               <?php } ?>Sair
        </div>
    </div>    
    </header>   
    
    <div id="conteudo" class="container">
        
</html>