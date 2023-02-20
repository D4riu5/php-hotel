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