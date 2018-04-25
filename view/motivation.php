<?php 
$title = "Jean Luc Denbroeder, Designer & WebDeveloper - Accueil"; 
$description = "Présentation de mon parcours ent tant que Designer expérimenté et mes compétences en développement."; 
?>

<?php ob_start(); ?>

<!-- ZONE A PERSONNALISER -->

<section>
  <article>
    <p>Madame, Monsieur,</p>
    <p>
      Dans le cadre de ma formation de Web Développeur chez BeCode.org, je souhaite effectuer un stage d'un mois ou plus à partir de début juin 2018 au plus tard.
      Le but du stage est de me permettre de mettre en pratique toutes mes connaissances acquises et ce dans une équipe professionnelle.
    </p><p>
    J'ai de très bonnes connaissances du HTML, CSS (FlexBox et Grid Layout), ainsi que PHP + MySql (PDO/CRUD), à cela s'ajoute de bonnes notions en JS, DOM, JQuery, Canvas, MVC, Git & Github... Ainsi  que de bonnes notions de PHP en POO et de Frameworks.
    </p><p>
    Je tiens à rajouter qu’en tant qu’infographiste professionnel, je maîtrise très bien les outils graphiques tels qu'Adobe Photoshop, Illustrator et InDesign et que mon expérience et ma créativité originale en tant que Designer est un atout supplémentaire.
    </p><p>
    En vous remerciant de l'attention que vous avez portée à ma demande, je vous prie de croire,
    Monsieur, en l'expression de ma parfaite considération.</p>
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
