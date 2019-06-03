<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercice 6 PHP</title>
  </head>
  <body>
    <div class="container p-0">
      <header>
        <div class="row mb-4 p-4 bg-primary d-flex justify-content-center align-item-center">
          <h1 class="text-white m-2">Exercice 6</h1>
          <h4 class="text-white m-4 text-center">Créer une variable name et l'initialiser avec la valeur de votre choix. Afficher : "Bonjour" + name + ", comment vas tu ?".</h4>
        </div>
      </header>
      <?php
        $name = 'Nicolas';
      ?>
      <p class="text-center">Bonjour <strong><?= $name ?></strong>, comment vas-tu ?</p>
    </div>
  </body>
</html>
