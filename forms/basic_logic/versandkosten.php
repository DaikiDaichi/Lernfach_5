<html>
    <head>
        <title>Kosten</title>
    </head>

    <body>
        <?php
            $versandpauschale = 4;
            $min_bestellwert = 50;
            $bestellwert = $_GET["bestellwert"];

            if ($bestellwert >= $min_bestellwert) {
                $kosten = $bestellwert;
            }

            else {
                $kosten = $bestellwert+$versandpauschale;
            }

            echo $kosten
        ?>
    </body>
</html>