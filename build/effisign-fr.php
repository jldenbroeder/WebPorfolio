<?php 
$name = "Effisign";
$lg = "FR";

$destinataire1 = "php@worldmeeting.be";
$destinataire2 = "jldenbroeder@gmail.com"; 
// roland.ronsmans@telenet.be
$sujet = "Info via RM Solutions : ".$name." ".$lg;
$expediteur = "info@rm-solution.be";  

$boxcode1 = " - Emailing - Faxing - SMS - Message vocal - Marketing Mobile - Applications transactionnelles - Autres...";
$box1 = " - L'Email - Le fax - Le SMS - Le message vocal - Marketing Mobile - Applications transactionnelles - Autres...";
$boxcode2 = " - Contact pour informations - Contact pour un entretien";
$box2 = " - Plus d'informations - Un entretien personnalis&eacute; et une d&eacute;monstration sans engagement.";

//include("config.php");
//include("../notouch/connexion.php");

$res_boxcode1 = split(" - ", ($boxcode1)); 
$res_boxcode2 = split(" - ", ($boxcode2)); 
$res_box1 = split(" - ", ($box1)); 
$res_box2 = split(" - ", ($box2));

if (isset($_POST['submit'])) 
{ 
if(!isset($_SERVER['HTTP_USER_AGENT']))      { die("Forbidden - You are not authorized to view this page");  exit; } 
if(!$_SERVER['REQUEST_METHOD'] == "POST")    { die("Forbidden - You are not authorized to view this page");  exit; }

$select_box1 = $_POST['select_box1'];
$select_box2 = $_POST['select_box2'];

$soc = trim(htmlentities($_POST['soc']), ENT_QUOTES);
$act = trim(htmlentities($_POST['act']), ENT_QUOTES);
$nom = trim(htmlentities($_POST['nom']), ENT_QUOTES);
$fonction = trim(htmlentities($_POST['fonction']), ENT_QUOTES);
$adresse = trim(htmlentities($_POST['adresse']), ENT_QUOTES);
$cp = trim(htmlentities($_POST['cp']), ENT_QUOTES);
$commune = trim(htmlentities($_POST['commune']), ENT_QUOTES);
$tel = trim(htmlentities($_POST['tel']), ENT_QUOTES);
$fax = trim(htmlentities($_POST['fax']), ENT_QUOTES);
$email = trim(htmlentities($_POST['email']), ENT_QUOTES);
$comment = trim(htmlentities($_POST['comment']), ENT_QUOTES);

if ( (!empty($soc)) && (!empty($nom)) && (!empty($email)) )              {  $verif1 = "OK"; }
if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email))  {  $verif2 = "OK"; }
if  ( ($verif1 == "OK") && ($verif2 == "OK") ) 
 {
if (!empty($select_box1)) { $mselect_box1 = implode(", ", $select_box1); }
if (!empty($select_box2)) { $mselect_box2 = implode(", ", $select_box2); }

$msoc = trim(stripslashes($_POST['soc']));
$mact = trim(stripslashes($_POST['act']));
$mnom = trim(stripslashes($_POST['nom']));
$mfonction = trim(stripslashes($_POST['fonction']));
$madresse = trim(stripslashes($_POST['adresse']));
$mcp = trim(stripslashes($_POST['cp']));
$mcommune = trim(stripslashes($_POST['commune']));
$mtel = trim(stripslashes($_POST['tel']));
$mfax = trim(stripslashes($_POST['fax']));
$memail = trim(stripslashes($_POST['email']));
$mcomment = trim(stripslashes($_POST['comment']));
/*
$sql = "INSERT INTO allincommunication_demandes_".$pays." (code, choix1, choix2, soc, act, nom, fonction, adresse, cp, commune, tel, fax, email, email_visite, comment, champ_annonce, champ_date_update) VALUES ('$code', '$mselect_box1', '$mselect_box2','$soc', '$act', '$nom', '$fonction', '$adresse', '$cp', '$commune', '$tel', '$fax', '$email', '$visite_email', '$comment', '$annonce_complete', NOW())";  
    mysql_query($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error()); 
*/
$MailSubject = "$sujet";
$entetes = "From: $expediteur\n"; 
$entetes .= "X-Priority: 1\n"; 
$entetes .= "Content-Type: text/plain; charset=\"utf-8\"\n"; 
$entetes .= "Content-Transfer-Encoding: 8bit";
$MailBody .= "$name $lg\n\n";
$MailBody .= "Int. par : $mselect_box1\n";
$MailBody .= "Souhaite : $mselect_box2\n";
$MailBody .= "Soc. : $msoc\n";
$MailBody .= "Act. : $mact\n";
$MailBody .= "Nom : $mnom\n";
$MailBody .= "Fonction : $mfonction\n";
$MailBody .= "Adresse : $madresse\n";
$MailBody .= "CP : $mcp\n";
$MailBody .= "Commune : $mcommune\n";
$MailBody .= "Tel : $mtel\n";
$MailBody .= "Fax : $mtel\n";
$MailBody .= "$memail\n";
$MailBody .= "\n$mcomment\n\n";
$MailBody .= date("d-m-Y:H:i:s");

/**/
mail($destinataire1, $MailSubject, $MailBody, $entetes);
mail($destinataire2, $MailSubject, $MailBody, $entetes);

echo "<script language=\"javascript\" type=\"text/javascript\"> 
window.location.replace(\"merci-fr1.php\");
</script>"; 
 }
} 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">
<!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8">-->
<!--<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">-->
<title><?php echo $name; ?></title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body background="../images/ad2_12.gif">
<form action="" method="post" name="form" id="form">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td align="center" valign="top"><table width="900" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="900" height="20" colspan="3"><img src="../images/ad2_01.gif" width="900" height="20" alt="" /></td>
          </tr>
          <tr>
            <td width="20" rowspan="4" align="left" valign="top" background="../images/ad2_02.gif">&nbsp;</td>
            <td width="450" rowspan="4" align="left" valign="top" bgcolor="#FFFFFF"><table width="420" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="28" align="left" valign="top"><h4><span class="titre1">Les cadres d'entreprises passent pr&egrave;s de 70% de leur temps de travail hors du bureau. Le circuit de signature est donc fr&eacute;quemment bloqu&eacute;, provoquant de longs d&eacute;lais. EffiSign vous offre de la mobilit&eacute; et du confort: gr&acirc;ce &agrave; votre tablette ou smartphone, vous signez vos documents par un simple clic lors de vos d&eacute;placements.</span><strong><font color="#666666" size="4" face="Arial, Helvetica, sans-serif"><br />
                  <br />
                </font></strong></h4></td>
              </tr>
            </table>
              <table width="420" border="0" cellspacing="0" cellpadding="5">
                <tr>
                  <td align="center" valign="top" bgcolor="#000099"><h4 class="titre_blanc1"><a href="effisign-fr.pdf" target="_blank" class="titre_blanc1">T&eacute;l&eacute;chargez notre d&eacute;pliant (PDF), Cliquez ici!</a></h4></td>
                </tr>
              </table>
              <table width="420" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="left" valign="top"><p class="texte1">&nbsp;</p>
                    <p class="texte1"><strong><span class="titre1">Economique, mobile et s&ucirc;r mais pas que...</span></strong><br />
                    </p>
                    <p class="texte1">&bull; Am&eacute;liorez la productivit&eacute; de vos ressources : suppression des t&acirc;ches &agrave; faible valeur ajout&eacute;e pour permettre <br />
                      une mont&eacute;e en comp&eacute;tence de vos collaborateurs sur d'autres missions.<br />
                      &bull; Gagnez en fiabilit&eacute; sur l'ensemble du processus de traitement de vos documents et meilleure tra&ccedil;abilit&eacute; <br />
                      des processus de validation.<br />
                      &bull; Am&eacute;liorez votre image aupr&egrave;s des tiers : pas de documents &eacute;gar&eacute;s, respect des d&eacute;lais. Des contrats imm&eacute;diatement accessibles pour tous.  Une ergonomie permettant d'optimiser le travail de vos cadres.<span class="texte1"><strong><br />
                      </strong></span><strong><br />
                      </strong></p></td>
                </tr>
              </table>
              <br />
              <table width="420" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="420" colspan="2" align="left" valign="top"><p><font color="#666666"><strong><font face="Georgia, Times New Roman, Times, serif"><img src="logo-WM.gif" width="136" height="93" alt="WorldMeeting" /><br />
                            <br />
