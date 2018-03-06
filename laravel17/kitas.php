<?php

class Database{
    private $host = "localhost";
    private $db_name = "namu_darbu_baze";
    private $username = "root";
    private $password = "";
    public $conn;
    public  $str = null; // kad pradzioje neirasyta jokia raide
    public $keyword = null;
    public function getConnection(){

 //nuo cia
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getAuthor();
        }
 
        return $this->conn;
        //iki cia nesuprantu
    }
}

if(isset($_POST['keyword'])){ // kai kazka irasau

    $keyword= $_POST['keyword']; //atsiranda kintamasis
    $database = new Database(); // susikuria naujas objektas, kuris jungiasi prie duomenu bazes , bet as nesupratau to try
    $db = $database->getConnection(); //nesupratau
    

    $sql = "SELECT * FROM comments WHERE comment LIKE :keyword"; //uzklausa
    $sth = getDb()->prepare($sql); // nesupratau
    $sth->execute(['keyword' => "%".$str."%"]); // ieskoti pagal kelias raides
    $data = $sth->fetchAll(PDO::FETCH_OBJ); // turi grazinti rezultata, kur butu irasytos tos kelios raides

    

    //if($sth->rowCount()>0)
    //$sth->debugDumpParams();
    
    
    // required headers
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    echo json_encode($data);
}