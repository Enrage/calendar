<?php

$mysql_host = "localhost"; // localhost(�� �������)
$mysql_user = "openadv7_lean"; // root(�� �������)
$mysql_pass = "12qWjiD0"; // ������ ���� ����
$mysql_db = "openadv7_lean"; // ��� �� ��� ���� ������� � ���������, ����(id, title, date)

mysql_connect($mysql_host, $mysql_user, $mysql_pass) or die("No connect MySQL server");
mysql_select_db($mysql_db) or die("No connect db");

?>