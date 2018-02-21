
<?php
class Post{
    const MAX_LENGTH = '500';
    private $title = null;
    private $content = "text";
    private $author = null;

    public static function getLength(){
        return self::MAX_LENGTH;
    }


    public function setTitle($title) {
        $this->title=$title;   
    }
    public function getTitle() {
        return $this->title;
    }


    public function setContent($content) {
        if( self::MAX_LENGTH<strlen($this->content)){
            echo "Max length is:". self::MAX_LENGTH; 
                    }
        $this->content=$content;  
    }
    public function getContent() {
        return $this->content;
    }

    public function setAuthor($author) {
        $this->author=$author;    
    }
    public function getAuthor() {
        return $this->author;
    }
    
}


// $post = new Post();
// echo $post->getLength();
// echo "<br>";

// $post->setTitle("textukas <br>");
// echo $post->getTitle();

// $post->setContent("ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss <br>");
// echo $post->getContent();
// echo $post->content;
//$post->setAuthor("ll");
// echo $post->getAuthor();


class Person 
{
    private $name = "text";
    private $id = null;
   
    public function setName($name) {
        $this->name=$name;  
    }
    public function getName() {
        return $this->name;
    }


    public function setId($id) {
        $this->id=$id;
    }
    public function getId() {
        return $this->id;
    } 
    
}

// $person = new Person();

// $person->setName("Jonas <br>");
// echo $person->getName();

// $person->setId("34 <br>");
// echo $person->getId();

$person = new Person();
$person->setName("John");
echo $person->getName();
echo "<br>";
$person->setId(10);
echo $person->getId();
echo "<br>";


$post = new Post();
$post->setTitle("My titile");
echo $post->getTitle();
echo "<br>";
$post->setContent("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s");
echo $post->getContent();
echo "<br>";





$post->setAuthor($person);
echo $post->getAuthor();
//var_dump($post->getAuthor());

