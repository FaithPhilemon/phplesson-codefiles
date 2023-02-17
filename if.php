<?php 
    $time = 22;

    if($time < 12){
        echo "Good morning";
    }elseif($time > 12 && $time < 17){
        echo "Good day";
    }elseif($time > 17 && $time < 22){
        echo "Good evening";
    }else{
        echo "Good night";
    }
?>