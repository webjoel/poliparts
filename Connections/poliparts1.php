<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_poliparts = "localhost";
$database_poliparts = "polipart_poliparts";
$username_poliparts = "polipart_webjoel";
$password_poliparts = "13079";
$poliparts = mysql_pconnect($hostname_poliparts, $username_poliparts, $password_poliparts) or trigger_error(mysql_error(),E_USER_ERROR); 
?>