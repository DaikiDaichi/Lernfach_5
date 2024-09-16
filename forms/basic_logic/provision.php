<html>
    <head>
        <title>Provision</title>
    </head>

    <body>
        <?php
            $umsatz = $_GET["umsatz"];

            if ($umsatz >= 100000) {
                $provision = 2.0;
            }
            elseif ($umsatz >= 80000) {
                $provision = 1.5;
            }
            else {
                $provision = 0;
            }

            $provision_betrag = $umsatz * $provision/100;

            echo "Provision: {$provision}% <br>Provisionsbetrag: {$provision_betrag} Euro"
        ?>
    </body>
</html>