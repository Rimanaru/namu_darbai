<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="user.php" method ="POST">
<input type="text" name="username" placeholder = "Username">
<input type="password" name="data" id="" placeholder = "Password" required>
<input type="submit" value="ok" class = "submit">

</form>
<?php if(isset($_SESSION['username'])){?>
        <p style="color:red; font-size:36px">
        <?php 
        echo "Sveiki sugrįžę į puslapį- ". $_SESSION['username'];
           
            unset($_SESSION['username']);
        }
            else if ($_SESSION['username'] = "") { //sita vieta neveikia, nesupratau kodel
                echo "  ";
            }
         ?>
         </p>
   
         <?php 
 $user = array(
    'username' => "admin",
    'password' => "admin123"
);
echo $user['username'], $user['password'];

         function chechUser($userName, $password){
if($user['username'] == $userName   && $user['password'] ==$password  ){ //raso kad $user  Undefined variable, niekaip nesugalvojau kodel jis neapibreztas
    echo "true";
    
}else {
    echo "false";
}
 }
    chechUser("admin", "admin123")  ;   

         ?>


</body>
</html>