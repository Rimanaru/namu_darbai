
  <?php 
  $data = json_decode(file_get_contents("https://api.chucknorris.io/jokes/random")); 
   
  var_dump($data);

  echo $data->category;
  //cia pasiziurejau ar tikrai pasiekiu vertes, kurias turiu irasyti i db
echo $data->icon_url;
echo $data->id;
echo $data->url;
echo $data->value;
//  class Chack{
  
//    public $category=null;
//    public $icon_url=null;
//    public $id=null;
//    public $url=null;
//    public $value=null;

 function save(){
   //sita funkcija turi ikelti i duomenu baze, kai ja iskvieciu 
  $data = json_decode(file_get_contents("https://api.chucknorris.io/jokes/random")); //is cia duomenys , kuriuos reikia kelti
  $pdo = new PDO("mysql:host=localhost;dbname=namu_darbu_baze", "root",""); //prisijungiu prie duomenu bazes ir sukuriu nauja objekta
  $sql = "INSERT INTO chack norris (category, icon_url, id, url, value ) VALUES (:category,:icon_url, id, url, value)";// keliu i lentele, :category,:icon_url, id, url, value tiek pat kiek is masyve nariu
  $sth = $pdo->prepare($sql);
  
    $joke = [ //vienas is ikelimo butu
      'category'=>$data->category, 
      'icon_url' => $data->icon_url,
      'id' => $data->id,
      'url' => $data->url,
      'value' => $data->value 
    ];
  
$sth->execute($joke); //rasau kad kelti sita masyva

         
 }

 

save(); //issikvieciu funkcija, kad ikeltu. 


// $chack= new Chack();

// $chack->save();
