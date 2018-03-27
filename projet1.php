<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style-nav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
  </head>
  <body>
<div class="wrapper1">
  <div class="box a">
    <h1>Présentation</h1>
    <h2><?php echo "Page: view/presentation.php"; ?></h2>
    <p><?php echo "Contient un mélange de PHP et HTML"; ?></p>
    <p>Tout ce contenu se trouve entre <code>ob_start();</code> et <code>$content = ob_get_clean();</code></p>
    <p>PS: Chaque page (view) retourne un <code>$content</code> et un <code>$title</code> qui est placé dans la page "template.php"  et est appellé via un <code>require('template.php');</code></p>
  </div>
  <div class="box b">test</div>
</div>

<script type="text/javascript" src="assets/js/script-nav.js"></script>
  </body>
</html>