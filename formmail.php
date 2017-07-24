<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Contato</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style1 {font-family: Verdana, Arial, Helvetica, sans-serif}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000000;
	font-weight: bold;
}
body {
	background-color: #FFFFFF;
}
a {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000000;
	font-weight: bold;
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
-->
</style>
</head>

<body>
<?
$Nome = $_POST['Nome'];
$Empresa = $_POST['Empresa'];
$Cidade = $_POST['Cidade'];
$Email = $_POST['Email'];
$Comentario = $_POST['Comentario'];
//aqui nós resgatamos as variáveis do formulário
$para = "POLIPARTS<webjoel@hotmail.com>";
$assunto = "Contato";
$mensagem = "$Nome
$Empresa
$cidade
$Email
$Comentario";
/*aqui foram definidos: o local onde será enviado o e-mail($para)
o assunto do e-mail enviado ($assunto)
e a mensagem enviada ($mensagem) que contém todos os campos preenchido no formulário*/
if (strlen($Nome) < 3)
echo "<center>Informe seu Nome!<br><br><a href=\"javascript:window.history.go(-1)\" class=\"links\">Clique aqui para voltar!</a></center>";
else 
if (strlen($Empresa) <= 3)
echo "<center>Informe sua Empresa!<br><br><a href=\"javascript:window.history.go(-1)\" class=\"links\">Clique aqui para voltar!</a></center>";
else
if (strlen($Cidade) <= 3)
echo "<center>Informe sua Cidade!<br><br><a href=\"javascript:window.history.go(-1)\" class=\"links\">Clique aqui para voltar!</a></center>";
else
if (strpos($Email,"@")==0)
echo "<center>E-mail inválido!<br><br><a href=\"javascript:window.history.go(-1)\" class=\"links\">Clique aqui para voltar!</a></center>";
else
if (strpos($Email,".")==0)
echo "<center>E-mail inválido!<br><br><a href=\"javascript:window.history.go(-1)\" class=\"links\">Clique aqui para voltar!</a></center>";
else
if (strlen($Comentario) <= 1)
echo "<center>Escreva um Comentário!<br><br><a href=\"javascript:window.history.go(-1)\" class=\"links\">Clique aqui para voltar!</a></center>";
else{
mail($para, $assunto, $mensagem);
echo "<center>Seu formulário foi enviado com sucesso!<br><br><a href=\"javascript:window.history.go(-1)\" class=\"links\">Voltar</a></center>";
}
/* Nas linhas acima foi feita uma confirmação do preenchimento dos formulários.. sendo que todos os
campos preenchidos do formulário será enviado com a instrução mail() */
?>
<span class="style1"></span>
</body>
</html>
