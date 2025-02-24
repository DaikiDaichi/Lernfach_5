<html>
    <head>
        <title>E-Auto</title>
    </head>

    <body>
        <?php
            $verbrauch_land = 18;
            $verbrauch_stadt = 15;

            if ($_GET["gebiet"] == "land") {
                $reichweite = $_GET["kWh"]/$verbrauch_land*100;
            } else {
                $reichweite = $_GET["kWh"]/$verbrauch_stadt*100;
            }

            echo "Sie koennen mit {$_GET["kWh"]} kWh ungefaehr";
            echo number_format($reichweite, 1), "km fahren";
        ?>
    </body>
</html>