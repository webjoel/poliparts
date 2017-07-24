<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_poliparts = "localhost";
$database_poliparts = "poliparts";
$username_poliparts = "root";
$password_poliparts = "joeldarosa";
$poliparts = mysql_pconnect($hostname_poliparts, $username_poliparts, $password_poliparts) or trigger_error(mysql_error(),E_USER_ERROR); 
?>