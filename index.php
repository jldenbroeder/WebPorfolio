<?php
// Appel de la page global/config.php
// Contient session_start,...
require('global/config.php');
if ( (isset($_GET['page'])) && (!empty(_GET['page'])) ){
  if ($_GET['page'] == "presentation"){
    $page = "view/presentation.php";
  }else{
    $page = "view/presentation.php";
  }
}
?>