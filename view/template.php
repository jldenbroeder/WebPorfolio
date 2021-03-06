<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <meta name="description" content="<?= $description ?>">
  </head>
  <body>
    <main>
      <?php 
  require('header.php');
  require('navbar.php');
  echo $content; 
  require('footer.php'); 
      ?>
    </main>
    <script >
          <?php 
      require('assets/js/wh_fix.js');
  require('assets/js/script-nav.js');
      
      ?>
    </script>
  </body>
</html>
