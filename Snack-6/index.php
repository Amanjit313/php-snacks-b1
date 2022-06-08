<?php 

/* Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. */

$db = [
  'teachers' => [
      [
          'name' => 'Michele',
          'lastname' => 'Papagni'
      ],
      [
          'name' => 'Fabio',
          'lastname' => 'Forghieri'
      ]
  ],
  'pm' => [
      [
          'name' => 'Roberto',
          'lastname' => 'Marazzini'
      ],
      [
          'name' => 'Federico',
          'lastname' => 'Pellegrini'
      ]
  ]
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 6 PHP</title>

  <style>
    .teachers{
      width: 100%;
      height: 200px;
      background-color: grey;
    }
    .pm{
      width: 100%;
      height: 200px;
      background-color: green;
    }
  </style>

</head>
<body>

  <?php foreach($db as $ruolo => $info): ?>
    <div class=" <?php echo $ruolo ?> ">
      <ul>
        <?php foreach($info as $person): ?>
          <li><?php echo $ruolo . " : " . $person["name"] ." ". $person["lastname"]?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endforeach; ?>

</body>

</html>