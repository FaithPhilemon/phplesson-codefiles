<?php
    // 1. simple (indexed array)
    // $car = array("Honda", "Accord", 2023, 1467, 2.4);

    $car = ["Honda", "Accord", 2023, 1467, 2.4];

    
    
    
    
    
    // 2. associative array
    $car2 = [
        "brand"   => "KIA",
        "model"   => "Rio", 
        "year"    => 2022, 
        "milage"  => 12467, 
        "capacity"=> 2.4
    ];


    
    
    
    
    // 3. Multi-dimensional array
    $cars = [
        "car1" => array(
            "brand"   => "KIA",
            "model"   => "Rio", 
            "year"    => 2022, 
            "milage"  => 12467, 
            "capacity"=> 2.4
        ),

        "car2" => array(
            "brand"   => "Rolls-Royce",
            "model"   => "Phantom", 
            "year"    => 2023, 
            "milage"  => 120, 
            "capacity"=> 3.4
        )
    ];

    // echo $cars["car2"]["brand"]. " ". $cars["car2"]["model"];


    /* Assignment to practice arrays
     1. Create an indexed array called user with the following information:
        - First Name
        - Last Name
        - Username
        - Email
        - Password
     2. Create an associative array of (1) above


     3. Create a multi-dimensional array for 5 users.
     */


?>