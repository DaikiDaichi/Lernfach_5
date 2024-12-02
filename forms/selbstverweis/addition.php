<html>
    <head>
        <title>Addition</title>
    </head>

    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
        <b>Addition</b><br>
            Wert1
            <input type="number" step="any" value="0" name="n1"> <br>
            Wert2
            <input type="number" step="any" value="0" name="n2"> <br>
            <input type="submit" name="submit" value="Berechnen">
        </form>

        <?php
             if(isset($_GET["submit"])){
                $n1 = $_GET["n1"];
                $n2 = $_GET["n2"];
    
                $ergebnis = $n1+$n2;
    
                echo "Ergebnis: $ergebnis";
            }
        ?>
    </body>
</html>