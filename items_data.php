<?php 

require 'connection.php';

$mysqli->set_charset("utf8mb4");

/*
if(is_numeric($_GET["id"])) {
    $id = $_GET["id"];
} else {
    $id = 0;
}*/

$sql = "SELECT * FROM _stock_view;";

$result = $mysqli->query($sql);

#printf("%s\r\n", $result->num_rows);

printf("<table border='1'>\r\n");
printf("<thead>\r\n");
printf("<tr><th>Producto</th><th>Cantidad</th><th>Unidades</th>\r\n");
printf("</thead>\r\n");
printf("<tbody>\r\n");

foreach ($result as $row){
    printf(
        "<tr><td>%s</td><td>%s&nbsp;
        <button onclick='addAmount(%s);'>+</button>
        <button onclick='subtractAmount(%s);'>-</button>
        </td><td>%s</td></tr>\r\n",
        htmlspecialchars($row['Item'], ENT_QUOTES),
        htmlspecialchars($row['Amount'], ENT_QUOTES),
        htmlspecialchars($row['ID'], ENT_QUOTES),
        htmlspecialchars($row['ID'], ENT_QUOTES),
        htmlspecialchars($row['Units'], ENT_QUOTES)
    );

}

printf("</tbody>\r\n");
printf("</table>\r\n");

$mysqli->close();

?>