WorldMeeting sprl: <br />
TEL : + 32 495 50 68 99 <br />
FAX : + 32 2 686 01 44 <br />
<a href="mailto:php@worldmeeting.be">php@worldmeeting.be</a><br />
<a href="http://www.worldmeeting.be" target="_blank">www.worldmeeting.be</a><br />
Zeenstraat 213, 1933 Sterrebeek - Belgium</font></strong></font><br />
                      <br />
                  </p></td>
                </tr>
              </table></td>
            <td width="430" height="20" align="left" valign="top"><img src="../images/ad2_04.gif" width="430" height="20" alt="" /></td>
          </tr>
          <tr>
            <td align="center" valign="top" background="../images/ad2_07.gif"><table width="400" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td bordercolor="#FFFFFF"><table width="390" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="60" align="right">&nbsp;</td>
                        <td width="330" colspan="3" align="left"><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">Veuillez me contacter pour : </font></td>
                      </tr>
                    </table>
                      <table width="390" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="60"><font color="#FFFFFF">&nbsp;</font></td>
                          <td width="330" colspan="3" align="left"><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif">
                            <?
$select_box2 = (isset($_POST['select_box2'])) ?$_POST['select_box2']:null;
for ($i=0; $i <sizeof($res_boxcode2); $i++)  {   if ($i!=0) {
for ($j=0; $j <sizeof($select_box2); $j++)   {   if ($res_boxcode2[$i] == $select_box2[$j])             
{ echo "<input type='checkbox' name='select_box2[]' value='".$res_boxcode2[$i]."' checked >".$res_box2[$i]."<br>";
$double_box2 = $select_box2[$j]; }}
if (empty($double_box2) || ($res_boxcode2[$i] != $double_box2))             
{ echo "<input type='checkbox' name='select_box2[]' value='".$res_boxcode2[$i]."' >".$res_box2[$i]."<br>"; } } }
?>
                          </font><font color="#FFFFFF">&nbsp;</font></td>
                        </tr>
                      </table>
                    <table width="390" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td align="right">&nbsp;</td>
                          <td colspan="3" align="left">&nbsp;</td>
                        </tr>
                        <tr>
                          <td width="60" align="right"><font color="#FFFFFF">&nbsp;</font></td>
                          <td width="330" colspan="3" align="left">&nbsp;</td>
                        </tr>
                      </table>
                  <table width="390" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="60" align="right"><font color="#FFFFFF">&nbsp;</font></td>
                          <td width="330" colspan="3" align="left"><font color="#FFFFFF">&nbsp;</font></td>
                        </tr>
                      </table>
                    <table width="395" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="64" align="right" valign="bottom"><div align="right"><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif">Soci&eacute;t&eacute; 
                            :</font></div></td>
                          <td colspan="3" align="left"><font color="#333333" size="2" face="Arial, Helvetica, sans-serif"> <strong><font color="#FF0000">
                            <?
