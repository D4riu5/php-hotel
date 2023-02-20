<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP hotels</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
</head>
<body class="bg-dark text-white">
    
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

    <div class="container">
    <h1 class="my-3">Hotel List</h1>
    <form method="get" class="d-flex flex-column my-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="parking" id="parking" <?php if (isset($_GET['parking']) && $_GET['parking'] == 'on') echo 'checked'; ?>>
            <label class="form-check-label" for="parking">
                Only show hotels with parking
            </label>
        </div>
        <div class="d-flex align-items-center my-2">
            <label class="me-2" for="vote">Filter by vote:</label>
            <select class="form-control w-25" id="vote" name="vote">
                <option value="all" <?php if (!isset($_GET['vote']) || $_GET['vote'] == 'all') echo 'selected'; ?>>All</option>
                <option value="1" <?php if (isset($_GET['vote']) && $_GET['vote'] == '1') echo 'selected'; ?>>1</option>
                <option value="2" <?php if (isset($_GET['vote']) && $_GET['vote'] == '2') echo 'selected'; ?>>2</option>
                <option value="3" <?php if (isset($_GET['vote']) && $_GET['vote'] == '3') echo 'selected'; ?>>3</option>
                <option value="4" <?php if (isset($_GET['vote']) && $_GET['vote'] == '4') echo 'selected'; ?>>4</option>
                <option value="5" <?php if (isset($_GET['vote']) && $_GET['vote'] == '5') echo 'selected'; ?>>5</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary my-2 w-25">Filter</button>
    </form>
    <table class="table text-white">
        <thead>
            <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Parking</th>
            <th>Vote</th>
            <th>Distance from Center (km)</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($hotels as $hotel) {
                if (isset($_GET['parking']) && !$hotel['parking']) {
                    continue;
                }
                if (isset($_GET['vote']) && $_GET['vote'] != 'all' && $hotel['vote'] != $_GET['vote']) {
                    continue;
                }
                    echo '<tr>';
                    echo '<td>' . $hotel['name'] . '</td>';
                    echo '<td>' . $hotel['description'] . '</td>';
                    echo '<td>' . ($hotel['parking'] ? 'Yes' : 'No') . '</td>';
                    echo '<td>' . $hotel['vote'] . '</td>';
                    echo '<td>' . $hotel['distance_to_center'] . '</td>';
                    echo '</tr>';
                    }
            ?>
        </tbody>
    </table>
    </div>



</body>
</html>