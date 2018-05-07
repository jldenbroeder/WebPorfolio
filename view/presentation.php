<?php 
$title = "Jean Luc Denbroeder, Designer & WebDeveloper - Accueil"; 
$description = "Présentation de mon parcours ent tant que Designer expérimenté et mes compétences en développement."; 
?>

<?php ob_start(); ?>

<!-- ZONE A PERSONNALISER -->

<section>
  <article>
    <h2>Designer</h2>
    <p>Ma créativité et mon expérience m'ont permis d'acquérir des compétences en infographie, que ce soit des réalisations d'imprimées (flyers, brochures, plaquettes commerciales, publicités...) ou de la création complète de sites Internet complémentés d'une optimisation aux référencements, ainsi que des visuels eMarketing,... </p>
    <p>Une bonne maitrise du CMS WordPress accompagné du thème DIVI sont mes préférences en WebDesign.</p>
    <h2>WebDeveloper</h2>
    <p>De très bonnes connaissances et un savoir-faire dans la programmation destinées aux plateformes Internet, sont des atouts complémentaires pour toutes conceptions FrontEnd / BackEnd... HTML, CSS, Javascript et PHP.</p>
  </article>
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
