<?php
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
        $pdo = new PDO("mysql:host=localhost;dbname=namu_darbu_baze", "root","");
        $sql = "INSERT INTO marks (student_no, module_code, mark) VALUES (:student_no, :module_code,:mark)";
        $sth = $pdo->prepare($sql);
      
        $sth->bindParam(':student_no', $this->student_no);
        $sth->bindParam(':module_code', $this->module_code);
        $sth->bindParam(':mark', $this->mark);
        
      
        $sth->execute();  
    }
    }
    $marks=new Marks('qqq','ccc','kkk');
    var_dump($marks);
    $marks->save($marks);

class Modules {
    public $module_code=null;
    public $module_name=null;
    function __construct($module_code, $module_name){
        $this->module_code=$module_code;
        $this->module_name=$module_name;
    }
    public function save(){
        $pdo = new PDO("mysql:host=localhost;dbname=namu_darbu_baze", "root","");
        $sql = "INSERT INTO modules (module_code, module_name,) VALUES (:module_code,:module_name)";
        $sth = $pdo->prepare($sql);
      
        $sth->bindParam(':module_code', $this->module_code);
        $sth->bindParam(':module_name', $this->module_name);
      
        $sth->execute();   
    }

}

$modules=new Modules('rrr','fff');
var_dump($modules);
$modules->save($modules);

class Students {
public $student_no=null;
public $surname=null;
public $forename=null;

function __construct($student_no,$surname,$forename ){
   $this->student_no=$student_no;
   $this->surname=$surname;
   $this->forename=$forename;
}
public function save(){
    $pdo = new PDO("mysql:host=localhost;dbname=namu_darbu_baze", "root","");
    $sql = "INSERT INTO students (student_no, surname, forename) VALUES (:student_no, :surname, :forename)";
    $sth = $pdo->prepare($sql);
  
    $sth->bindParam(':student_no', $this->student_no);
    $sth->bindParam(':surname', $this->surname);
    $sth->bindParam(':forename', $this->forename);
    $sth->execute();      
}
}
$student=new Students('mmm','lll','sss');

$student->save($student);




?>