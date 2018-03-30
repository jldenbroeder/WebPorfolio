<?php 
$h1Color = "#a30000";
$nbrButton = 4;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700|Kalam:400,700|Noticia+Text:400i,700i" rel="stylesheet">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <title>Grid Layout</title>
    <style>
      html body{
        margin: 0;
        padding: 0;
      }

      h1 {
        color: <?= $h1Color; ?>; 
      }
      .font-dancing{
        font-family: 'Dancing Script', cursive; 
      }
      .font-kalam{
        font-family: 'Kalam', cursive;
      }
      .font-noticia{
        font-family: 'Noticia Text', serif; 
      }
      code {
        color: #2c473b; }

      MAIN{
        display: grid;
        display: -ms-grid;
        justify-items: center;
        background-color: rgba(24, 28, 28, 0.9);
      }
      .container{
        display: grid;
        display: -ms-grid;
        grid-template-columns: repeat(32, 1fr);
        grid-template-rows: repeat(18, 1fr);
        width: 100%;
        max-width: 1280px;
        height: 100vh;
        box-sizing: border-box;
        background-color: #ffffff;
        /*   border: 1px solid #68a5a5; /* TEMP */
        /*        background-image: url(grid32x162.jpg); */
        /*   background-size: 100% 100%; /* TEMP */
        /*   background-repeat:no-repeat; /* TEMP */
      }
      .items{
        /*
        background-color: rgba(213, 224, 174, 0.49);
        border: 1px solid #004ba7;
        */
      }
      .item-nav-coin{
        grid-column: 12;
        grid-row: 1;
        background-color: rgba(24, 28, 28, 0.9);
        border-bottom-left-radius: 100%;
        z-index: 5;
      }
      .item-nav{
        grid-column: 13 / 33;
        grid-row: 1/1;
        display: grid;
        grid-template-columns: repeat(<?= $nbrButton; ?>, 1fr);
        background-color: rgba(24, 28, 28, 0.9);
        z-index: 5;
      }
      .item1{
        grid-column: 3/ span 14;
        grid-row: 3/ span 10;
        background-color: rgba(255, 255, 255, 0.9);
        border: 1px solid #868686;
        border-bottom-right-radius: 30px;
        padding: 10px;
        font-size: 2.5vh;
        z-index: 50;
      }
      .item-coin1{
        grid-column: 2 / span 2;
        grid-row: 2 / span 2;
        background-color: rgba(220, 176, 78, 0.5);
        border-top-left-radius: 100%;
        z-index: 5;
      }
      .item-ombre1{
        grid-column: 4/ span 14;
        grid-row: 4/ span 10;
        background-color: rgba(33, 33, 50, 0.3);
        border-bottom-right-radius: 75%;
        z-index: 20;
      }
      .item2{
        grid-column: 20/ span 11;
        grid-row: 4 / span 12;
        background-color: rgba(255, 255, 255, 0.9);
        border: 1px solid #868686;
        border-top-right-radius: 40%;
        padding: 10px;
        font-size: 2.5vh;
        z-index: 50;
      }
      .item-coin2{
        grid-column: 29 / span 2;
        grid-row: 14 / span 2;
        border-top-left-radius: 100%;
        background-color: rgba(220, 176, 78, 0.5);
        z-index: 70;
      }
      .item-ombre2{
        grid-column: 19/ span 11;
        grid-row: 5/ span 12;
        background-color: rgba(33, 33, 50, 0.3);
        border-top-left-radius: 50%;
        z-index: 20;
      }
      .item3{
        grid-column: 1/ span 16;
        grid-row: 15 / span 4;
        background-color: rgba(255, 255, 255, 0.1);
/*        border: 1px solid #868686;*/
        border-top-right-radius: 30px;
        padding: 10px;
        font-size: 2.5vh;
        z-index: 50;
      }
      .btn-group .button {
        background-color: rgba(255,255,255, 0);
        border: none;
        color: white;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        cursor: pointer;
        float: right;
      }
      .btn-group .button:hover {
        background-color: #3e8e41;
      }
      .item-next{
        grid-column: 16 / span 2;
        grid-row: 18 / span 1;
        background-color: rgba(24, 28, 28, 0.9);
        -webkit-border-radius: 50% / 60% 60% 40% 40%;
        border-radius: 50% / 100% 100% 0 0;
        z-index: 50;
      }
      .item-next2{
        grid-column: 15 / span 4;
        grid-row: 17 / span 2;
        background-color: rgba(24, 28, 28, 0.2);
        border-top: 10px solid rgba(24, 28, 28, 0.3);
        -webkit-border-radius: 50% / 60% 60% 40% 40%;
        border-radius: 50% / 100% 100% 0 0;
        z-index: 40;
      }
      .item-cache-background{
        grid-column: 1/ span 32;
        grid-row: 7/ span 4;
        transform: skewY(-3deg);
        background-color: rgb(255, 255, 255);
        z-index: 5;
      }
      .item-img-background{
        grid-column: 1/ span 32;
        grid-row: 10/ span 9;
        background-image: url("../assets/img/designer-and-webdeveloper.jpg");
        background-repeat: no-repeat;
        background-size: 100%;
        -webkit-background-size:cover;
        -moz-background-size:cover;
        -o-background-size:cover;
        background-size:cover;
        background-position:center;
        z-index: 3;
      }
      /* MEDIA QUERY MEDIUM */
      @media screen and (max-width: 960px) {
        p{
          font-size: 0.9em;
        }
        .item-nav-coin{
          grid-column: 5;
        }
        .item-nav{
          grid-column: 6 / span 27;
        }
      }

      /* MEDIA QUERY SMALL */
      @media screen and (max-width: 600px) {
        .item-nav-coin{
          display: none;
        }
        .item-nav{
          grid-column: 1 / span 32;
          border-bottom-left-radius: 0px;
        }
        .item1{
          grid-column: 1 / span 32;
          grid-row: 2;
        }
        .item2{
          grid-column: 1 / span 32;
          grid-row: 3;
        }
        .item3{
          grid-column: 1 / span 32;
          grid-row: 4;
        }
      }
    </style>
  </head>
  <body>
    <MAIN>
      <SECTION>
        <div class="container">
          <div class="items item-nav-coin"></div>
          <div class="items item-nav btn-group">
            <button class="button">Accueil</button>
            <button class="button">Qui suis-je?</button>
            <button class="button">Mon Portfolio</button>
            <button class="button">Contactez-moi</button>
          </div>
          <div class="items item-coin1"></div>
          <div class="items item1">
            <h1 class="font-kalam">Designer</h1>
            <p>Ma créativité et mon expérience mon permis d'acquérir des compétences, que ce soit des réalisations d'imprimées (flyers, brochures, plaquettes commerciales, publicités...) ou du WebDesign, référencement, visuels eMarketing,... </p><br>
            <h1 class="font-kalam">WebDeveloper</h1>
            <p>Mes connaissances et mon savoir-faire, sont un plus afin d'améliorer toutes conceptions ... </p>
          </div>
          <div class="items item-ombre1"></div>
          <div class="items item-coin2"></div>
          <div class="items item2">
            <h1>Présentation</h1>
            <h2>Jean Luc Denbroeder</h2>
            <p class="font-kalam">Tout ce contenu se trouve entre <code>ob_start();</code> et <code>$content = ob_get_clean();</code></p>
            <p class="font-noticia">PS: Chaque page (view) retourne un <code>$content</code> et un <code>$title</code> qui est placé dans la page "template.php"  et est appellé via un <code>require('template.php');</code></p>
          </div>
          <div class="items item-ombre2"></div>
          <div class="items item3"></div>
          <div class="items item-cache-background"></div>
          <div class="items item-img-background"></div>
          <div class="items item-next"></div>
          <div class="items item-next2"></div>
        </div>
      </SECTION>

      <div class="container">
      </div>
      <div class="container">
      </div>
    </MAIN>
  </body>
</html>