<?php
    function bmical($weight, $height){
        $bmi = $weight/($height*$height);
        return $bmi;
    }

    function display(){
       $res = bmical(60.5, 1.7);

       echo "Your BMI is ".$res;
    }

    display();
?>