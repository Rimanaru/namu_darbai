<?php
session_start();

// if(isset($_POST['register'])&& isset($_POST["password"])){
//     echo " password ".$_POST['password'];
//     echo " register".$_POST['register'];
    
    $input=array(
    'user'=>$_POST['username'],
    'password'=>$_POST['password'],
    'email'=>$_POST['email'],
    'name'=>$_POST['name']
    );
    var_dump($input);
    $user = "root";
    $password = "";
    $db = "namu_darbu_baze";
    $dsn = "mysql:host=localhost;dbname=$db";
    
    $pdo = new PDO($dsn,$user, $password);
    function insertPersons($db,$input)
    {
        $sql = "INSERT INTO users (username, password, email, Name ) VALUES (:username, :password, :email, :name)";
    
        $sth = $db->prepare($sql);
    
        $sth->bindParam(':username', $username);
    
        $sth->bindParam(':password', $password);
    
        $sth->bindParam(':email', $email);
    
        $sth->bindParam(':name', $name);
    
        $username = $input['user'];
        $password = $input['password'];
        $email = $input['email'];
        $name = $input['name'];
    
        $sth->execute();
        echo "Persons inserted!";
    }
    insertPersons($pdo,$input);
//kazkodel neikelia duomenu i http://localhost/phpmyadmin/db_structure.php?db=namu_darbu_baze
    
    header("Location: login.php");
   
       
        
       
?>


