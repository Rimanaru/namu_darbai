
<!doctype html>
<html lang="en">
  <head>
    <title>Studentai</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
  <?php $data = json_decode(file_get_contents("https://api.chucknorris.io/jokes/random")); 
   
  //var_dump($data);
  ?>
    <!-- <H2>chack norris:</H2>
    <table class="table table-striped table-hover"> 
    <tr>
        <th>Category</th>
        <th>Icon_url</th>
        <th>Id</th>
        <th>URL</th>
        <th>Value</th>
    </tr> -->
  <?php 
  foreach($data as $key=>$value):
    
     echo  $key."    " .$value. "<br>"; 
    
  endforeach;  ?>
 

  
 <?php 
 class Chack{
  
   public $category=null;
   public $icon_url=null;
   public $id=null;
   public $url=null;
   public $value=null;
 public function save(){
    $pdo = new PDO("mysql:host=localhost;dbname=namu_darbu_baze", "root","");
    $sql = "INSERT INTO chakc norris (category, icon_url,id,url,value  , ) VALUES (:category,:icon_url, id, url, value)";
    $sth = $pdo->prepare($sql);
    
    $sth->bindParam(':category', $this->category);
    $sth->bindParam(': icon_url', $this->icon_url);
    $sth->bindParam(': id', $this->id);
    $sth->bindParam(': url', $this->_url);
    $sth->bindParam(': value', $this->_value);
  
        $sth->execute();  
  }
 }
 

$chack= new Chack();
$chack->save($chack)
  ?>
</table>

  
<!-- CREATE TABLE `chack norris` 
(

 `category` VARCHAR(100) NOT NULL ,
 `icon_url` VARCHAR(255) NOT NULL ,
 `id` VARCHAR(255) NOT NULL ,
 `url` VARCHAR(255) NOT NULL ,
 `value` VARCHAR(255) NOT NULL ,
 PRIMARY KEY (`id`)
) ENGINE = InnoDB; -->
      