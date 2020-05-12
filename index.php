<?php
define('DB_NAME', getenv('MYSQL_DATABASE'));
define('DB_USER', getenv('MYSQL_USER'));
define('DB_PASSWORD', getenv('MYSQL_PASSWORD'));
define('DB_HOST', getenv('MYSQL_SERVICE_HOST'));

$link = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);
if (!$link) {
	die('Could not connect: ' . mysqli_connect_error());
	exit();
}
echo 'Connected successfully';
mysqli_close($link);

?>


