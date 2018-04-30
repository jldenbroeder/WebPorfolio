<?php 
$title = "Jean Luc Denbroeder, Designer & WebDeveloper - Accueil"; 
$description = "Présentation de mon parcours ent tant que Designer expérimenté et mes compétences en développement."; 
?>

<?php ob_start(); ?>

<!-- ZONE A PERSONNALISER -->

<section>
  <article>
    <!-- EXPERIENCE  -->
    <div class="cv-title">
      Contactez-moi</div>
    <div class="cv-text"><br>
      <span class="name"><strong>Jean Luc Denbroeder</strong></span><br> <strong>Designer / WebDeveloper</strong><br>
      <span class="tel"><strong>0479 06 38 09</strong></span><br><br>
      <strong>Email: 
        <a href="mailto:jldenbroeder@gmail.com">jldenbroeder[at]gmail</a></strong>
      <br><br>
    </div>
  </article>
  <aside>
    <?php include('aside-passion.php'); ?>
    <?php include('aside-documents.php'); ?>
    <div>&nbsp;</div>
    <div></div>
  </aside>
</section>
<img src="assets/img/foot-tablette.jpg" alt="Mon expérience en Infographie et mes connaissances en WebDéveloppement, un principal atout pour la création Web.">
<!-- FIN DE ZONE A PERSONNALISER -->

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
