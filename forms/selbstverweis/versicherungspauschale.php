<html>
    <head>
        <title>Versicherungspauschale</title>
    </head>

    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            Bestellwert: <br>
            <input type="number" step="0.01" name="bestellwert"> Euro <br>
            <input type="submit" name="submit" value="Berechnen">
        </form>

        <?php
            if (isset($_GET["submit"])) {
            $bestellwert = $_GET["bestellwert"];
            $pauschale = 2.5;

            $pauschale_betrag = $bestellwert + $bestellwert*$pauschale/100;

            echo $pauschale_betrag;
            }
        ?>
    </body>
</html>