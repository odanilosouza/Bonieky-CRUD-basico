<?php
require 'config.php';
//require 'models/UsuarioDaoMysql.php';

//$usuarioDao = new UsuarioDaoMysql($pdo);
//$lista = $usuarioDao->findAll();

?>

<a href="adicionar.php"> Adicionar Usuário</a>

<table border="1" width="100%">
  <tr>
    <td>ID</td>
    <td>NOME</td>
    <td>EMAIL</td>
    <td>AÇÕES</td>
  </tr>

  <?php 
      foreach ($lista as $usuario) {
        var_dump($lista);
      }
  ?>

  <?php foreach($lista as $usuario): ?>
     
    <tr>
      <td><?$usuario->getId();?></td>
      <td><?=$usuario->getNome();?></td>
      <td><?=$usuario->getEmail();?></td>
      <td>
      
        <a href="editar.php?id=<?=$usuario->getId();?>">[Editar]</a>
        <a href="excluir.php?id=<?=$usuario->getId();?>">[Excluir]</a> 
      </td>
    </tr>
  <?php endforeach; ?>
</table>

