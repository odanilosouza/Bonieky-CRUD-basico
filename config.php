<?php

$db_name = 'test';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';

$pdo = new PDO("mysql:dbname=".$db_name."; port=3307; host=".$db_host, $db_user, $db_pass);