if(!isset($_POST['soc'])){  }
elseif (empty($soc))                            { echo '<font color="#FF0000">Champ vide !<br></font>'; }
?>
                            </font></strong>
                                <input name="soc" type="text" id="soc" value="<? if(isset($_POST['soc'])){ echo stripslashes($soc); } ?>" size="49" />
                                <font color="#FF0000"> *</font></font></td>
                      </tr>
                        <tr>
                          <td align="right" valign="bottom"><div align="right"><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif">Activit&eacute; 
                            :</font></div></td>
                          <td colspan="3" align="left"><font color="#333333" size="2" face="Arial, Helvetica, sans-serif">
                            <input name="act" type="text" id="act" value="<? if(isset($_POST['act'])){ echo stripslashes($act); } ?>" size="49" />
                          </font></td>
                        </tr>
                        <tr>
                          <td width="64" align="right" valign="bottom"><div align="right"><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif">Nom 
                            :</font></div></td>
                          <td colspan="3" align="left"><font color="#333333" size="2" face="Arial, Helvetica, sans-serif"> <strong><font color="#FF0000">
                            <?
if(!isset($_POST['nom'])){  }
elseif (empty($nom))                            { echo '<font color="#FF0000">Champ vide !<br></font>'; }
?>
                            </font></strong> <font color="#FFFF00">
                            <input name="nom" type="text" id="nom" value="<? if(isset($_POST['nom'])){ echo stripslashes($nom); } ?>" size="49" />
                              <font color="#FF0000">*</font></font></font></td>
                      </tr>
                        <tr>
                          <td width="64" align="right" valign="bottom"><div align="right"><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif">Fonction 
                            :</font></div></td>
                          <td colspan="3" align="left"><font color="#333333" size="2" face="Arial, Helvetica, sans-serif">
                            <input name="fonction" type="text" id="fonction" value="<? if(isset($_POST['fonction'])){ echo stripslashes($fonction); } ?>" size="49" />
                          </font></td>
                        </tr>
                        <tr>
                          <td width="64" align="right" valign="bottom"><div align="right"><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif">Adresse 
                            :</font></div></td>
                          <td colspan="3" align="left"><font color="#333333" size="2" face="Arial, Helvetica, sans-serif">
                            <input name="adresse" type="text" id="adresse" value="<? if(isset($_POST['adresse'])){ echo stripslashes($adresse); } ?>" size="49" />
                          </font></td>
                        </tr>
                        <tr>
                          <td width="64" align="right" valign="bottom"><div align="right"><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif">CP 
                            :</font></div></td>
                          <td width="54" align="left"><font color="#333333" size="2" face="Arial, Helvetica, sans-serif">
                            <input name="cp" type="text" id="cp" value="<? if(isset($_POST['cp'])){ echo stripslashes($cp); } ?>" size="7" />
                          </font></td>
                          <td width="87" align="left"><div align="right"><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif">Commune </font><font color="#333333" size="2" face="Arial, Helvetica, sans-serif">:</font></div></td>
                          <td width="190" align="left"><font color="#333333" size="2" face="Arial, Helvetica, sans-serif">
                            <input name="commune" type="text" id="commune" value="<? if(isset($_POST['commune'])){ echo stripslashes($commune); } ?>" size="25" />
                          </font></td>
                        </tr>
                        <tr>
                          <td width="64" align="right" valign="bottom"><div align="right"><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif">T&eacute;l. 
                            :</font></div></td>
                          <td colspan="3" align="left"><font color="#333333" size="2" face="Arial, Helvetica, sans-serif">
                            <input name="tel" type="text" id="tel" value="<? if(isset($_POST['tel'])){ echo stripslashes($tel); } ?>" size="49" />
                          </font></td>
                        </tr>
                        <tr>
                          <td width="64" align="right" valign="bottom"><div align="right"><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif">Fax 
                            :</font></div></td>
                          <td colspan="3" align="left"><font color="#333333" size="2" face="Arial, Helvetica, sans-serif">
                            <input name="fax" type="text" id="fax" value="<? if(isset($_POST['fax'])){ echo stripslashes($fax); } ?>" size="49" />
                          </font></td>
                        </tr>
                        <tr>
                          <td width="64" align="right" valign="bottom"><div align="right"><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif">E-mail 
                            :</font></div></td>
                          <td colspan="3" align="left"><font color="#333333" size="2" face="Arial, Helvetica, sans-serif"> <strong><font color="#FF0000">
                            <? 
