<h1>Inserir nova matricula</h1>
<br>

<form method="post" action="processa_matricula.php">
    <br><br>
    <select class="con1" name="escolha_aluno">
        <option>Selecione um aluno</option>
        <?php
            while($linha = mysqli_fetch_array($consulta_alunos)){
             echo '<option value="'.$linha['id_aluno'].'">'.$linha['nome_aluno'].'</option>';
             $linha++;
        }
     ?>
    <br> 
    </select>
    <select class="con1" name="escolha_curso">
        <option>Selecione um curso</option>
        <?php
            while($linha = mysqli_fetch_array($consulta_cursos)){
             echo '<option value="'.$linha['id_curso'].'">'.$linha['nome_curso'].'</option>';
             $linha++;
        }
     ?>
    </select>
    <br><br>
    <input class="btn btn-success" type="submit" value="matricular aluno no curso">
   
</form>       