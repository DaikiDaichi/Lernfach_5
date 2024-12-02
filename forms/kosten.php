<html>
    <head>
        <title>Kosten</title>
    </head>

    <body>
        <?php
            $arbeitszeit = $_GET["betriebszeit"];
            $arbeitspreis = $_GET["arbeitspreis"];
            $leistung = $_GET["leistung"];

            $arbeit = $arbeitszeit * $leistung;
            $kosten = $arbeitspreis*$arbeit/100;

            echo $arbeit, "kWh<br>";
            echo $kosten, "Euro";
        ?>
    </body>
</html>