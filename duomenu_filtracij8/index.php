<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "namu_darbu_baze";
$dsn = "mysql:host=$host;dbname=$db";
$pdo = new PDO($dsn, $user, $password);
$sql = "
// SELECT c.name as marks, 
// sc.name as module_code
// sc.name as student_no
// FROM marks c
// LEFT JOIN module sc 
// LEFT JOIN student sc 
// ON sc.parent_id = c.id";
// $mark = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
// echo '<pre>';
// print_r($mark);
// echo '<pre>';