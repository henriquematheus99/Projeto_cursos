<a class="btn btn-secondary" href="?pagina=inserir_curso">Inserir novo curso</a>
<table class="table table-striped" style="border: 1px solid #ccc; width: 100%; padding: 15px" id="cursos">
    <thead>
    <tr>
        <th>Nome do curso</th>
        <th>Carga horário</th>
        <th>Editar</th>
        <th>Deletar</th>
       
    </tr>
    </thead>
    <tbody>
    <?php
      while($linha = mysqli_fetch_array($consulta_cursos)){
           echo '<tr><td>'.$linha['nome_curso'].'</td>';
           echo '<td>'.$linha['carga_horaria'].'</td>';
           $linha++;
           ?>
                <td><a href="?pagina=inserir_curso&editar=<?php echo $linha['id_curso']; ?>">Editar</a></td>
                <td><a href="deleta_curso.php?id_curso=<?php echo $linha['id_curso']; ?>">Deletar</a></td></tr>
    <?php       
      }
       ?>
    </tbody>   
    
</table>

