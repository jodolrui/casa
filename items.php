<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
       
        <?php require "items_data.php" ?>


        <script>
            function addAmount(itemId)
            {
                var xmlHttp = new XMLHttpRequest();
                xmlHttp.open("GET", "http://localhost/jodolrui/casa/item_add.php?id="+itemId+"&amount=1", false); // false for synchronous request
                xmlHttp.send(null);
                //return xmlHttp.responseText;
                location.reload();
            }

            function subtractAmount(itemId)
            {
                var xmlHttp = new XMLHttpRequest();
                xmlHttp.open("GET", "http://localhost/jodolrui/casa/item_subtract.php?id="+itemId+"&amount=1", false); // false for synchronous request
                xmlHttp.send(null);
                //return xmlHttp.responseText;
                location.reload();
            }
        </script>

    </body>

</html>