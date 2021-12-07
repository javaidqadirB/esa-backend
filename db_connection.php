<?php
define("DB_NAME", "esa-backend");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_HOST", "localhost");

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$connection) {
    die('Could not connect:'. mysqli_error($connection);
}

$db_selected = mysqli_select_db($connection, DB_NAME);

if(!$db_selected) {
    die('Can\'t use '.DB_NAME.': '.mysqli_error($connection));
}

?>