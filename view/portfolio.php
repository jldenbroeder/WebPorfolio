<?php 
$title = "Jean Luc Denbroeder, Designer & WebDeveloper - Accueil"; 
$description = "Présentation de mon parcours ent tant que Designer expérimenté et mes compétences en développement."; 
?>

<?php ob_start(); ?>

<!-- ZONE A PERSONNALISER -->

<section>

    <div class="content-col">
    <div class="col1"><h2>Quelques réalisations WebDesign</h2></div><br>
    
      <div class="col2"><img src="assets/img/web-hippocampe-relax.jpg" alt=""></div>
      <div class="col2"><img src="assets/img/web-fgmedical.jpg" alt=""></div>
    </div>

  <aside>
    <?php include('aside-passion.php'); ?>
    <?php include('aside-cv.php'); ?>
    <?php include('aside-documents.php'); ?>
    <div>&nbsp;</div>
    <div></div>
  </aside>
</section>
<img src="assets/img/foot-encodage.jpg" alt="Mon expérience en Infographie et mes connaissances en WebDéveloppement, un principal atout pour la création Web.">
<!-- FIN DE ZONE A PERSONNALISER -->

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
