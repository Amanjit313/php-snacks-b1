<?php 

/* Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. */

  $alunnoUno = (
    [
      $nome = "Sara",
      $cognome = "Alitico",
      $voti = array(10, 8, 10, 6, 5),
      $mediaVoti = array_sum($voti) / count($voti)
      ]
    );

  $alunnoDue = (
    [
      $nome = "Kevin",
      $cognome = "Katarri",
      $voti = array(6, 8, 9, 7, 10),
      $mediaVoti = array_sum($voti) / count($voti)
  ]
  );

  $alunnoTre = (
    [
      $nome = "Omar",
      $cognome = "Polito",
      $voti = array(6, 6, 9, 6, 8),
      $mediaVoti = array_sum($voti) / count($voti)
  ]
  );

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

  <h1>Nome alunno/a = <?php echo $alunnoUno[0]?> </h1>
  <h1>Cognome alunno/a = <?php echo $alunnoUno[1]?> </h1>
  <h1>Media dei voti = <?php echo $alunnoUno[3]?> </h1>

  <br>

  <h1>Nome alunno/a = <?php echo $alunnoDue[0]?> </h1>
  <h1>Cognome alunno/a = <?php echo $alunnoDue[1]?> </h1>
  <h1>Media dei voti = <?php echo $alunnoDue[3]?> </h1>

  <br>

  <h1>Nome alunno/a = <?php echo $alunnoTre[0]?> </h1>
  <h1>Cognome alunno/a = <?php echo $alunnoTre[1]?> </h1>
  <h1>Media dei voti = <?php echo $alunnoTre[3]?> </h1>

</body>
</html>