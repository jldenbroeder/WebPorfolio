<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <meta charset="utf-8">
    <title>Jean Luc Denbroeder, Designer & WebDeveloper - Accueil</title>
    <meta name="description" content="Présentation de mon parcours ent tant que Designer expérimenté et mes compétences en développement.">
  </head>
  <body>


    <main>
      <header>
        <div id="color-choice">
          <!--
<ul>
<li><a href="temp2.php?color=1">1</a></li>
<li><a href="temp2.php?color=2">2</a></li>
<li><a href="temp2.php?color=3">3</a></li>
<li><a href="temp2.php?color=4">4</a></li>
<li><a href="temp2.php?color=5">5</a></li>
</ul>
-->
        </div>
        <div id="information">
          <span class="name"><strong>Jean Luc Denbroeder</strong></span><br> <strong>Designer/WebDeveloper</strong><br>
          <span class="tel"><strong>0479 06 38 09</strong></span>
        </div>
      </header>
      <nav>
        <button class="button">Accueil</button>
        <button class="button">Qui suis-je?</button>
        <button class="button">Mon Portfolio</button>
        <button class="button">Contactez-moi</button>
        <button class="button" id="hamburger" onclick="menuOpen()">&#9776;</button>
        <button class="button" id="hamburger-close" onclick="menuClose()">X</button>
      </nav>
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
      <footer>
        FOOTER</footer>
    </main>

    <script>
      function menuOpen() {
        var listButton = document.getElementsByClassName("button");
        for (i = 0; i < listButton.length; i++){
          listButton[i].style.display='block';
        } document.getElementById("hamburger").style.display='none';
      }
      function menuClose() {
        var listButton = document.getElementsByClassName("button");
        for (i = 0; i < listButton.length; i++){
          listButton[i].style.display='none';
        } 
        document.getElementById("hamburger").style.display='block';
        document.getElementById("hamburger-close").style.display='none';
      }
    </script>

  </body>
</html>
