<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "namu_darbu_baze";
$dsn = "mysql:host=$host;dbname=$db";
$pdo = new PDO($dsn, $user, $password);
$sql = "
SELECT c.name as author, 
sc.name as posts 
FROM author c
LEFT JOIN posts sc 
ON sc.parent_id = c.id";
$authors= $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

// $tmp_cat = [];
// foreach($authors as $author) {
//     if(empty($$authors['posts'])){
//         continue;
//     }
//     $tmp_cat[$author['author']][] = $author['posts'];
//}

$tmp_cat = [];
foreach($authors as $author) {
    $tmp_cat[$author['author']][] = $author['posts'];
}


echo '<pre>';
print_r($tmp_cat);
echo '<pre>';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="">
    <input type="text" name="keyword" placeholder="search for..." value="<?php if (isset($_GET['keyword'])) echo $_GET['keyword']; ?>" >
    <input type="submit" value="search">
</form>
<br>
<form action="" method="post">
<select name="author" id="">
    <option value="1">Marija</option>
    <option value="2">Jhon</option>
    <option value="3">Mark</option>
</select> <br>
Enter category name:
<input type="text" name="posts" placeholder ='rusis' required>
<input type="text" title="posts" placeholder ='pavadinimas'  required>
<input type="text" content="posts" placeholder ='apie ka' required>
 
<input type="submit" value="Save">
</form>
<br>
<?php
$posts = null;
if(isset($_POST['posts'])){
    $parent_id = $_POST['author'];
    $posts_name = $_POST['posts'];
    $posts_title = $_POST['posts'];
    $posts_content = $_POST['posts'];
        
    storeCategories(['name' => $posts_name, 'title'=> $posts_title, 'content'=>$posts_content,  'parent_id' => $parent_id]);
    echo "added new posts for author with ID ".$parent_id."<br>";
}
$keyword = null;
$users = array();
$orderby = null;
$order = "ASC";
if(isset($_GET['order']) && $_GET['order'] == 1){
    $order = "DESC";
}
if(isset($_GET['keyword']) && !empty($_GET['keyword'])){
    $keyword = $_GET['keyword'];
}
if(isset($_GET['orderby'])){
    $orderby = $_GET['orderby'];
}
$users = searchUser($keyword, $orderby, $order);
?>
<table>
<tr>
    <th><a href="index.php?orderby=name&order=<?php if(isset($_GET['order'])) echo !$_GET['order'] ?>">Name</a></th>
    <th><a href="index.php?orderby=surname&order=<?php if(isset($_GET['order'])) echo !$_GET['order'] ?>">Surname</a></th>
    <th><a href="index.php?orderby=email&order=<?php if(isset($_GET['order'])) echo !$_GET['order'] ?>">Email</a></th>
</tr>
<?php if(!empty($users)): ?>
    <?php foreach($users as $user): ?>
    <tr>
        <td><?php echo $user['name']; ?></td>
        <td><?php echo $user['surname']; ?></td>
        <td><?php echo $user['email']; ?></td>
    </tr>
    <?php endforeach; ?>
<?php endif; ?>
</table>
    
</body>
</html>
<?php
function getDb(){
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "namu_darbu_baze";
    $dsn = "mysql:host=$host;dbname=$db";
    return new PDO($dsn, $user, $password);
}
function searchUser(String $str = null, String $orderby = null, String $order = 'ASC') {
    $sql = "SELECT * FROM author";
    $param = null;
    if(!is_null($str)){
        $sql = "SELECT * FROM author WHERE username LIKE :keyword";
        $param = ['keyword' => "%".$str."%"];
    }
    if(!is_null($orderby)){
        $sql = "SELECT * FROM author order by $orderby $order";
    }
    echo $sql;
    var_dump($str);
    $sth = getDb()->prepare($sql);
 
    $sth->execute($param);
   
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    $count = $sth->rowCount();
    if($count > 0){
        return $result;
    } 
    else {
        return false;
    }
}
function storeCategories($data){
    $sql = "INSERT INTO posts (name,title, content, parent_id) VALUES (:name,:title, :content,  :parent_id)";    
    $sth = getDb()->prepare($sql);
    $sth->execute([
        "name" => $data['name'],
        "title"=>$data['title'],
        "content"=>$data['content'],
        "parent_id" => $data['parent_id']
    ]);
    return $sth->rowCount();
}