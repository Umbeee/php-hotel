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


$arrayParcheggio = [
    'no',
    'no',
    'no',
    'no',
    'no'
];

for($i=0;$i<5;$i++){
    if($hotels[$i]["parking"] == 'true'){
        $arrayParcheggio[$i] = 'si';
    }
}

//var_dump ($hotels);
//var_dump($arrayParcheggio);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    span{
        margin:  10px;
    }
    table{
        border: 1px solid rgb(222,226,230);
    }
</style>
<body>

    <div class="container">
        <h1 class="text-center my-3">Tabella dei dati degli hotel</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">
                        #
                    </th>
                    <th scope="col">
                        1
                    </th>
                    <th scope="col">
                        2
                    </th>
                    <th scope="col">
                        3
                    </th>
                    <th scope="col">
                        4
                    </th>
                    <th scope="col">
                        5
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Nome:</th>
                    <?php 
                        for($i = 0 ; $i < 5 ; $i++)
                            {echo '<td>' .  $hotels[$i]["name"] . '</td>'; } 
                     ?> 
                </tr>

                <tr>
                    <th scope="row">descrizione:</th>
                    <?php
                        for($i = 0 ; $i < 5 ; $i++) 
                            {echo '<td>' .  $hotels[$i]["description"] . '</td>';}  
                    ?>
                </tr>

                <tr>
                    <th scope="row">parcheggio:</th>
                    <?php 
                        for($i = 0 ; $i < 5 ; $i++) 
                            {echo '<td>' . $arrayParcheggio[$i] . '</td>';} 
                     ?>   
                </tr>
                <tr>
                    <th scope="row">voto:</th>
                    <?php 
                        for($i = 0 ; $i < 5 ; $i++) 
                            {echo '<td>' .  $hotels[$i]["vote"] . '</td>';} 
                    ?> 
                </tr>
                <tr>
                    <th scope="row">distanza dal centro:</th>
                    <?php 
                        for($i = 0 ; $i < 5 ; $i++) 
                            {echo '<td>' .  $hotels[$i]["distance_to_center"] . ' km' . '</td>';} 
                    ?> 
                </tr>
            </tbody>
        </table>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>