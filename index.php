<?php
$ten = 0;
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>ex1</title>
  </head>
  <body>
    <p>
<?php
// definition de la boucle avec la fonction while, on reprend la variable definie au dessus du TYPE, on l'echo et on l'incrémente.
while ($ten < 10) {
  echo $ten;
  $ten++;
}
 ?>
 </p>
  </body>
</html>
