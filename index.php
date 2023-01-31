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

    $filteredHotels = $hotels

    if(isset($_GET['vote']) && $_GET['vote'] !== ''){
        
        $tempHotels = [];
        foreach($filteredHotels as $hotel){
            if($hotel['vote'] >= $_GET['vote']){
                $tempHotels [] = $hotel;
            }
        }
        $filteredHotels = $tempHotels
    }

    if(isset($_GET['parking']) && $_GET['parking'] !== ''){
        
        $tempHotels = [];
        foreach($filteredHotels as $hotel){
            if($hotel['parking'] == $_GET['parking']){
                $tempHotels [] = $hotel;
            }
        }
        $filteredHotels = $tempHotels
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:opsz,wght@6..96,700&family=Montserrat:wght@200;300;400&family=PT+Sans&family=Roboto:wght@600;800&family=Sofia+Sans+Condensed:wght@600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container-sm mt-4">
        
        <div class="bg-grey">
            <h1 class="border-start border-black text-white">HOTEL TABLE</h1>
        </div>

        <div>
            <div class="row">
                <div class="col-12">
                    <form action="./index.php" method="GET" class="row my-3 align-items-end">
                        <div class="col-md-4">
                            <label class="control-label">Vote</label>
                            <input type="number" class="form-control" name="vote" placeholder="Vote" value="<?php echo isset ($_GET['vote']) ? $_GET['vote'] : '' ?>">
                        </div>
                        <div class="col-md-4">
                            <label class="control-label">Parking</label>
                            <select name="parking" class="form-control" placeholder="Parking">
                                <option value="0" <?php (isset($_GET['parking']) && $_GET['parking'] == 0) ?>>Sì</option>
                                <option value="1" <?php (isset($_GET['parking']) && $_GET['parking'] == 1) ?>>No</option>
                            </select>
                        </div>
                        <div class="col-auto">
                                <button type="submit" class="btn btn-sm btn-primary"></button>
                                <button></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <table class="mt-4 w-100 table-hover">
            <thead>
                <th class="p-3 text-center style-text">NAME</th>
                <th class="p-3 text-center style-text">DESCRIPTION</th>
                <th class="p-3 text-center style-text">PARKING</th>
                <th class="p-3 text-center style-text">VOTE</th>
                <th class="p-3 text-center style-text">DISTANCE TO CENTER</th>
            </thead>
            <tbody class="">
                <?php foreach($filteredHotels as $hotel){ ?>
                    <tr class="bg-light-blue">
                        <td class="p-2 table-blue"><?php echo $hotel['name']; ?></td>
                        <td class="p-2 text-center"><?php echo $hotel['description']; ?></td>
                        <td class="text-center p-2"><?php echo $hotel['parking'] ? 'Si'
                                : 'No';?></td>
                        <td class="text-center p-2"><?php echo $hotel['vote']; ?></td>
                        <td class="text-center p-2"><?php echo $hotel['distance_to_center']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>