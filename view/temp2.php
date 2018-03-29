<!DOCTYPE html>
<html lang="fr">
  <head>
    <style>
      body{
        background-color: rgb(116, 116, 116);
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
      .container{
        /*        display: grid;*/
        /*        grid-template-columns: 1fr;*/
        width: 80%;
        max-width: 1280px;
        margin: 0 auto;
      }
      .container > *{

      }
      .container header{
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
      .container header #citation{
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
      .container nav{
        background-color: rgb(32, 33, 45);
        text-align: right;
        font-size: 16px;
        font-weight: 600;
      }
      .container ul{
        flex-wrap: wrap;
        list-style-type: none;
        margin: 0px;
        padding: 0px;
        text-shadow: 1px 1px 1px #323131;
        font-family: Arial;
        color: rgb(116, 116, 116);
      }
      ul li a{
        color: #ffffff;
        font-size: 14px;
        padding: 10px 10px 10px 10px;
        text-decoration: none;
      }
      ul li a:hover {
        color: #d1d1d1;
        text-decoration: none;
      }
      .container section{
        background-color: #fff;
        align-items: baseline; /*baseline; stretch;*/
      }
      .container article{
        padding: 10px 30px 10px 20px;
      }
      .container aside{
        align-self: self-start;
        background-color: #d4d4d4;
        text-align: right;
      }
      .container footer{
        padding: 10px;
        text-align: right;
        background-color: rgb(32, 33, 45);
        color: #ffffff;
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
      @media screen and (min-width: 720px)
      {
        .container ul{
          display:inline-flex;
        }
        ul li{
          padding: 10px;
        }
        .container section{
          display: grid;
          display: -ms-grid;
          grid-template-rows: 1fr;
          -ms-grid-rows: 1fr;
          grid-template-columns: 2fr 1fr;
          -ms-grid-columns: 2fr 1fr;
          min-height: 250px;
        }
        .container section article{
          grid-column: 1 / span 1;
          -ms-grid-column: 1;
          -ms-grid-column-span: 1;
          grid-row: 1 / span 1;
          -ms-grid-row: 1;
          -ms-grid-row-span: 1;
          text-align: left;
        }
        .container section aside{
          grid-column: 2 / span 1;
          -ms-grid-column: 2;
          -ms-grid-column-span: 1;
          grid-row: 1 / span 1;
          -ms-grid-row: 1;
          -ms-grid-row-span: 1;
          padding: 30px 30px 30px 30px;
          border-radius: 0px 0px 0px 20px;
        }
      }
      @media screen and (max-width: 720px)
      {
        .container section{
          display: grid;
          display: -ms-grid;
        }
        .container section .article{
          grid-column: 1 / span 1;
          -ms-grid-column: 1;
          -ms-grid-column-span: 1;
          grid-row: 1 / span 1;
          -ms-grid-row: 1;
          -ms-grid-row-span: 1;
          text-align: left;
        }
        .container section aside{
          grid-column: 1 / span 1;
          -ms-grid-column: 1;
          -ms-grid-column-span: 1;
          grid-row: 2 / span 1;
          -ms-grid-row: 2;
          -ms-grid-row-span: 1;
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
      <div class="container">
        <header>
          <div id="citation">
            <span class="name"><strong>Jean Luc Denbroeder</strong></span><br>
            <strong>Designer/WebDeveloper</strong><br>
            <span class="tel"><strong>0479 06 38 09</strong></span>
          </div>
        </header>
        <nav>
          <ul>
            <li>Accueil</li>
            <li><a href="qui-suis-je.html">Qui suis-je?</a></li>
            <li><a href="portfolio.html">Mon Portfolio</a></li>
            <li><a href="demo.html">Démos</a></li>
            <li><a href="contact.html">Contactez-moi</a></li>
          </ul>
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
          <img src="../assets/img/foot-interview-ecriture.jpg" alt="Jean Luc Denbroeder, Designer & WebDeveloper Freelance, mon Portfolio, quelques réalisations,...">
        </section>
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
      </div>
    </main>
  </body>
</html>