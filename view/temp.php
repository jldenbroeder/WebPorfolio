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
        justify-items: center;
        background-color: rgba(24, 28, 28, 0.9);
      }
      .container{
        display: grid;
        grid-template-columns: repeat(32, 1fr);
        grid-template-rows: repeat(18, 1fr);
        width: 100%;
        max-width: 1000px;
        height: 100vh;
        box-sizing: border-box;
        /*        background-color: #ffffff;*/
        border: 1px solid #68a5a5; /* TEMP */
        background-image: url(grid32x162.jpg); 
        background-size: 100% 100%; /* TEMP */
        background-repeat:no-repeat; /* TEMP */
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
        grid-row: 3/ span 9;
        background-color: rgba(255, 255, 255, 0.9);
        border: 1px solid #868686;
        padding: 10px;
        font-size: 2.5vh;
        z-index: 50;
      }
      .item-coin1{
        grid-column: 2 / span 2;
        grid-row: 2 / span 2;
        background-color: rgba(246, 222, 169, 0.9);
        border-top-left-radius: 100%;
        z-index: 5;
      }
      .item-ombre1{
        grid-column: 4/ span 14;
        grid-row: 4/ span 9;
        background-color: rgba(33, 33, 50, 0.3);
        border-bottom-right-radius: 75%;
        z-index: 20;
      }
      .item2{
        grid-column: 20/ span 10;
        grid-row: 4 / span 12;
        background-color: rgba(255, 255, 255, 0.9);
        border: 1px solid #868686;
        border-top-right-radius: 40%;
        padding: 10px;
        font-size: 2.5vh;
        z-index: 50;
      }
      .item-ombre2{
        grid-column: 19/ span 10;
        grid-row: 5/ span 12;
        background-color: rgba(246, 222, 169, 0.9);
        border-top-left-radius: 50%;
        z-index: 20;
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

      /* MEDIA QUERY MEDIUM */
      @media screen and (max-width: 960px) {
        p{
          font-size: 0.8em;
        }
        .item-nav-coin{
          grid-column: 5;
        }
        .item-nav{
          grid-column: 6 / span 27;
        }
        .item3{
          grid-row: 2 / span 4;
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
          display: none;
        }
        .item3{
          grid-row: 2 / span 3;
        }
      }
    </style>
  </head>
  <body>
    <MAIN>
      <SECTION>
        <div class="container">
          <div class="items item-nav-coin"></div>
          <div class="items item-coin1"></div>
          <div class="items item-nav btn-group">
            <button class="button">Accueil</button>
            <button class="button">Qui suis-je?</button>
            <button class="button">Mon Portfolio</button>
            <button class="button">Contactez-moi</button>
          </div>
          <div class="items item1">
            <h1 class="font-kalam">Designer</h1>
            <p>Ma créativité et mon expérience mon permis d'aquerir un savoir-faire, que ce soit des réalisations imprimées (flyers, brochures, plaquettes commerciales, publicité...) ou des sites Internet, du référencement, des campagnes emailsMarketing,... </p>
            <p class="font-dancing">PS: Chaque page (view) retourne un <code>$content</code> et un <code>$title</code> qui est placé dans la page "template.php"  et est appellé via un <code>require('template.php');</code></p>
          </div>
          <div class="items item-ombre1"></div>
          <div class="items item2">
            <h1>Présentation</h1>
            <h2>Jean Luc Denbroeder</h2>
            <p class="font-kalam">Tout ce contenu se trouve entre <code>ob_start();</code> et <code>$content = ob_get_clean();</code></p>
            <p class="font-noticia">PS: Chaque page (view) retourne un <code>$content</code> et un <code>$title</code> qui est placé dans la page "template.php"  et est appellé via un <code>require('template.php');</code></p>
          </div>
          <div class="items item-ombre2"></div>
        </div>
      </SECTION>

      <div class="container">
      </div>
      <div class="container">
      </div>
    </MAIN>
  </body>
</html>