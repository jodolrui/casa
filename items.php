<?php 

require 'connection.php';

$mysqli->set_charset("utf8mb4");

if(is_numeric($_GET["id"])) {
    $id = $_GET["id"];
} else {
    $id = 0;
}

$sql = 'SELECT i.Description, s.Amount FROM stock s INNER JOIN items i ON i.ID = s.ItemID WHERE s.ID = ' . $id;

$result = $mysqli->query($sql);

#printf("%s\r\n", $result->num_rows);

$i=0;

foreach ($result as $row){
    $i=$i+1;
    printf(
        "%s;%s;%s\r\n",
        $i,
        htmlspecialchars($row['Description'], ENT_QUOTES),
        htmlspecialchars($row['Amount'], ENT_QUOTES)
    );

}

$mysqli->close();

?>