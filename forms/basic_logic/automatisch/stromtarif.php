<html>
    <head>
        <title>Stromtarif</title>
    </head>

    <body>
        <?php
            $verbrauch = $_GET["verbrauch"];
            $t1 = 2.97*12+$verbrauch*31.5/100;
            $t2 = 5.94*12+$verbrauch*28.9/100;
            $t3 = 11.84*12+$verbrauch*26.5/100;

            $t1 = round($t1,2);
            $t2 = round($t2,2);
            $t3 = round($t3,2);

            if ($t3 <= $t2 and $t3 <= $t1) {
                echo"Bester Tarif ist T3";
                $best_t = $t3;
            }
            elseif ($t2 <= $t1) {
                echo"Bester Tarif ist T2";
                $best_t = $t2;
            }
            else {
                echo"Bester Tarif ist T1";
                $best_t = $t1;
            }

            $mwst_betrag = round($best_t/119*19, 2);
            $net_kost = round($best_t-$mwst_betrag, 2);

            echo"<br>Brutto:    $best_t<br>
                Netto:  $net_kost<br>
                Mwst:   $mwst_betrag";

            //number_format scheint eine Zahl zum string abzuändern. numberformat nur bei Ausgaben verwenden!
            //(int)$var oder (float)$var kann das ergbniss zurückformen, aber nur ohne kommastellen!
        ?>
    </body>
</html>