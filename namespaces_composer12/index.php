<?php
require "vendor/autoload.php";
use src\Marks;
use src\Students;
use src\Modules;

$marks=new Marks('mmm','ccc','275');

$modules=new Modules('rrr','fff');

 

$student=new Students('mmm','lll','sss');

 
//toliau nespejau
$host = "localhost";
$user = "root";
$password = "";
$db = "namu_darbu_baze";
$dsn = "mysql:host=$host;dbname=$db";
$pdo = new PDO($dsn, $user, $password);
$sql = "SELECT * FROM students";
//$sql2 = "SELECT * FROM modules";
$res = $pdo->query($sql);
//$res1 = $pdo->query($sql1);
$cats = $res->fetchAll(PDO::FETCH_ASSOC);
//$cats1 = $res1->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="POST">
 <input type="number" name="student_number" placeholder="number">
 <input type="text" name="surname"  placeholder="surname">
 <input type="text" name="forename" placeholder="forename">
 <input type="submit" value="Add">
 </form>
 <form action="index.php" method="POST">
        <select name="modules">
            <?php foreach($modules as $module_code): ?>
                <option value="<?php echo $array["module_code"]; ?>"</option>
            <?php endforeach; ?>
        </select>
        <select name="module" id="">
            <?php foreach($modules as $module_code ): ?>
                <option value="<?php echo $modules["module_code"]; ?>"</option>
            <?php endforeach; ?>
        </select>
        </form>
        <form action="index.php" method="POST">
        <select name="student" >
            <?php foreach($students as $students=>$array): ?>
                <option value="<?php echo $array["forename"]." ".$array["surname"]; ?></option>
            <?php endforeach; ?>
        </select>
        </form>
        <form action="index.php" method="POST">
        <select name="module" >
            <?php foreach($modules as $modules=>$array): ?>
                <option value="<?php echo $array["module_code"]; ?>"><?php echo $array["module_name"]; ?></option>
            <?php endforeach; ?>
        </select>
        </form>
        
 <!-- <form action="index.php"method="POST">
    //<?php $selected_category = 2; ?>
    <select name="cat">
    <option value="0">-----</option>
    <?php foreach($cats as $category): ?>
        <option value="<?php echo $category['id']; ?>"<?php if($category['id'] == $selected_category) echo "selected"; ?>><?php echo $category['name']; ?></option>
   <?php endforeach; ?>
    </select>
    </form> -->
</body>
</html>