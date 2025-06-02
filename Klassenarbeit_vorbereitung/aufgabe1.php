<html>
    <body>
        <?php
            $erzugung = [
                "Montag" => 35353,
                "Dienstag" => 36979,
                "Mittwoch" => 19116,
                "Donnerstag" => 29549,
                "Freitag" => 33599,
                "Samstag" => 34710,
                "Sonnatg" => 13565
            ];

            $verbrauch = [
                "Montag" => 14912,
                "Dienstag" => 9337,
                "Mittwoch" => 20787,
                "Donnerstag" => 6377,
                "Freitag" => 24281,
                "Samstag" => 24200,
                "Sonnatg" => 15307
            ];

            foreach($erzugung as $wochentag => $Wh) {
                echo $wochentag . " produziert " . $Wh . "<br>";
            };

            foreach($verbrauch as $wochentag => $Wh) {
                echo $wochentag . " verbraucht " . $Wh . "<br>";
            };

            foreach($erzugung as $wochentag => $Wh){
                if($Wh>$verbrauch[$wochentag]){
                    echo "Erzeugung am " . $wochentag . " war groeßer als der Verbrauc" . "<br>";
                }
            }
        ?>
    </body>
</html>