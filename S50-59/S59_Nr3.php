<?php
// Array mit den Monatsnamen
$monat = ["Januar", "Februar", "März", "April", "Mai", "Juni", "Juli", "August", "September", "Oktober", "November", "Dezember"];

// Array mit den Umsätzen der letzten 12 Monate
$umsatz = [9000, 10000, 10500, 11000, 8000, 7700, 7000, 6500, 8350, 8600, 9200, 11000];

// 1. Umsätze in umgekehrter Reihenfolge ausgeben
echo "Umsätze in umgekehrter Reihenfolge:<br>";

$index = count($monat)-1;

while ($index>=0){
    echo $monat[$index], ": ", $umsatz[$index], "<br>";
    $index -= 1;
};

echo "<br>";

// 2. Durchschnittlichen Umsatz berechnen und ausgeben
$gesammt_wert = 0;
foreach ($umsatz as $key => $wert) {
    $gesammt_wert += $wert;
};
$durchschnitt = $gesammt_wert / count($umsatz);
echo "Durchschnittlicher Umsatz: " . round($durchschnitt, 2) . " EUR<br><br>";

// 3. Monate mit Abweichung vom Durchschnittsumsatz ausgeben
echo "Monate mit Abweichung vom Durchschnittsumsatz:<br>";
foreach ($umsatz as $index => $wert) {

    if (1-($wert/$durchschnitt) <= -0.2 or 1-($wert/$durchschnitt) >= 0.2){
    echo $monat[$index] . ": " . $umsatz[$index] . " EUR<br>";}
}
?>
