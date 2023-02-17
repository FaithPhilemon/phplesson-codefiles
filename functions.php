<?php 
    
    function fuel_consumption($distance, $fuel_consumed){
        return $distance/$fuel_consumed;
    }


    $kpl = fuel_consumption(400, 45);
    echo "Your car's fuel consumption ". round($kpl, 1) ." kilometers per liter";
?>