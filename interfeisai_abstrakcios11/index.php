<?php


   $host = "localhost";
   $user = "root";
   $password = "";
   $db = "namu_darbu_baze";
   $dsn = "mysql:host=$host;dbname=$db";
   $pdo = new PDO($dsn, $user, $password);
   $sql = " SELECT * FROM `modules`";
   $module= $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($module);
     echo '<pre>';
     print_r($module);
     echo '<pre>';

     $sql = " SELECT * FROM `students`";
     $student= $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
      //var_dump($module);
       echo '<pre>';
       print_r($student);
       echo '<pre>';

       $sql = " SELECT * FROM `marks`";
       $mark= $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($module);
         echo '<pre>';
         print_r($mark);
         echo '<pre>';
   // pagalvojau kad sita reikia atsisiusti kad ten galeciau deti naujus irasus, kuriuos sukursiu
   // su objektais(new students irtt, bet nezinau kaip sita atsiusta array ikist i mano classes,
   // turbut i class Data paveldeti ir papildyt )
    class Data{
        function getModule(){
  }
}
class Students extends Data{
public $student_no=null;
public $surname=null;
public $forename=null;


function __construct($student_no,$surname,$forename ){
   $this->student_no=$student_no;
   $this->surname=$surname;
   $this->forename=$forename;
}

public function save(){
    $sql = "INSERT INTO students (student_no, surname, forename) VALUES (:student_no, :surname, :forename)";
    $sth = $pdo->prepare($sql);
    //$sth->execute($kazka ka sukursiu)

    //sito pagalvojau reikia kad nusiusti i duomenu baze, bet cia turbut gausis kaskart 
    //vis prisijungti prie db, tai turbut reikia ji deti i class Data
}

}
$student=new Students('mmm','lll','sss');
echo $student->module;

class Modules extends Data{
    public $Module_code=null;
    public $Module_name=null;
    function __construct($Module_code,$Module_name ){
        $this->Module_code=$Module_code;
        $this->Module_name=$Module_name;
    }
    public function save(){
        
    }

}

$module=new Modules('rrr','fff','ddd');

class Marks{
public $student_no=null;
public $module_code=null;
public $mark=null;
function __construct($student_no,$module_code,$mark ){
    $this->student_no=$student_no;
    $this->module_code=$module_code;
    $this->mark=$mark;
}
public function save(){
    
}
}

$module=new Marks('qqq','ccc','kkk');

?>