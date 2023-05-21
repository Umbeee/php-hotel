<?php

 $hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

var_dump ($hotels);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    span{
        margin:  10px;
    }
</style>
<body>

    <div>
        <p>Nome:</p>
        <?php for($i = 0 ; $i < 5 ; $i++) {
        echo '<span>' .  $hotels[$i]["name"] . '</span>';
    }  ?>    
    </div>

    <div>
    <p>descrizione:</p>
        <?php for($i = 0 ; $i < 5 ; $i++) {
        echo '<span>' .  $hotels[$i]["description"] . '</span>';
    }  ?>    
    </div>

    <div>
    <p>parcheggio?</p>
        <?php for($i = 0 ; $i < 5 ; $i++) {
        echo '<span>' .  $hotels[$i]["parking"] . '</span>';
    }  ?>    
    </div>


    <div>
    <p>voto:</p>
        <?php for($i = 0 ; $i < 5 ; $i++) {
        echo '<span>' .  $hotels[$i]["vote"] . '</span>';
    }  ?>    
    </div>


    <div>
    <p>distanza dal centro:</p>
        <?php for($i = 0 ; $i < 5 ; $i++) {
        echo '<span>' .  $hotels[$i]["distance_to_center"] . '</span>';
    }  ?>    
    </div>


</body>
</html>