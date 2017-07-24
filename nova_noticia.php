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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO noticias (titulo, noticia, fonte) VALUES (%s, %s, %s)",
                       GetSQLValueString($_POST['titulo'], "text"),
                       GetSQLValueString($_POST['noticia'], "text"),
                       GetSQLValueString($_POST['fonte'], "text"));

  mysql_select_db($database_poliparts, $poliparts);
  $Result1 = mysql_query($insertSQL, $poliparts) or die(mysql_error());

  $insertGoTo = "index.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
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
}
body {
	background-color: #FF0000;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
a {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #FF0000;
	font-weight: bold;
}
a:link {
	text-decoration: none;
	color: #000000;
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
}
.style8 {
	font-size: 12px;
	color: #FF0000;
	font-weight: bold;
}
.style9 {color: #FFFFFF}
-->
</style></head>

<body>
<table width="680" border="0" align="center" bgcolor="#FFFFFF">
  <tr>
    <th colspan="3" scope="col"><img src="imagens/logo_site.png" width="675" height="111" /></th>
  </tr>
  <tr>
    <td height="27" colspan="3" background="imagens/menu_site.png"><table width="100%" border="0">
      <tr>
        <th scope="col"><strong>:: <a href="index.php">Home</a></strong></th>
        <th scope="col"><strong>:: <a href="visao.php">Vis&atilde;o</a></strong></th>
        <th scope="col"><strong>:: <a href="produtos.php">Produtos</a></strong></th>
        <th scope="col"><strong>:: <a href="clientes.php">Clientes</a></strong></th>
        <th scope="col"><strong>:: <a href="marcas.php">Marcas</a></strong></th>
        <th scope="col"><strong>:: <a href="contato.php">Contato</a></strong></th>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td width="30"><img src="imagens/lateral_site_e.png" width="30" height="550" /></td>
    <td width="608"><table width="100%" border="0">
      <tr>
        <th width="100%" scope="col"><div align="left"><img src="imagens/m_noticias.png" width="125" height="27" /></div></th>
      </tr>
      <tr>
        <th scope="col"><div align="left"> 
          <p>&gt;&gt; Insira os dados da Not&iacute;cia e Clique em Publicar!</p>
          <form id="form1" name="form1" method="POST" action="<?php echo $editFormAction; ?>">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <th scope="col"><div align="left">:: T&iacute;tulo da Not&iacute;cia:</div></th>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><label>
                  <input name="titulo" type="text" id="titulo" size="38" maxlength="38" />
                </label></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>:: Fonte:</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><label>
                  <input name="fonte" type="text" id="fonte" size="60" />
                </label></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>:: Not&iacute;cia</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><label>
                  <textarea name="noticia" id="noticia" cols="70" rows="15,2"></textarea>
                </label></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><label>
                  <input name="publicar" type="submit" class="style8" id="publicar" value="Publicar Not&iacute;cia" />
                  <input name="limpar" type="reset" class="style8" id="limpar" value="Limpar Dados" />
                  <br />
                </label></td>
              </tr>
            </table>
              <input type="hidden" name="MM_insert" value="form1" />
              <br>
              </form>
          </div></th>
      </tr>

    </table>
    </td>
    <td width="30"><img src="imagens/lateral_site_d.png" width="30" height="550" /></td>
  </tr>
</table>
<p align="center"><a href="http://www.imperius.v10.com.br"><img src="imagens/logo_powered.png" width="231" height="54" border="0" /></a></p>
</body>
</html>