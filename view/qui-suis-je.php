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
      Expérience</div>
    <div class="cv-text">
      depuis 2004<br>
      Infographiste freelance (indépendant), création prépresse, suivit de A à Z, (pour imprimerie), réalisation de site internet, développement PHP, CSS,... CMS WordPress (Responsive), email Marketing (création, envois,...).
      <hr>
      1999-2004<br>
      Responsable prépresse, création publicitaire, “SPMS Mailings”, Rixensart.
      <hr>
      1998-99<br>
      Webdesigner, création de sites Internet «Decade», Ixelles. 
      <hr>
      1997<br>
      Opérateur P.A.O «Cives Europe» Bruxelles.
      <hr>
      1995<br>
      Création et réalisation graphique 2D et 3D, assemblage de niveaux,
      traitement de sons et musiques, test et déboguage de jeux vidéo «Edisys», W St Lambert.
      <hr> 
      1992<br>
      Infographiste, coloriste et montage d’animation «Little Big One», W St Lambert.
      <hr> 
      1989-97<br>
      Gérant d’agence hippique «Tiercé franco-belge»,
      (comptabilité et gestion, prise des paris sur PC).
    </div>
    <!-- COMPETENCES  -->
    <div class="cv-title">
      Compétences</div>
    <div class="cv-text">
      Software:<br>
      Adobe Photoshop, InDesign, Illustrator, Acrobat...
      WordPress/DIVI, Dreamweaver, Brackets, Atom, Git Bash, Office...	
      <hr> 
      Code:<br>
      HTML5 (FlexBox, Grid Layout,...), CSS3, PHP procédural, MySql
      (CRUD/PDO), MVC, JQuery, Javascript, DOM, Canvas, BootStrap.
      <hr> 
      Système:<br>
      Mac OS, Windows, Ubuntu/Linux
    </div>
    <!-- FORMATIONS  -->
    <div class="cv-title">
      Formation</div>
    <div class="cv-text">
      2017-2018<br>
      WebDéveloppeur, BeCode.org, BeCentral 1000 Bruxelles.	
      <hr> 
      1997<br>
      Infographie, P.A.O, I.e.p.s.c.f. Evere-Laeken.
      <hr> 
      1987<br>
      Décoration publicité, Enseignement secondaire supérieur,
      Institut Frans Fisher, Schaerbeek.
    </div>
    <!-- DIVERS  -->
    <div class="cv-title">
      Divers</div>
    <div class="cv-text">
      Néerlandais (niveau 5/6).<br>
      Notions d’anglais (vocabulaire informatique, software, documentation, Internet...).<br>
      Permis B (très bonne connaissance de Bruxelles).<br>
      Photo numérique - MAO - Vidéo - Cinéma fantastique.<br>
    </div>
  </article>
  <aside>
    <?php include('aside-passion.php'); ?>
    <?php include('aside-contact.php'); ?>
    <?php include('aside-documents.php'); ?>
    <div>&nbsp;</div>
    <div></div>
  </aside>
</section>
<img src="assets/img/foot-notes.jpg" alt="Mon expérience en Infographie et mes connaissances en WebDéveloppement, un principal atout pour la création Web.">
<!-- FIN DE ZONE A PERSONNALISER -->

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
