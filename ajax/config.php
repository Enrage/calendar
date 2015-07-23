<?php

$mysql_host = "localhost"; // localhost(на локалке)
$mysql_user = "openadv7_lean"; // root(на локалке)
$mysql_pass = "12qWjiD0"; // пароль если есть
$mysql_db = "openadv7_lean"; // им€ Ѕƒ где есть таблица с новост€ми, пол€(id, title, date)

mysql_connect($mysql_host, $mysql_user, $mysql_pass) or die("No connect MySQL server");
mysql_select_db($mysql_db) or die("No connect db");

?>