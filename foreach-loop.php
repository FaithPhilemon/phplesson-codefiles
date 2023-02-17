<?php

    $numbers = [21, 7, 9, 2, 18, 21, 30];

    foreach($numbers as $number){
        echo $number."<br>";
    }

    
    foreach($numbers as $number){
        if($number % 2 == 0){
            echo "$number - even number <br>"; 
        }else{
            echo "$number - odd number <br>";
        }
    }
?>