<?php 

/* Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta */
$freq = [];
$times = 15;
$number = rand(1,15);

for($i = 0; $i < $times; $i++){
  while(in_array($number, $freq))$number = rand(1,15);
  $freq[] = $number;
  echo($number)."<br>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 4 PHP</title>
</head>
<body>

</body>
</html>