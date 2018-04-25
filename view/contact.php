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
    <div class="cv-text">
     <br>
      <form action="">
        <span class="required">*</span> Entreprise / Société<br>
        <input type="text" required="required" name="societe" placeholder="Votre entreprise/société" /><br><br>
        <span class="required">*</span> Nom<br>
        <input type="text" required="required" name="nom" placeholder="Votre nom" /><br><br>
        <span class="required">*</span> Tél.<br>
        <input type="text" required="required" name="tel" placeholder="Votre téléphone" /><br><br>
        <span class="required">*</span> Email<br>
        <input type="email" required="required" name="email" placeholder="Votre email" /><br><br>
        &nbsp;&nbsp;Message<br>
        <textarea placeholder="Votre message"></textarea><br><br>
        <input type="submit" value="Envoyer" />
        <span class="required">*</span> Champs obligatoires<br>
      </form>
    </div>
  </article>
  <aside>
    <?php include('aside-passion.php'); ?>
    <?php include('aside-documents.php'); ?>
    <div>&nbsp;</div>
    <div></div>
  </aside>
</section>
<img src="assets/img/foot-encodage.jpg" alt="Mon expérience en Infographie et mes connaissances en WebDéveloppement, un principal atout pour la création Web.">
<!-- FIN DE ZONE A PERSONNALISER -->

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
