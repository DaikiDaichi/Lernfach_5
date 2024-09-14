<html>
    <head>
        <title>Kalkulation</title>
    </head>

    <body>
        <b>Selbstkostenaufschlüsslung</b>
        <br><br>

        <?php
            $Produktkosten = 149.0; //in Euro
            $Bezugskosten = 7.0; //in Euro
            $lieferantenrabatt = 7.0; //in Prozent
            $Lieferantenskonto = 2.0; //in Prozent
            $Handlungskostenzuschlag = 15.0; //in Prozent

            $Selbstkosten = $Produktkosten-$Bezugskosten-($Lieferantenskonto+$lieferantenrabatt+$Handlungskostenzuschlag)*$Produktkosten/100;

            echo "Selbstkosten: ", $Selbstkosten
        ?>
    </body>
</html>