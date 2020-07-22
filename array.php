<?php

    //Declare an Array using array method.
    $cars = array("AUDI", "BMW", "TOYOTA");
    //Declare an Array using brackets.
    $laptops = ["HP", "DELL", "TOSHIBA", "LENOVO"];
    $laptops[4] = "Samsung";
    
    //Determine the size/length of the array.
    $size = count($laptops);
   // $size = sizeof($laptops);

    echo "Size of array ".$size."<br/>";

    //Fixed array.

    $phones = new SplFixedArray(3);

    $phones[0] = "Samsung";
    $phones[1] = "Huawei";
    $phones[2] = "Oppo";

    //Programatically change the fixed array size.
    $phones->setSize(5);

    $phones[3] = "Nokia";

    //var_dump($phones);


    //****~ ASSOCIATIVE ARRAY ~****//

    $person1 = array("name"=>"Shakeel", "gender"=>"Male", "age"=>20, "address"=>"Colombo");
    $person2 = array("name"=>"Oshada", "gender"=>"Male", "age"=>20, "address"=>"Colombo");
    echo "Name is ".$person2["name"]."<br/>";
    echo "Age is ".$person1["age"]."<br/>";

?>