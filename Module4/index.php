<?php
    function maximum($x,$y) {
        if ($x<$y){
            return $y;
        } else {
            return $x;
        }
    }
    $greatest = maximum(-50, 30);
    echo "<br><h1> The maximum number is : $greatest </h1><br>";

    function odd_even($nr){
        if($nr2==0){
            echo "Even";
        } else {
            echo "Odd";
        }
    }
    for ($i=100;$i<105;$i++){
        echo "$i is: ";
        odd_even($i);
        echo "<br>";
    }

    $fruits =["Banana", "Apple", "Mango","Orange", "Pear"];
    // foreach($fruits as fruit){
    //     echo "$fruit <br>";
    // }

    for ($i=0;$i< count($fruit))


?>