<?php

include_once "config.php"; // подключаем БД
include_once "myJson.php"; // подключаем альтернативу JSON

header('Content-Type: text/html; charset=utf-8'); // Передаем заголовкам кодировку

$date = array(); // массив хранения событий

$query = "SELECT id, title, new_date FROM news"; // общий запрос к таблице news

/*if(isset($_REQUEST['start-min']) && $_REQUEST['start-max']) // если присутствуют начальные и конечные значения дат(присланы из скрипта календаря)
{
	$start_date = substr($_REQUEST['start-min'], 0, strpos($_REQUEST['start-min'], "T")); // начальная дата
	$end_date = substr($_REQUEST['start-max'], 0, strpos($_REQUEST['start-max'], "T")); // конечная дата
	$query .= " WHERE UNIX_TIMESTAMP('{$start_date}') <= UNIX_TIMESTAMP(new_date) AND UNIX_TIMESTAMP(new_date) <= UNIX_TIMESTAMP('{$end_date}')"; // условие выборки за период между начальной и конечной датой
}*/

$resource = mysql_query($query); // обращаемся к БД
if(mysql_num_rows($resource) != 0)
{
	// если есть события
	while($array = mysql_fetch_assoc($resource))
		$date[] = $array; // заносим в масиив $date поочередно все события из выборки
}

// ручное добавление, наглядный пример(закомментированно)
//$date[] = array('id' => 1, 'title' => "Двухдневный", 'start' => date("Y-m-d H:i:s",mktime(16, 0, 0, 9, 2, 2009)),'end' => date("Y-m-d",mktime(0, 0, 0, 9, 8, 2009)));
//$date[] = array('id' => 2, 'title' => "Однодневный", 'start' => date("Y-m-d",mktime(0, 0, 0, 9, 2, 2009)));

echo array_to_json($date); // выводим на экран(отправляем обратно) сжатый массив $date с помощью JSON

?>