<html>

<head>
  <title>Act4</title>
</head>

<body>
  <?php

  $num = rand(1, 100);
  echo "El valor sorteado es $num <br>";
  if ($num <= 50) {
    echo "$num es MENOR o igual a 50";
  } else {
    echo "$num es MAYOR a 50";
  }
  ?>
</body>

</html>