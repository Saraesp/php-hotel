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
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:opsz,wght@6..96,700&family=Montserrat:wght@200;300;400&family=PT+Sans&family=Roboto:wght@400;500&family=Sofia+Sans+Condensed:wght@600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div>
        <div>
            <h1>HOTEL TABLE</h1>
        </div>
        <table class="mt-3">
            <thead>
                <th>NAME</th>
                <th>DESCRIPTION</th>
                <th>PARKING</th>
                <th>VOTE</th>
                <th>DISTANCE TO CENTER</th>
            </thead>
            <tbody>
                <?php foreach($hotels as $hotel){ ?>
                    <tr>
                        <td><?php echo $hotel['name']; ?></td>
                        <td><?php echo $hotel['description']; ?></td>
                        <td><?php if($hotel['parking']){
                                echo 'Sì';
                            }else{
                                echo 'No';
                            };?></td>
                        <td><?php echo $hotel['vote']; ?></td>
                        <td><?php echo $hotel['distance_to_center']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>