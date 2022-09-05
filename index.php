<?php
require 'config.php';
$lista= [];
$sql = $pdo->query("SELECT * FROM  usuarios");
if($sql->rowCount() > 0){
  $lista = $sql->fetchAll(PDO::FETCH_ASSOC);

}

?>

<a href="adicionar.php"> Adicionar usuário</a>
<table border="4" width="200">
  <tr>
    <th>ID</th>
    <th>NOME</th>
    <th>EMAIL</th>
    <th >AÇOES</th>
  </tr>
<?php foreach($lista as $usuario): ?>
<tr>
  <td><?php echo $usuario['id'];?></td>
  <td><?php echo $usuario['nome'];?></td>
  <td><?php echo $usuario['email'];?></td>
  <td>

    <a href="editar.php?id=<?=$usuario['id'];?>">[Editar]</a>

    <a href="excluir.php?id=<?=$usuario['id'];?>" onclick="return confirm('Deseja realmente excluir?')">[Excluir]</a>
  </td>
</tr>
<?php endforeach; ?> 
</table>
