<?php
echo "Server Date/Time = ".date('d/m/Y h:i:s');
echo "</br>";
echo "File Path = ".$_SERVER["SCRIPT_FILENAME"];

echo "Before check";


	if (!defined('APPLICATION_ENV'))
		define('APPLICATION_ENV', getenv('PHP_APPLICATION_ENV') ? getenv('PHP_APPLICATION_ENV') : 'production');


echo "Application_ENV is ".APPLICATION_ENV;

phpinfo();


//echo "Error log path is " . ini_get(error_log');

?>