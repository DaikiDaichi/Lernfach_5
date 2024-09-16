<html>
    <head>
        <title>Kosten</title>
    </head>

    <body>
        <?php
            $arbeitszeit = $_GET["betriebszeit"];
            $arbeitspreis = $_GET["arbeitspreis"];
            $leistung = $_GET["leistung"];

            $arbeit = $arbeitszeit * $leistung/1000;
            $kosten = $arbeitspreis/100*$arbeit;

            echo $arbeit, "kWh<br>";
            echo $kosten, "Euro";
        ?>
    </body>
</html>