<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercice 8 PHP</title>
  </head>
  <body>
    <div class="container p-0">
      <header>
        <div class="row mb-4 p-4 bg-primary d-flex justify-content-center align-item-center shadow">
          <h1 class="text-white m-2">Exercice 8</h1>
          <h4 class="text-white m-4 text-center">Créer 3 variables. Dans la première mettre le résultat de l'opération 3 + 4. Dans la deuxième mettre le résultat de l'opération 5 * 20. Dans la troisième mettre le résultat de l'opération 45 / 5. Afficher le contenu des variables.</h4>
        </div>
      </header>
      <?php
        $calcul1 = 3 + 4;
        $calcul2 = 5 * 20;
        $calcul3 = 45 / 5;
      ?>
      <p class="text-center">3 + 4 = <strong><?= $calcul1 ?></strong></p>
      <p class="text-center">5 * 20 = <strong><?= $calcul2 ?></strong></p>
      <p class="text-center">45 / 5 = <strong><?= $calcul3 ?></strong></p>
    </div>
  </body>
</html>
