<?php 

/* Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema. */

$partite = [
  [
    'casa' => 'Verona',
    'ospiti' => 'Vicenza',
    'casaPunti' => '89',
    'ospitiPunti' => '78'
  ],
  [
    'casa' => 'Roma',
    'ospiti' => 'Lazio',
    'casaPunti' => '102',
    'ospitiPunti' => '100'
  ],
  [
    'casa' => 'Palermo',
    'ospiti' => 'Messina',
    'casaPunti' => '79',
    'ospitiPunti' => '80'
  ],
  [
    'casa' => 'Bari',
    'ospiti' => 'Catania',
    'casaPunti' => '120',
    'ospitiPunti' => '60'
  ]
  ];

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 1 PHP</title>
</head>
<body>

  <?php 
    for($i = 0; $i < count($partite); $i++){
      echo "<h1>Partita</h1>";
      echo "<h3>Squadra di casa</h3>" , $partite[$i]['casa'] ." ". $partite[$i]['casaPunti']." punti<br>";
      echo "<h3>Squadra ospite</h3>" , $partite[$i]['ospiti'] ." ". $partite[$i]['ospitiPunti']." punti<br>"."<br>";
    }
  ?>

</body>

</html>