<?php 

/* Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. */

  $alunni = [
    [
      'nome' => 'Sara',
      'cognome' => 'Alitico',
      'voti' => [10, 8, 10, 6, 5]
    ],

    [
      'nome' => 'Kevin',
      'cognome' => 'Katarri',
      'voti' => [6, 8, 9, 7, 10]
    ],

    [
      'nome' => 'Omar',
      'cognome' => 'Polito',
      'voti' => [6, 6, 9, 6, 8]
    ]
  ];

  /* var_dump([$alunni]); */

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 7 PHP</title>
</head>
<body>

  <h1>
    <?php
      for ($i = 0; $i < count($alunni); $i++){
        echo "Alunno/a: ";
        echo $alunni[$i]['nome'];
        echo $alunni[$i]['cognome']."<br>";

        $mediaVoti = round(array_sum($alunni[$i]['voti']) / count($alunni[$i]['voti']));
        echo $mediaVoti;
        echo "<hr>";
      }
    ?>
  </h1>

</body>
</html>