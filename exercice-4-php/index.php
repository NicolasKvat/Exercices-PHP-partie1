<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercice 4 PHP</title>
  </head>
  <body>
    <div class="container p-0">
      <header>
        <div class="row mb-4 p-4 bg-primary d-flex justify-content-center align-item-center">
          <h1 class="text-white m-2">Exercice 4</h1>
          <h4 class="text-white m-4 text-center">Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan et les initialiser avec une valeur de votre choix.
Les afficher.</h4>
        </div>
      </header>
      <?php
        $string = 'Bonjour !';
        $int = 132;
        $float = 1.456765;
        $bolean = true;
      ?>
      <p class="text-center">variable string : <strong><?= var_dump($string) ?></strong></p>
      <p class="text-center">variable int : <strong><?= $int ?></strong></p>
      <p class="text-center">variable float : <strong><?= $float ?></strong></p>
      <p class="text-center">variable boolean : <strong><?= $bolean ?></strong></p>
    </div>
  </body>
</html>
