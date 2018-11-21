<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Exercice 8</title>
</head>
<body>
  <?php
  $number = 47;
  $number2 = 52;
  $number3 = 18;
  function Numbers($number, $number2, $number3){
    return $number + $number2 + $number3;
  }
  echo Numbers($number, $number2, $number3);
  ?>
</body>
</html>
