<h1 style="text-align:center"> Bem vindos a Dg Cursos !!!!!</h1>
<br>
<form method="post" action="login.php">
    <label>Usuário:</label><br>
    <input type="text" name="usuario" placeholder="Nome do usuario" class="con1">
    <br>
    <label>Senha:</label><br>
    <input type="password" name="senha" placeholder="Digite a senha" class="con2">
    <br>
    <input type="submit" value="Login" class="btn btn-success">
</form>
<br>
<?php if(isset($_GET['erro'])){ ?>

    <div class="alert alert-danger" roles="alert">
        Usuário e/ou senha inválidos.
    </div>
    
<?php } ?>
