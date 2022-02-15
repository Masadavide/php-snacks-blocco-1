<?php
    $alunni = [
        [
            "nome" => "Luca",
            "cognome" => "Rossi",
            "voti" => [
                "matematica" => "6",
                "italiano" => "5",
                "inglese" => "8",
                "tecnologia" => "6"
            ],
            
        ],
        [
            "nome" => "Mario",
            "cognome" => "Bianchi",
            "voti" => [
                "matematica" => "10",
                "italiano" => "8",
                "inglese" => "9",
                "tecnologia" => "9"
            ],
            
        ],
        [
            "nome" => "Simone",
            "cognome" => "Verdi",
            "voti" => [
                "matematica" => "4",
                "italiano" => "3",
                "inglese" => "2",
                "tecnologia" => "5"
            ],
        ],
    ];
    for ($i = 0; $i < count($alunni); $i++) {
        $media = array_sum($alunni[$i]["voti"])/count($alunni[$i]["voti"]);
        echo $alunni[$i]['nome'].' '.$alunni[$i]['cognome'].' -  media: '.$media.'<br>';;
    }
    
?>