<?php

namespace src;
use PDO;
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
    //$marks=new Marks('mmm','ccc','275');
    //var_dump($marks);
    //$marks->save($marks);