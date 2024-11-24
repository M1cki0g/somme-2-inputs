<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <form action="somme.php" method="post">
    <label for="num1">Numéro 1:</label>
    <input type="number" name="num1" required /><br /><br />
    <label for="num2">Numéro 2:</label>
    <input type="number" name="num2" required /><br /><br />
    <input type="submit" name="submit" value="Calculer la somme" />
  </form>

  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['submit'])) {
      $num1 = $_POST['num1'];
      $num2 = $_POST['num2'];
      $resultat = $num1 + $num2;
      echo "La somme de $num1 et $num2 est: $resultat";
    }
  }

  ?>


</body>

</html>
