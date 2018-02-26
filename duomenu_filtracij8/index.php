<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "namu_darbu_baze";
$dsn = "mysql:host=$host;dbname=$db";
$pdo = new PDO($dsn, $user, $password);
$sql = "SELECT st.surname, ms.mark, md.module_name FROM students st
LEFT JOIN marks ms
ON ms.student_no = st.student_no
LEFT JOIN modules md
on md.module_code = ms.module_code";