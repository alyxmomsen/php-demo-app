<?php


$pdo = new \PDO('mysql:host=localhost;dbname=mydb;charset=utf8mb4' , 'root' , 'Donjuan1619m!rd');


$stt = $pdo->prepare('insert into notes (note) values (?);');

$stt->execute(['my another post']);


echo 'hello there';
require './../models/model.php';
