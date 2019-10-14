<a class="btn btn-secondary" href="?pagina=inserir_aluno">Inserir novo aluno</a>
<table class="table table-striped" style="border: 1px solid #ccc; width: 100%; padding: 15px" id="alunos">
    <thead>
    <tr>
        <th>Nome do aluno</th>
        <th>Data de nascimento</th>
        <th>Editar</th>
        <th>Deletar</th>
        
    </tr>
    </thead>
    <tbody>
    <?php
      while($linha = mysqli_fetch_array($consulta_alunos)){
           echo '<tr><td>'.$linha['nome_aluno'].'</td>';
           echo '<td>'.$linha['data_nascimento'].'</td>';
           $linha++;
           ?>
        
        <td><a href="?pagina=inserir_aluno&editar=<?php echo $linha['id_aluno']; ?>">Editar</a></td>
        <td><a href="deleta_aluno.php?id_aluno=<?php echo $linha['id_aluno']; ?>">Deletar</a></td></tr>
    
    <?php       
      }
         ?>
    </tbody>     
    
</table>

