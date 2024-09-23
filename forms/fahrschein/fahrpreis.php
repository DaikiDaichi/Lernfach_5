<html>
    <head>
        <title>Fahrschein</title>
    </head>

    <body>
        <?php
            $rabatt = 0;
            $strecke = $_GET["strecke"];
            $tarif = $_GET["tarif"];

            if ($tarif == "s" || $tarif == "k") {
                $rabatt = 0.3;
            }

            $preis = $strecke*28*(1-$rabatt)/100;

            echo $preis,"Euro";
        ?>
    </body>
</html>