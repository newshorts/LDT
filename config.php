<?php

/*
 * Added 5.15.12 by Mike
 * 
 * Sets a base URL so we can find all these files no matter what directory we're in
 * 
 * no more "../" directory navigation
 * 
 */

$path = dirname($_SERVER['PHP_SELF']);

$server_name = $_SERVER['SERVER_NAME'];

define('BASE_URL', 'http://' . $server_name . $path . '/');

?>
