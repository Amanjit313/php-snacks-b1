<?php 

/* Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” */

  $name = $_GET["name"];
  $email = $_GET["email"];
  $age = $_GET["age"];

  var_dump([$name, $email, $age]);

/*   $accessoGarantito = true;

  if(empty($_GET["name"])) || (empty($_GET["email"])) || (empty($_GET["age"])){
    $accessoGarantito = false;
  }

  if($accessoGarantito){
    $output = "Accesso Garantito!"
  } else{
    $output = "Accesso Negato!"
  } */

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 2 PHP</title>
</head>
<body>
  <h1>L'utente si chiama: <?php echo $name ?></h1>
  <h1>Email dell'utente: <?php echo $email ?></h1>
  <h1>L'età dell'utente: <?php echo $age ?></h1>
  <br>
  <h1><?php echo $output ?></h1>
</body>
</html>