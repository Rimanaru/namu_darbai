<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php 
    $type = "cat";
    $name = "Tim";
    $age = 1;
    $weight = 3.6;

    if($type=="cat" && $name=="kkk "){
echo $name . " is a " . $type. "<br>";
    }else{
        echo $name . " is not a ". $type.  "<br>";
    }

    $price = 582;
    
if($price>500 && $price<600){
    echo "Price is big enough";
} else if($price> 600 && $price<700){
    echo "OMG" ;
}else{
   echo "price is ok";
}

$filter_value=0;
if($filter_value === false) {
    echo "get all values";
}
    // Parašykite sąlygą, kuri atspausdintų – “Price is big enough” jeigu kaina ($price) yra daugiau už 500 ir mažiau už 600.
    
    // Jeigu kaina daugiau už 600 tačiau mažesnė, nei 700 atspausdinti – OMG!
    
    // Kitais atvejais atspausdinti “Price is ok“.
    
     
    
    
    ?>
</body>
</html>