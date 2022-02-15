<?php
    $array = [];
    echo "Numeri generati casualmente da 0 a 15";
    echo "<br>";
    for ($i=0; $i < 15 ; $i++) { 
        $random = rand(0, 15);
        if (!in_array($random, $array)) {
            echo $random;
            array_push($array, $random);
            echo " ";
        }else{
            $i--;
        }
    }
    var_dump($array)
?>