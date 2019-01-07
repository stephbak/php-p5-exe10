<?php
$department = array(
  '02' => 'Aisne',
  '59' => 'Nord',
  '60'=> 'Oise',
  '62' => 'Pas-de-Calais',
  '80' => 'Somme',
);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
  <title>php partie5</title>
</head>
<body>
  <ul>
    <?php foreach($department as $key => $value){ ?>
      <li>Le département <?= $value ?> a le numéro <?= $key ?></li>
    <?php } ?>
  </ul>
</body>
</html>
