<?php
function pdo_connect_mysql()
{
	$DATABASE_HOST = 'localhost';
	$DATABASE_USER = 'root';
	$DATABASE_PASS = '';
	$DATABASE_NAME = 'cv_kw';
	try {
		return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
		echo 'connected';
	} catch (PDOException $exception) {
		// If there is an error with the connection, stop the script and display the error.
		exit('Failed to connect to database!');
	}
}

function module_header($title)
{
	echo <<<EOT
<!DOCTYPE html>
<html>

	<body>
EOT;
}
function module_footer()
{
	echo <<<EOT
    </body>
</html>
EOT;
}
