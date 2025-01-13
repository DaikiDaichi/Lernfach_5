<html>
    <head>
        <title>Broca</title>
    </head>

    <body>
        <?php
            $gender = $_GET["gender"];
            $groesse = $_GET["groesse"];

            $nW = $groesse-100;

            if ($gender="m") {
                $iW = $nW*(1-0.1);
            } else {
                $iW = $nW*(1-0.15);
            }

            echo "NW = $nW <br>IW = $iW"
        ?>
    </body>
</html>