if (!isset($_POST['email']))   {  }
elseif (empty($email))                                  { echo '<font color="#FF0000">Champ vide !<br></font>'; }
elseif (!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email))  { echo '<font color="#FF0000">Champ invalide !<br></font>'; }
 ?>
                            </font></strong>
                                <input name="email" type="text" id="email" value="<? if(isset($_POST['email'])){ echo stripslashes($email); } ?>" size="49" />
                                <font color="#FF0000"> *</font></font></td>
                      </tr>
                        <tr>
                          <td width="64" align="right" valign="top"><div align="right"><font color="#FFFFFF" size="2" face="Arial, Helvetica, sans-serif">Info 
                            :</font></div></td>
                          <td colspan="3" align="left"><font color="#333333" size="2" face="Arial, Helvetica, sans-serif">
                            <textarea name="comment" cols="37" rows="5"><? echo trim(stripslashes($comment)) ;?></textarea>
                          </font></td>
                        </tr>
                      </table>
                    <table width="400" border="0" cellspacing="0" cellpadding="2">
                        <tr>
                          <td width="58" height="28">&nbsp;</td>
                          <td width="65" align="left"><input type="submit" name="submit" value="Envoyer" /></td>
                          <td width="265"><font color="#FF0000" size="1" face="Arial, Helvetica, sans-serif">*</font><font color="#FFFFFF" size="1" face="Arial, Helvetica, sans-serif"> Champs obligatoires svp.</font></td>
                      </tr>
                      </table>
                  </td>
                </tr>
            </table></td>
          </tr>
          <tr>
            <td width="430" height="20" align="left" valign="top"><img src="../images/ad2_08.gif" width="430" height="25" alt="" /></td>
          </tr>
          <tr>
            <td height="19" align="left" valign="top" background="../images/ad2_09.gif"><img src="../images/transparent.gif" width="430" height="79" /></td>
          </tr>
          <tr>
            <td height="36" colspan="3"><img src="../images/ad2_13.gif" width="900" height="36" alt="" /></td>
          </tr>
      </table>
        <table width="900" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="713" align="center" valign="top"><a href="../privacy-fr.php" target="_blank"><font color="#FFFFFF" size="2" face="Verdana, Arial, Helvetica, sans-serif">R&egrave;glementation vie priv&eacute;e  -                         Se d&eacute;sinscrire</font></a></td>
            <td width="187">&nbsp;</td>
          </tr>
      </table></td>
    </tr>
  </table>
</form>
</body>
</html>
