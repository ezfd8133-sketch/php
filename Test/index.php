<?php

function bmi ($m, $h){
    $bmi = $m/($h*$h);
    return $bmi;
}

echo bmi ( 70, 1.8);
$result = bmi (70, 1.8);
echo $result;
$arr=[$result, 1,2,3];

function numrimax($x,$y) {
        if ($x<$y){
            return $y;
        } else {
            return $x;
        }
    }

    $age=5;

    if($age<18){
        echo 'MINOOOOOOOOORRRRRRR';
    }else if ($age==18){
        echo 'Your finally legal';
    }else{
        echo 'Unc status';
    }


    $multi_arr=[[1,2,3],["A","B","C"]];
    echo count($multi_arr[1])."<br>";

    for($i=0;$i<count($multi_arr);$i++){
        for($j=0;$j<count($multi_arr[$i]);$j++){
            echo "<ul>";
            echo "<li>" .$multi_arr[$i][$j]."</li>";
            echo "</ul>";
        }
    }
    foreach($multi_arr[0] as $numra){
        echo "<br>".$numra;
    }



?>