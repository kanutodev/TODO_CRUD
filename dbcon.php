<?php
	$host = 'localhost';
	$uname = 'root';
	$pword = '';
	$db = 'todo_db';

	//set DataSourceName
	$dsn = 'mysql:host=' . $host . ';db='. $db;

	//create PDO instance
	$pdo = new PDO($dsn, $uname, $pword);

	//PDO query

	$query = $pdo->query('SELECT * FROM todo_list');

	while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
		# code...
		echo $row['ToDo'] . '<br>';
	}
?>