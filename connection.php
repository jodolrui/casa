<?php

require "config.php";

$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

$mysqli->set_charset("utf8mb4");

?>