<?php require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();
    echo $faker->name;
      // 'Lucy Cechtelar';
    echo $faker->text;
      // Dolores sit sint laboriosam dolorem culpa et autem. Beatae nam sunt fugit
      // et sit et mollitia sed.
      for ($i=0; $i < 1000; $i++) {
        //echo $faker->name, "\n";

        $pdo = new PDO("mysql:host=localhost;dbname=namu_darbu_baze", "root","");
    $sql = "INSERT INTO comments(author, comment ) VALUES (:author,:comment)";
    $sth = $pdo->prepare($sql);
    $data=[
      
            "author" => $faker->name,
            "comment" => $faker->text,
       
    ];
   $sth->execute($data);
    //$sth->bindParam(':author', $faker->name);
   // $sth->bindParam(':comment', $faker->text);
    //$sth->bindParam(': created_at', $faker->Date());
    
  
// $sth->execute();
      }
      $sql = "SELECT * FROM comments";
$comments= $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>';
print_r($comments);
echo '<pre>';


