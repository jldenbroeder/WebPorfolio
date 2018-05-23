<?php
$url = "http://".$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];


try
{
  $bdd = new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8', ''.$user.'', ''.$pass.'', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
  die('ERREUR PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage());
}
?>
