<?php
define("DB_NAME", "test");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_HOST", "localhost");

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$connection) {
    die('Could not connect:'.mysqli_error($connection));
}

$db_selected = mysqli_select_db($connection, DB_NAME);

if(!$db_selected) {
    die('Can\'t use '.DB_NAME.': '.mysqli_error($connection));
}

$name = $_POST["NAME"];
$age = $_POST["age"];
$eyecolour = $_POST["eye_colour"];

$sql = "INSERT INTO cust_info(NAME, age, eye_colour) VALUES ('$name', $age, '$eyecolour')";

if(!mysqli_query($connection, $sql)) {
    die("Error:" .mysqli_error($connection));
}
else{
    echo "Data inserted";
}
?>