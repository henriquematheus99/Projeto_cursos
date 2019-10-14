<a class="btn btn-secondary" href="?pagina=inserir_matricula">Inserir nova matricula</a>
<table class="table table-striped" style="border: 1px solid #ccc; width: 100%; padding: 15px" id="matriculas">
    <thead>
    <tr>
        <th>Nome aluno</th>
        <th>Nome curso</th>
        <th>Deletar</th>
    </tr>
    </thead>
    <tbody>
    <?php
      while($linha = mysqli_fetch_array($consulta_matricula)){
           echo '<tr><td>'.$linha['nome_aluno'].'</td>';
           echo '<td>'.$linha['nome_curso'].'</td>';
           $linha++;
    ?> 
      <td><a href="deleta_matricula.php?id_matricula=<?php echo $linha['id_aluno_curso']; ?>">Deletar</a>
      </td></tr>
     
    <?php
         }
      
       ?>
    </tbody>   
    
</table>

