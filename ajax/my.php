<?php

include_once "config.php"; // ���������� ��
include_once "myJson.php"; // ���������� ������������ JSON

header('Content-Type: text/html; charset=utf-8'); // �������� ���������� ���������

$date = array(); // ������ �������� �������

$query = "SELECT id, title, new_date FROM news"; // ����� ������ � ������� news

/*if(isset($_REQUEST['start-min']) && $_REQUEST['start-max']) // ���� ������������ ��������� � �������� �������� ���(�������� �� ������� ���������)
{
	$start_date = substr($_REQUEST['start-min'], 0, strpos($_REQUEST['start-min'], "T")); // ��������� ����
	$end_date = substr($_REQUEST['start-max'], 0, strpos($_REQUEST['start-max'], "T")); // �������� ����
	$query .= " WHERE UNIX_TIMESTAMP('{$start_date}') <= UNIX_TIMESTAMP(new_date) AND UNIX_TIMESTAMP(new_date) <= UNIX_TIMESTAMP('{$end_date}')"; // ������� ������� �� ������ ����� ��������� � �������� �����
}*/

$resource = mysql_query($query); // ���������� � ��
if(mysql_num_rows($resource) != 0)
{
	// ���� ���� �������
	while($array = mysql_fetch_assoc($resource))
		$date[] = $array; // ������� � ������ $date ���������� ��� ������� �� �������
}

// ������ ����������, ��������� ������(�����������������)
//$date[] = array('id' => 1, 'title' => "�����������", 'start' => date("Y-m-d H:i:s",mktime(16, 0, 0, 9, 2, 2009)),'end' => date("Y-m-d",mktime(0, 0, 0, 9, 8, 2009)));
//$date[] = array('id' => 2, 'title' => "�����������", 'start' => date("Y-m-d",mktime(0, 0, 0, 9, 2, 2009)));

echo array_to_json($date); // ������� �� �����(���������� �������) ������ ������ $date � ������� JSON

?>