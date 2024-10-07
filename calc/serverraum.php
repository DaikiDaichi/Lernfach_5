<html>
    <head>
        <title>Serverraumkosten</title>
    </head>

    <body>
        <?php
            $Verbrauch = 18000.0;   //in kWhvjhwj
            $Grundpreis = 24.95;    //in Euro
            $Arbeitspreis = 18.5;   //in Cent
            
            $Jahrsbruttokosten = $Verbrauch*$Arbeitspreis/100+$Grundpreis*12;
            echo "Jahreskosten: ", number_format($Jahrsbruttokosten,2,","," ");
        ?>
    </body>
</html>