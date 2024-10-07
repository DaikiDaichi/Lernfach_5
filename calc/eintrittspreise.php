<html>
    <head>
        <title>Eintrittspreis</title>
    </head>

    <body>
        <?php
            $preis = 11;
            $rabatt = 0.1;
              
            $preis_kinokarte = $preis*(1-$rabatt);
            

            echo $preis;
            echo $preis_kinokarte;
        ?>
    </body>
</html>