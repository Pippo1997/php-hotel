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

    echo "<pre>";
        foreach($hotels as $key => $item){
            echo $key ."</br>";
            foreach($item as $key_two => $value){
                echo $key_two ." => " .$value ."</br>";
            }
        }
    echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>PHP Hotel</title>
</head>
    <body>
        <table class="mt-3">
            <thead>
                <th>Name</th>
                <th>Description</th>
                <th>Parking</th>
                <th>Vote</th>
                <th>Distance to center</th>
            </thead>
            <tbody>
                <!-- faccio il ciclo foreach -->
                <?php foreach($hotels as $value){ ?>
                    <tr>
                        <!-- richiamo con echo ogni valore che voglio stampare -->
                        <td><?php echo $value['name']; ?></td>
                        <td><?php echo $value['description']; ?></td>
                        <!-- faccio un if per stampare si o no su un valore booleano -->
                        <td>
                            <?php if($value['parking']){
                                echo 'Sì';
                            } else{
                                echo 'No';
                            }; ?>
                        </td>
                        <td><?php echo $value['vote']; ?></td>
                        <td><?php echo $value['distance_to_center']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>