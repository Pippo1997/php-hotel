<?php

    include 'hotel.php';

    ///////// foreach per visuakzzare tutto l'array

    // echo "<pre>";
    //     foreach($hotels as $key => $item){
    //         echo $key ."</br>";
    //         foreach($item as $key_two => $value){
    //             echo $key_two ." => " .$value ."</br>";
    //         }
    //     }
    // echo "</pre>";

    ////////// Form

    $filtredHotels = $hotels;

    if(isset($_GET['vote']) && $_GET['vote'] !== ''){

        $tempHotels = [];
        foreach($hotels as $hotel){
            if($hotel['vote'] >= $_GET['vote']){
                $tempHotels [] = $hotel;
            }
        }

        $filtredHotels = $tempHotels;
    }

    if(isset($_GET['parking']) && $_GET['parking'] !== ''){

        $tempHotels = [];
        foreach($filtredHotels as $hotel){
            if($hotel['parking'] == $_GET['parking']){
                $tempHotels [] = $hotel;
            }
        }

        $filtredHotels = $tempHotels;
    }
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
        <h1 class="text-center">HOTEL'S</h1>
        <div class="row ">
            <div class="col-12 d-flex justify-content-center mt-2">
                <form action="./index.php" method="GET" class="row my-3">
                    <div class="col-sm-4">
                        <input type="number" class="form-control" name="vote" placeholder="vote" <?php echo isset($_GET['vote']) ? $_GET['vote'] : '' ?>>
                    </div>
                    <div class="col-sm-4">
                        <select class="form-control" name="parking">
                            <option value="">Parking</option>
                            <option value="0" <?php echo (isset($_GET['parking']) && $_GET['parking'] == 0) ? 'selected' : '' ?>>NO</option>
                            <option value="1" <?php echo (isset($_GET['parking']) && $_GET['parking'] == 1) ? 'selected' : '' ?>>YES</option>
                        </select>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-sm btn-primary" type="submit">Filter</button>
                        <button class="btn btn-sm btn-secondary" type="reset">Reset</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-2">
            <table class="mt-3 text-center">
                <thead>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Parking</th>
                    <th>Vote</th>
                    <th>Distance to center</th>
                </thead>
                <tbody>
                    <!-- faccio il ciclo foreach -->
                    <?php foreach($filtredHotels as $value){ ?>
                        <tr>
                            <!-- richiamo con echo ogni valore che voglio stampare -->
                            <td><?php echo $value['name']; ?></td>
                            <td><?php echo $value['description']; ?></td>
                            <!-- faccio un if per stampare si o no su un valore booleano -->
                            <td>
                                <?php if($value['parking']){
                                    echo 'Yes';
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
        </div>
    </body>
</html>