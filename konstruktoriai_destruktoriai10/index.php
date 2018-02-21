<?php
class ShoppingCart{
    private $items=array();
    private $date=null;

public function addItem(ShoppingCartItem $item) {
    $this->items[] =$item;


//array_push($this->items[], $item);

}

public function getItems(){
    return $this->items;
}

}
class ShoppingCartItem{
    public $id= null;
    public $price= null;
    public $quantity= null;
    public $name=null;

    
}


$cart = new ShoppingCart;


$item = new ShoppingCartItem;
$item->name = "Tarchunas";
$item->price = 1.5;
$item->quantity = 1;
$item->id = 1;


$cart->addItem($item);
var_dump($cart->getItems());




//2 uzduotis

class Drink
{
    protected $name=null;

    protected function setDrinkName($name){
        $this->name=$name;

    }
    public function getDrinkName(){
return $this->name;
    }
}

class Coffee extends Drink{
    public function setDrinkName($name){
        $this->name=$name;
    }
    function __construct($name){
        echo $name;
    }
    
      
}

$coffeedrink=new Coffee('coffee' );
echo "My new drink is:".$coffeedrink->getDrinkName();
$coffeedrink->setDrinkName("coffee");
$drink =new Drink();

