<html>
    <head>
        <title>Switch</title>
    </head>

    <body>
        <?php
            $preis = $_POST["preis"];
            $group = $_POST["group"];

            switch ($group) {
                case "BK": $rabatt = 5;
                    break;
                case "RS": $rabatt = 10;
                    break;
                case "GH": $rabatt = 15;
                    break;
                case "ot": $rabatt = 0;
                    break;
            }

            $prei = (1-$rabatt/100)*$preis;

            echo $prei
        ?>
    </body>
</html>