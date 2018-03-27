<?php $title = "Présentation: view/presentation.php"; ?>

<?php ob_start(); ?>

<!-- ZONE A PERSONNALISER -->
<div class="wrapper1">
  <div class="box a">
    <h1>Présentation</h1>
    <h2><?php echo "Page: view/presentation.php"; ?></h2>
    <p><?php echo "Contient un mélange de PHP et HTML"; ?></p>
    <p>Tout ce contenu se trouve entre <code>ob_start();</code> et <code>$content = ob_get_clean();</code></p>
    <p>PS: Chaque page (view) retourne un <code>$content</code> et un <code>$title</code> qui est placé dans la page "template.php"  et est appellé via un <code>require('template.php');</code></p>
  </div>
</div>
<!-- FIN DE ZONE A PERSONNALISER -->

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
