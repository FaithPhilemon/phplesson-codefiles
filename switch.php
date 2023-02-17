<?php 
    $city = "Dubai";

    switch ($city) {
        case 'New York':
            echo $city . " population is over 8 million" ;
            break;

        case 'Hong Kong':
            echo $city . " population is over 7 million" ;
            break;

        case 'Dubai':
            echo $city . " population is over 3 million" ;
            break;
        
        default:
        echo "Wrong option selected" ;
            break;
    }
?>