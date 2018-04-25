<?php
// Appel de la page global/config.php
// Contient session_start,...
require('global/config.php');
// Verification du lien de la page , Accueil = presentation
if ( (isset($_GET['page'])) && (!empty($_GET['page'])) ){
  if ($_GET['page'] == "presentation"){
    $page = "view/presentation.php";
  }
  elseif ($_GET['page'] == "qui-suis-je"){
    $page = "view/qui-suis-je.php";
  }
  elseif ($_GET['page'] == "portfolio"){
    $page = "view/portfolio.php";
  }
  elseif ($_GET['page'] == "contact"){
    $page = "view/contact.php";
  }
  elseif ($_GET['page'] == "documents"){
    $page = "view/documents.php";
  }
  else{
    $page = "view/motivation.php";
  }
}
else{
  $page = "view/motivation.php";
}

require($page);
?>