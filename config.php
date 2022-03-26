<?php
$mysqli = new mysqli("sql205.hostronavt.ru", "onavt_28931418", "54321", "onavt_28931418_zvitvchs");
mysqli_set_charset($mysqli, "utf8mb4");

if ($mysqli->connect_errno) {
	echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}