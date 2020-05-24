<?php 

require 'connection.php';

if(is_numeric($_GET["id"])) {
    $id = $_GET["id"];
} else {
    $id = 0;
}

if(is_numeric($_GET["amount"])) {
    $amount = $_GET["amount"];
} else {
    $amount = 0;
}

$sql = "UPDATE stock s SET s.Amount = s.Amount + " .$amount. " WHERE s.ID = " .$id;

$result = $mysqli->query($sql);

$mysqli->close();

?>