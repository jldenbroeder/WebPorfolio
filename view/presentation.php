<?php 
$title = "Jean Luc Denbroeder, Designer & WebDeveloper - Accueil"; 
$description = "Présentation de mon parcours ent tant que Designer expérimenté et mes compétences en développement."; 
?>

<?php ob_start(); ?>

<!-- ZONE A PERSONNALISER -->

<section>
  <article>
    <h2>Designer</h2>
    <p>Ma créativité et mon expérience mon permis d'acquérir des compétences en infographie, que ce soit des réalisations d'imprimées (flyers, brochures, plaquettes commerciales, publicités...) ou du WebDesign, référencement, visuels eMarketing,... </p><br>
    <h2>WebDeveloper</h2>
    <p>Mes connaissances et mon savoir-faire dans la programmation destinées aux plateformes Internet, sont des atouts complémentaires pour toutes conceptions FrontEnd / BackEnd...</p>
  </article>
  <aside>
    <div id="quote">
      <q>De la rigueur, de la passion, une envie d'apprendre tous les jours</q></div>
  </aside>
</section>

<!-- FIN DE ZONE A PERSONNALISER -->

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
