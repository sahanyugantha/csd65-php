<?php

    function test(){
        static $number = 0;

        echo "Number is ".$number."<br/>";

        $number++;
    }

    test();
    test();
    test();
?>