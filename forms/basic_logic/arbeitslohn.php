<html>
    <head>
        <title>Ergebnis</title>
    </head>

    <body>
        <?php
            $arbeitszeit = $_GET["we_stunden"];

            if ($arbeitszeit >= 60) {
                $arbeitszeit = 60;
            }

            if ($arbeitszeit <= 40) {
                $lohn = $arbeitszeit * 18;
            }
            else {
                $lohn = ($arbeitszeit - 40)*22 + 40 * 18;
            }

            echo "Lohn: ", $lohn;
        ?>
    </body>
</html>