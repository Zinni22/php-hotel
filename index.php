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
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- MIO CSS -->
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

<div class="container d-flex justify-content-between p-5">

    <?php foreach ($hotels as $hotel) {
    ?>

        <div class="hotel-card mb-5 p-4">

            <h3>
                <?php echo $hotel['name']; ?>
            </h3>

            <p>
                <strong>Descrizione:</strong>
                <?php echo $hotel['description']; ?>
            </p>

            <div>
                <p>
                    <strong>Parcheggio:</strong>
                    <?php echo ($hotel['parking'] ? 'Incluso' : 'Non incluso'); ?>
                </p>
                
                <p>
                    <strong>Voto:</strong>
                    <?php echo $hotel['vote']; ?>/5 ★  
                </p>
                
                <p>
                    <strong>
                        Distanza dal centro:
                    </strong>
                    <?php echo $hotel['distance_to_center']; ?> km 
                </p>
            </div>

        </div>

    <?php
    }
    ?>

</div>

</body>
</html>