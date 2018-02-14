<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<form action="register.php" method ="POST">
<input type="text" name="register" placeholder = "Username" required>
<input type="password" name="data" id="" placeholder = "Password" required>
<input type="submit" value="ook" class = "submit">
</form>
<?php


function chechUser($userName, $password, $user){
        if($user['username'] == $userName   && $user['data'] ==$password  ){ //raso kad $user  Undefined variable, niekaip nesugalvojau kodel jis neapibreztas
            echo "true";
            
        }else {
            echo "false";
        }
}

// nepatinka mano masyvas,  kazko matyt nedarasiau


// $user = array(
//     'register' => "$_POST['register']",
//     'password' => "$_POST['data']";
// chechUser($_POST['register'], $_POST['data'], $user);
?>
</body>
</html>