<?php 

/* Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” */

  $name = $_GET["name"];
  $email = $_GET["email"];
  $age = $_GET["age"];

  $accessoGarantito = "Accesso Garantito!";

  if(empty($_GET['name']) || empty($_GET['email']) || empty($_GET['age'])){
    $accessoGarantito = "Accesso Negato!";
    $errore = "Completa tutti i campi!";
  }elseif(strlen($_GET['name']) < 3){
    $accessoGarantito = "Accesso Negato!";
    $errore = "Inserisci 3 o più parole nel nome!";
  }elseif(!strpos($_GET['email'], '@') || !strpos($_GET['email'], '.')){
    $accessoGarantito = "Accesso Negato!";
    $errore = "L'email deve contenere almeno una @ e un . !";
  }elseif(!is_numeric($_GET['age'])){
    $accessoGarantito = "Accesso Negato!";
    $errore = "L'età deve essere inserita tramite un numero!";
  }

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
  <h1><?php echo $accessoGarantito ?></h1>
  <h2><?php echo $errore ?></h2>
</body>
</html>