<?php if(!isset($_GET['editar'])){ ?>
<h1>Inserir novo curso</h1><br>
<form method="post" action="processa_curso.php">
    <br>
    <label>Nome Curso:</label><br>
    <input type="text" name="nome_curso" placeholder="Insira o nome do curso" class="con1">
    <br><br>
    <label>Carga horária:</label><br>
    <input type="text" name="carga_horaria" placeholder="Insira a carga horária" class="con2">
    <br>
    <br>
    <input class="btn btn-success" type="submit" value="Inserir curso">
</form>

<?php }else {  ?>
<?php while($linha = mysqli_fetch_array($consulta_cursos)){ ?>
    <?php if($linha['id_curso'] == $_GET['editar']){ ?>

    <h1>Editar curso</h1><br>
    <form method="post" action="edita_curso.php">
        <input type="hidden" name="id_curso"  value="<?php echo $linha['id_curso']; ?>">
         <br>
        <label>Nome Curso:</label><br>
        <input class="con1" type="text" name="nome_curso" placeholder="Insira o nome do curso" value="<?php echo $linha['nome_curso']; ?>">
         <br><br>
        <label>Carga horária:</label><br>
        <input class="con2" type="text" name="carga_horaria" placeholder="Insira a carga horária" value="<?php echo $linha['carga_horaria']; ?>">
        <br>
        <br>
    <input class="btn btn-success" type="submit" value="Editar curso">
</form>
<?php } ?>
<?php } ?>
<?php } ?>