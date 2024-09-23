<html>
    <head>
        <title>Ergebnis</title>
    </head>

    <body>
        <?php
            $p = $_GET["p"];
            $q = $_GET["q"];

            $D = pow($p/2,2) - $q;

            if ($D > 0) {
                $x1 = -$p/2+sqrt($D);
                $x2 = -$p/2-sqrt($D);
                echo "x1: {$x1}, x2: {$x2}";
            }
            elseif ($D == 0) {
                $x1 = -$p/2+sqrt($D);
                echo "x1: {$x1}";
            }
            elseif ($D < 0) {
                echo "Keine L&ouml;sung";
            }
            
        ?>
    </body>
</html>