<html>
    <body>
        <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="get">

            <input type="number" step="1" name="input">
            <input type="submit" name="submit" value="Berechnen">

        </form>

        <?php

            if (isset($_GET["submit"])) {

                $num = $_GET["input"];
                $start = 1;
                $sum = 0;

                while ($start <= $num) {

                    $sum += $start;
                    $start += 1;

                }

                $mit = $sum/$num;

                echo "Summe {$sum} Mittelwert {$mit}";

            }

        ?>

    </body>
</html>