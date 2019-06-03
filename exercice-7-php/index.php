<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercice 7 PHP</title>
  </head>
  <body>
    <div class="container p-0">
      <header>
        <div class="row mb-4 p-4 bg-primary d-flex justify-content-center align-item-center">
          <h1 class="text-white m-2">Exercice 7</h1>
          <h4 class="text-white m-4 text-center">Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier. Afficher : "Bonjour" + lastname + firstname + ",tu as" + age + "ans".</h4>
        </div>
      </header>
      <?php
        $lastname = 'kvaternik';
        $firstname = 'nicolas';
        $age = 22;
      ?>
      <p class="text-center">Bonjour <strong><?= $firstname . ' ' . $lastname ?></strong>, tu as <strong><?= $age ?></strong> ans.</p>
    </div>
  </body>
</html>
