<html>
    <head>
        <title>Waehrungsrechner</title>
    </head>

    <body>
        <b>Waehrungsrechner</b> 
        
        <br><br>

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <input type="number" step="0.01" name="betrag"> Betrag <br>
            <input type="number" step="0.01"name="kurs"> Kurs <br>
            <input type="radio" name="switch" value="EtD" checked> Euro zu Dollar
            <input type="radio" name="switch" value="DtE"> Dollar zu Euro <br>
            <input type="submit" name="submit" value="Berechnen"> 
        </form>

        <?php
            if (isset($_GET["submit"])) {

                $betrag = $_GET["betrag"];
                $kurs = $_GET["kurs"];
                $WtW_switch = $_GET["switch"];

                $ZW = $betrag * $kurs;
                $ZW = round($ZW, 2);
                $ZW = number_format($ZW, 2, ",", " ");

                switch ($WtW_switch) {
                    case "EtD": echo "$ZW Dollar";
                        break;
                    case "DtE": echo "$ZW Euro";
                        break;
                }
            }
        ?>
    </body>
</html>