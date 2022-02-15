<?php
    $array = [
        [
            "casa" => "Olimpia Milano",
            "ospite" => "Cantù",
            "punticasa" => "55",
            "puntiospite" => "60",
        ],
        [
            "casa" => "Virtus Bologna",
            "ospite" => "Trento",
            "punticasa" => "73",
            "puntiospite" => "79",
        ],
        [
            "casa" => "Varese",
            "ospite" => "Dinamo Sassari",
            "punticasa" => "89",
            "puntiospite" => "78",
        ],
    ];

    for ($i = 0; $i < count($array);$i++){
        echo $array[$i]["casa"].' - '.$array[$i]["ospite"].' | '.$array[$i]["punticasa"].'-'.$array[$i]["puntiospite"];
        echo "</br>";
    }
?>


