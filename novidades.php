<?php require_once('Connections/poliparts.php'); ?>
<?php require_once('Connections/poliparts.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_poliparts, $poliparts);
$query_mostra_noticia = "SELECT * FROM noticias ORDER BY noticias.id_noticia desc";
$mostra_noticia = mysql_query($query_mostra_noticia, $poliparts) or die(mysql_error());
$row_mostra_noticia = mysql_fetch_assoc($mostra_noticia);
$totalRows_mostra_noticia = mysql_num_rows($mostra_noticia);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>POLIPARTS</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000000;
	font-weight: normal;
}
body {
	background-color: #FFFFFF;
	margin-left: 5px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
a {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #000000;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #000000;
}
a:hover {
	text-decoration: underline;
	color: #FF0000;
}
a:active {
	text-decoration: none;
	color: #000000;
}
h1,h2,h3,h4,h5,h6 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: normal;
}
.style1 {
	font-size: 14px;
	font-weight: bold;
}
-->
</style></head>

<body>
<table width="195" height="1" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <th scope="col"><div align="left">
      <?php do { ?>
        <p align="left"><span class="style1">:: <span class="style1"></span></span><strong><?php echo $row_mostra_noticia['titulo']; ?></strong></p>
        <p align="left"><?php echo $row_mostra_noticia['noticia']; ?></p>
        <p align="left">Fonte: <?php echo $row_mostra_noticia['fonte']; ?><br />
            </p>
        <?php } while ($row_mostra_noticia = mysql_fetch_assoc($mostra_noticia)); ?></div></th>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($mostra_noticia);
?>
