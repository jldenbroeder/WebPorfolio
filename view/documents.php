<?php 
$title = "Jean Luc Denbroeder, Designer & WebDeveloper - Accueil"; 
$description = "Présentation de mon parcours ent tant que Designer expérimenté et mes compétences en développement."; 
?>

<?php ob_start(); ?>

<!-- ZONE A PERSONNALISER -->

<section>
  <article>
<!-- DOCUMENTS  -->
<br>
<div class="cv-title">
  Documents de stage</div>
<div class="cv-text">
  <a href="assets/img/Stage-Jean-Luc-Denbroeder.pdf" target="_blank">Lettre de motivation (PDF)</a>
  <hr> 
  <a href="assets/img/Denbroeder-cv-2018.pdf" target="_blank">CV (PDF)</a>
  <hr> 
  <a href="assets/img/Projet de stage (formulaire à imprimer).docx" target="_blank">Formulaire  de "Projet de stage" (.docx, Word)</a><br>
</div>
  </article>
  <aside>
    <?php include('aside-passion.php'); ?>
    <?php include('aside-cv.php'); ?>
    <div>&nbsp;</div>
    <div></div>
  </aside>
</section>
<img src="assets/img/foot-encodage.jpg" alt="Mon expérience en Infographie et mes connaissances en WebDéveloppement, un principal atout pour la création Web.">
<!-- FIN DE ZONE A PERSONNALISER -->

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
