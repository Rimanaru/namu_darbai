<?php
$beautiful = array("Suomija", "Lenkija", "Vokietija", "Bulgarija", "Gruzija", "Baltarusija", "Rusija", "Kroatija");
foreach ($beautiful as $key => $country){
    
    echo "<pre>";
    print_r($key);
    echo(" ");
    print_r($country);
    
    echo "</pre>";
    
}

$shopping_cart = [
    [
        'type' => 'vegetables',
        'name' => 'potato',
        'quantity' => '10',
        'price' => '1.0'
    ],
    [
        'type' => 'vegetables',
        'name' => 'onion',
        'quantity' => '5',
        'price' => '0.5'
    ],
    [
        'type' => 'vegetables',
        'name' => 'cucumber',
        'quantity' => '2',
        'price' => '1.2'
    ],
     [
        'type' => 'fruits',
        'name' => 'banana',
        'quantity' => '2',
        'price' => '1.0'
     ],
     [
        'type' => 'fruits',
        'name' => 'apple',
        'quantity' => '3',
        'price' => '1.2'
     ]
];



    foreach ($shopping_cart as $key => $pirkinys){
        //   echo "<pre>";
        // print_r($key);
        // echo(" ");
       // print_r($pirkinys);
        
        //echo "</pre>";
        foreach($pirkinys as $key => $vaisius){
           
            if($vaisius !== "banana" && $vaisius !=="apple" ){
                continue;
        }
        
         echo "<pre>";
        // print_r($key);
        echo(" ");
        print_r($vaisius);
         echo "</pre>";
        
    }
    }
    foreach ($shopping_cart as $key => $pirkinys){
        //   echo "<pre>";
        // print_r($key);
        // echo(" ");
       // print_r($pirkinys);
        
        //echo "</pre>";
        foreach($pirkinys as $key => $vaisius){
           
            if($vaisius !== "potato" && $vaisius !=="onion" && $vaisius !== "cucumber"){
                continue;
        }
        
         echo "<pre>";
        // print_r($key);
        echo(" ");
        print_r($vaisius);
         echo "</pre>";
        
    }
    }
echo( $shopping_cart[3]['quantity']*$shopping_cart[3]['price']+$shopping_cart[4]['quantity']*$shopping_cart[4]['price']). "<br>";
echo( $shopping_cart[0]['quantity']*$shopping_cart[0]['price']+$shopping_cart[1]['quantity']*$shopping_cart[1]['price']+$shopping_cart[2]['quantity']*$shopping_cart[2]['price']). "<br>";

$countrys = array("Suomija", "Lenkija", "Vokietija", "Bulgarija", "Gruzija", "Baltarusija", "Rusija", "Kroatija",);
echo end($countrys);// paprastas variantas, bet negrazina jei tuscias;

//nespejau toliau
?>
