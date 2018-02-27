<?php
namespace src;


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
    // $student=new Students('mmm','lll','sss');
    // var_dump($student);
    // $student->save($student);
    