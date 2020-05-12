<?php
$banco = $_ENV['MYSQL_DATABASE'];
$usuario = $_ENV['MYSQL_USER'];
$senha = $_ENV['MYSQL_PASSWORD'];
$hostname = $_ENV['MYSQL_SERVICE_HOST'];
$conn = mysql_connect($hostname,$usuario,$senha); mysql_select_db($banco) or die( “Não foi possível conectar ao banco MySQL”);
if (!$conn) {echo “Não foi possível conectar ao banco MySQL.
“; exit;}
else {echo “Parabéns!! A conexão ao banco de dados ocorreu normalmente!.
“;}
mysql_close();
?>