<!DOCTYPE html>  
<html>  
<body>  
<?php  
    echo "<h1>Hello, I'm PHP</h1>";
    echo '<h2>Another Header</h2>';

    $number = 2;
    $Number = 40;

    echo "This is a number $number<br/>";
    echo "This is a number $Number<br/>";
    echo 'This is a number $number';

    if($number == 2){
        echo "<h2>The variable is equal to 2</h2>";
    }else{
        echo "<h3>The variable is not equal to 2</h3>";
    }

    $fruits = array("apple","banana","mango");
    foreach($fruits as $value){
        echo "<div>$value</div>";
    }

    $fruits = array("apple"=>"red", "banana"=>"yellow","mango"=>"green");
    foreach($fruits as $key=>$value){
        echo "<div>$key is $value</div>";
    }

    for($i=1; $i<=10; $i++){
        echo "for loop $i<br/>";
    }

    $i=1;
    while($i<=10){
        echo "while loop $i<br/>";
        $i++;
    }

    $i=1;
    do{
        echo "do while loop $i<br/>";
        $i++;
    }while($i<=10);

    for($i=1; $i<=10; $i++){
        echo "for loop $i<br/>";
        if($i == 5){
            break;
        }
    }

    echo "=======================<br/>";

    for($i=1; $i<=10; $i++){
        if($i%2 == 1){
            continue;
        }
        echo "for loop $i<br/>";
    }

    function addNumbers($value1, $value2){
        return $value1 + $value2;
    }

    echo addNumbers(2, 5).'<br/>';

    function multiplyNumber($value1, $value2){
        $product = 0;
        for($i=1;$i<=$value2; $i++){
            $product = addNumbers($product, $value1);
        }
        return $product;
    }
    
    echo multiplyNumber(2,5).'<br/>';
    echo multiplyNumber(3,7).'<br/>';
    echo multiplyNumber(5,8).'<br/>';

    function displayNumber($number){
        if($number <= 5){
            echo "$number <br/>";
            displayNumber($number + 1);
        }
    }

    displayNumber(1);
    displayNumber(3);


?>  
</body>  
</html>  
