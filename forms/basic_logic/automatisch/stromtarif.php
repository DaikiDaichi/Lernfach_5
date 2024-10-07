<html>
    <head>
        <title>Stromtarif</title>
    </head>

    <body>
        <?php
            $verbrauch = $_GET["verbrauch"];
            $t1 = null;
            $t2 = null;
            $t3 = null;

            if ($t3 <= $t2 and $t3 <= $t1) {
                echo"pass";
            }
            elseif ($t1 <= $t2) {
                echo"pass";
            }
            else {
                echo"pass";
            }
        ?>
    </body>
</html>