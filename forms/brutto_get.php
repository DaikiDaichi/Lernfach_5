<html>
    <head>
        <title>Ergebniss</title>
    </head>

    <body>
        <?php
            $netpreis = $_GET["nettopreis"];
            $mwst_satz = $_GET["mwst_satz"];

            $bruttopreis = $netpreis + $mwst_satz/100*$netpreis;

            echo "Nettopreis: $netpreis <br>";
            echo "Mehrwertssteuersatz: $mwst_satz <br>";
            echo "Bruttopreis: $bruttopreis";
        ?>
    </body>
</html>