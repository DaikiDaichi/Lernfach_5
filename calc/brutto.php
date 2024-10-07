<html>
    <head>
        <title>Brutto</title>
    </head>

    <body>
        <?php
            $mwst = 19.0;
            $net_kosten = 249.0;

            $mwst_betrag = $mwst / 100 * $net_kosten;
            $brutto_kosten = $net_kosten + $mwst_betrag;
            echo "Nettokosten: ", number_format( $net_kosten, 2, ",", " "), "<br>Bruttokosten: ", $brutto_kosten, "<br>MWST-Betrag: ", $mwst_betrag;
        ?>
    </body>
</html>