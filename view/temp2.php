<?php
if ( (isset($_GET['color'])) && (!empty($_GET['color'])) ){
  $colorNr = $_GET['color'];
}
else {
  $colorNr = 1;
}
if ($colorNr == 1){
  $colorBackground = "rgb(116, 116, 116)";

}
if ($colorNr == 2){
  $colorBackground = "#402424";

}
if ($colorNr == 3){
  $colorBackground = "#36554f";

}
if ($colorNr == 4){
  $colorBackground = "#b2d2d1";

}
if ($colorNr == 5){
  $colorBackground = "#372510";

}
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <style>
      .temp{
        color: #402424;
        color: #36554f;
        color: #372510;
        color: #b2d2d1;
      }
    </style>
    <style>
      body{
        background-color: <?= $colorBackground; ?>;
        padding: 0px;
        margin: 0px;
      }
      p{
        font: Arial, Helvetica, sans-serif;
        font-size: 14px;
      }
      h2{
        color: #4b0000;
      }
      h3{
        color: #622c2c;
      }
      a{
        text-decoration: none;
      }
      img{
        width: 100%;
        height: auto;
      }
      .name, .tel{
        font: Verdana, Arial, Helvetica, sans-serif;
        font-size: 20px;
        color: #4b0000;
      }

      .icone-fontawesome{
        padding-left: 20px;
        padding-right: 20px;
        color: #cccccc;
      }
      main{
        display: grid;
        display: -ms-grid;
        grid-template-columns: 1fr;
        width: 80%;
        max-width: 1280px;
        margin: 0 auto;
      }
      header{
        display: grid;
        display: -ms-grid;
        min-height: 250px;
        background-image: url("../assets/img/JeanLucDenbroeder-Designer-Webdeveloper.jpg");
        background-repeat: no-repeat;
        background-size: 100%;
        -webkit-background-size:cover;
        -moz-background-size:cover;
        -o-background-size:cover;
        background-size:cover;
        background-position:center;
      }
      header #color-choice{
        justify-self: start;
        align-self: flex-start;
        padding: 0px;
      }
      header ul{
        margin: 0px;
      }
      header ul li{
        display: block;
        display: inline-block;
        list-style: none; /* pour enlever les puces sur IE7 */
        list-style-type: none;
        margin: 1px;
        padding: 3px 6px;
        background-color: #101010;
        font-size: 10px;
        color: #909090;
        text-decoration: none;
        border-radius: 50%;
      }
      header #citation{
        justify-self: end;
        align-self: flex-end;
        text-align: right;
        padding: 20px 40px;
        background-color: rgb(255, 255, 255, 0.9);
        border-radius: 20px 0px 0px 0px;
      }
      header q{
        font-family: Georgia, "Times New Roman", serif;
        font-style: italic;
        font-size: 24px;
      }
      aside q{
        font-family: Georgia, "Times New Roman", serif;
        font-style: italic;
        font-size: 16px;
      }
      nav{
        display: grid;
        display: -ms-grid;
        justify-content: flex-end;
        align-items: stretch;
        background-color: rgb(32, 33, 45);
        font-size: 16px;
        font-weight: 600;
      }
      nav ul{
        flex-wrap: wrap;
        list-style-type: none;
        margin: 0px;
        text-shadow: 1px 1px 1px #323131;
        font-family: Arial;
        color: rgb(116, 116, 116);
      }
      nav ul li{
        float:left; /*pour IE*/
        padding: 10px;
        background-color: #333d3d;
      }
      nav ul li a{
        color: #ffffff;
        font-size: 14px;
        text-decoration: none;
      }
      nav ul li a:hover {
        color: #adb5c6;
        text-decoration: none;
      }
      section{
        display: grid;
        background-color: #fff;
        align-items: baseline; /*baseline; stretch;*/
      }
      article{
        padding: 10px 30px 10px 20px;
      }
      aside{
        align-self: self-start;
        background-color: #d4d4d4;
        text-align: right;
      }
      footer{
        padding: 10px;
        text-align: right;
        background-color: rgb(32, 33, 45);
        color: #ffffff;
      }
      /* ECRAN LARGE */
      @media screen and (min-width: 720px)
      {
        section{
          grid-template-rows: 1fr;
          grid-template-columns: 2fr 1fr;
          min-height: 350px;
        }
        section aside{
          grid-column: 2 / span 1;
          grid-row: 1 / span 1;
          padding: 30px 30px 30px 30px;
          border-radius: 0px 0px 0px 20px;
        }
      }
      /* ECRAN SMALL */
      @media screen and (max-width: 720px)
      {
        #menu{
          display: none;
        }
        section aside{
          padding: 5px;
        }
      }
    </style>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <meta charset="utf-8">
    <title>Jean Luc Denbroeder, Designer & WebDeveloper - Accueil</title>
    <meta name="description" content="Présentation de mon parcours ent tant que Designer expérimenté et mes compétences en développement.">
  </head>
  <body>
    <main>
      <header>
        <div class="color-choice">
          <ul>
            <li><a href="temp2.php?color=1">1</a></li>
            <li><a href="temp2.php?color=2">2</a></li>
            <li><a href="temp2.php?color=3">3</a></li>
            <li><a href="temp2.php?color=4">4</a></li>
            <li><a href="temp2.php?color=5">5</a></li>
          </ul>
        </div>
        <div id="citation">
          <span class="name"><strong>Jean Luc Denbroeder</strong></span><br>
          <strong>Designer/WebDeveloper</strong><br>
          <span class="tel"><strong>0479 06 38 09</strong></span>
        </div>
      </header>
      <nav>
       <div id="menu">
        <ul>
          <li>Accueil</li>
          <li><a href="qui-suis-je.html">Qui suis-je?</a></li>
          <li><a href="portfolio.html">Mon Portfolio</a></li>
          <li><a href="demo.html">Démos</a></li>
          <li><a href="contact.html">Contactez-moi</a></li>
        </ul>
       </div>
      </nav>
      <section>
        <article>
          <h2>Designer</h2>
          <p>Ma créativité et mon expérience mon permis d'acquérir des compétences en infographie, que ce soit des réalisations d'imprimées (flyers, brochures, plaquettes commerciales, publicités...) ou du WebDesign, référencement, visuels eMarketing,... </p><br>
          <h2>WebDeveloper</h2>
          <p>Mes connaissances et mon savoir-faire dans la programmation destinées aux plateformes Internet, sont des atouts complémentaires pour toutes conceptions FrontEnd / BackEnd...</p>
        </article>
        <aside>
          <q>De la rigueur, de la passion, une envie d'apprendre tous les jours</q>
        </aside>
      </section>
      <img src="../assets/img/foot-interview-ecriture.jpg" alt="Jean Luc Denbroeder, Designer & WebDeveloper Freelance, mon Portfolio, quelques réalisations,...">
      <footer>
        <!-- Facebook -->
        <a href="https://www.facebook.com/jeanluc.denbroeder" target="_blank"><i class="fa fa-facebook fa-2x icone-fontawesome"></i></a>
        <!-- Linkedin -->
        <a href="https://www.linkedin.com/in/jean-luc-denbroeder-4174ab69/" target="_blank">
          <i class="fa fa-linkedin fa-2x icone-fontawesome"></i></a>
        <!-- GitHub-->
        <a href="https://github.com/jldenbroeder" target="_blank">
          <i class="fa fa-github fa-2x icone-fontawesome"></i></a>
      </footer>
    </main>
  </body>
</html>