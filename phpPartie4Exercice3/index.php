<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice 3</title>
</head>
<body>
  <?php
  $little_string = 'Bonjour ! ';
  $second_little_string = 'Comment ça va ?';
  function concatString($text1, $text2) {
    return $text1 . ' ' . $text2;
  }
  echo concatString($little_string, $second_little_string);
  ?>
</body>
</html>
