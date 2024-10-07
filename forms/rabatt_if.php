<html>
    <head>
        <title>Rabatt</title>
    </head>

    <body>
        <?php
            $preis = $_GET["preis"];
            $group = $_GET["group"];

            if ($group != "ot") {
                $preis = $preis*(1-0.05);
            }

            echo "Preis: {$preis}"
        ?>
    </body>
</html>