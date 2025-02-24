<html>
    <head>
        <title>Provision</title>
    </head>

    <body>
        <?php
            $umsatz = $_GET["umsatz"];
            $provision = 0;

            if ($umsatz < 100000 and $umsatz >= 80000) {
                $provision = 1.5;
            }

            if ($umsatz >= 100000) {
                $provision = 2;
            }

            $provision_betrag = $umsatz * $provision/100;

            echo "Provision: {$provision}% <br>Provisionsbetrag: {$provision_betrag} Euro"
        ?>
    </body>
</html>