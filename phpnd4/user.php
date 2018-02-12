<?php
session_start();

if(isset($_POST['data'])&& isset($_POST["username"])){
    echo " password ".$_POST['data'];
    echo " Username ".$_POST['username'];
    
    }

    $data = $_POST['username'];
    $_SESSION['username'] = $data;

    header("Location: index.php");
?>