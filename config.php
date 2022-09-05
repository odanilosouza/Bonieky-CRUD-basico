<?php

function conectar(){

  $local_serve = 'localhost';
  $usuario_serve = 'root';
  $senha = '';
  $banco = 'teste';

  try {
    $pdo = new PDO("mysql:host=$local_serve;dbname=$banco",$usuario_serve, $senha);
    $pdo->exec("SER CHARACTER SET utf8");
  } catch (\Throwable $th) {
    return $th;
    die;
  }

  return $pdo;
}
