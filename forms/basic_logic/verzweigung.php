<html>
    <head>
        <title>Verzweigung</title>
    </head>

    <body>
        <?php
            $anzahl_A = $_GET["a"];
            $anzahl_C = $_GET["c"];
            $preis_A = 11;
            $preis_C = 8;
            $rabatt = 0.1;
            $karte = $_GET["karte"];

            $preis = $anzahl_A*$preis_A + $anzahl_C*$preis_C;

            switch ($karte) {
                case "y":   $preis = (1-$rabatt)*$preis;
                            break;
            }

            echo "<b>Tickets</b> <br>";
            echo "Anzahl Erwachsener: $anzahl_A <br>";
            echo "Anzahl Kinder: $anzahl_C <br>";
            echo "Kinokarte: $karte <br>";
            echo "Kosten: $preis";
        ?>
    </body>
</html>