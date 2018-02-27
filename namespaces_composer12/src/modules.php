<?php
namespace src;
use PDO;


class Modules {

    
    public $module_code=null;
    public $module_name=null;
    function __construct($module_code, $module_name){
        $this->module_code=$module_code;
        $this->module_name=$module_name;
    }
    public function save(){
        //return "Cia tiesiog suo!";
        $pdo = new PDO("mysql:host=localhost;dbname=namu_darbu_baze", "root","");
        $sql = "INSERT INTO modules (module_code, module_name,) VALUES (:module_code,:module_name)";
      $sth = $pdo->prepare($sql);
      
         $sth->bindParam(':module_code', $this->module_code);
         $sth->bindParam(':module_name', $this->module_name);
      
        $sth->execute();   
     }

}

// $modules=new Modules('rrr','fff');
//  var_dump($modules);
//echo $modules->save($modules);