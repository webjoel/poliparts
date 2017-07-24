<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Contato</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000000;
	font-weight: bold;
}
body {
	background-color: #FFFFFF;
	margin-left: 0px;
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
	font-weight: bold;
}
.style1 {color: #FF0000}
-->
</style></head>

<body>
<div align="left">
    <table width="27" border="0">
    <form method="post" action="http://www.poliparts.com.br/cgi-sys/FormMail.cgi"; name="Formulário de Contato"> 
	<input type=hidden name="recipient" value="fabiano@poliparts.com.br"> 	
	<input type=hidden name="subject" value="Formulario de Contato"> 
	<input type=hidden name="redirect" value="http://www.poliparts.com.br/contato2.php">
      <tr>
        <th width="25%" scope="col"><div align="left" class="style1">Nome:</div></th>
        <th width="75%" scope="col"><div align="left">
          <label>
            <input name="Nome" type="text" id="Nome" size="30" maxlength="40" />
            </label>
        </div></th>
      </tr>
      <tr>
        <td><div align="left" class="style1">Empresa:</div></td>
        <td><div align="left">
          <label>
            <input name="Empresa" type="text" id="Empresa" size="30" maxlength="40" />
            </label>
        </div></td>
      </tr>
      <tr>
        <td><div align="left" class="style1">Cidade:</div></td>
        <td><div align="left">
          <label>
            <input name="Cidade" type="text" id="Cidade" size="30" maxlength="40" />
            </label>
        </div></td>
      </tr>
      <tr>
        <td><div align="left" class="style1">E-mail:</div></td>
        <td><div align="left">
          <label>
            <input name="Email" type="text" id="Email" size="30" maxlength="40" />
            </label>
        </div></td>
      </tr>
      <tr>
        <td><div align="left" class="style1">Coment&aacute;rio:</div></td>
        <td><div align="left">
          <label>
            <textarea name="Comentario" id="Comentario" cols="23" rows="7"></textarea>
            </label>
        </div></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <label>
            <input name="Enviar" type="submit" class="style1" id="Enviar" value="Enviar" />
            </label>
          <label>
            <input name="limpar" type="reset" class="style1" id="limpar" value="Limpar" />
            </label>
        </div>
            <div align="left"></div></td>
      </tr>
      </form>
    </table>
</div>
</body>
</html>
