<?php 
$title = "Jean Luc Denbroeder, Designer & WebDeveloper - Accueil"; 
$description = "Présentation de mon parcours ent tant que Designer expérimenté et mes compétences en développement."; 
?>

<?php ob_start(); ?>

<!-- ZONE A PERSONNALISER -->

<section>

  <div class="content-col">
    <div class="col1">
      <h3>Quelques réalisations WebDesign et Développement</h3></div>
    <!--   Hippocampe Relax   -->
    <div class="col2">
      <a href="http://www.hippocampe-relax.com" target="_blank"><img src="assets/img/web-hippocampe-relax.jpg" alt="Coussin d'allaitement Hippocampe-Relax, pour femme enceinte et bébé..."></a>
      <a href="http://www.hippocampe-relax.com" target="_blank">Hippocampe-Relax.com</a><br>WordPress, DIVI, Responsive, SmartSlider, trilingue, reportages et traitement des photos, montage vidéo,...</div>
    <!--  FG Medical  -->
    <div class="col2">
      <a href="http://www.ophtalmowavre.be/" target="_blank"><img src="assets/img/web-fgmedical.jpg" alt="Ophtalmologie à Wavre, Dr Fortunati Muriel, consultation sur rendez-vous."></a>
      <a href="http://www.ophtalmowavre.be/" target="_blank">FG Medical, Ophtalmologie</a><br>WordPress, DIVI, Responsive, SmartSlider, reportages et traitement des photos, GoogleMap,...</div>
    <!--   Delta Consultants   -->
    <div class="col2">
      <a href="http://www.delta-consultants.be" target="_blank"><img src="assets/img/web-delta.jpg" alt="Delta Consultants, Agence immobilière de standing, Maisons, Villas, App..."></a>
      <a href="http://www.delta-consultants.be" target="_blank">Delta Consultants</a><br>WordPress, DIVI, Responsive, bilingue, personnalisation des listes et annonces en PHP/MySQL,...</div>
    <!--  Bollandistes  -->
    <div class="col2">
      <a href="http://www.bollandistes.org/" target="_blank"><img src="assets/img/web-bollandistes.jpg" alt="Société des Bollandistes"></a>
      <a href="http://www.bollandistes.org/" target="_blank">Société des Bollandistes</a><br>HTML, CSS, PHP/MySQL, TinyMCE,...</div>

  </div>

  <aside>
    <?php include('aside-passion.php'); ?>
    <?php include('aside-cv.php'); ?>
    <?php include('aside-documents.php'); ?>
    <div>&nbsp;</div>
    <div></div>
  </aside>
</section>
<img src="assets/img/foot-ecriture.jpg" alt="Mon expérience en Infographie et mes connaissances en WebDéveloppement, un principal atout pour la création Web.">
<!-- FIN DE ZONE A PERSONNALISER -->

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
