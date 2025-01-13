<html>
    <head>
        <title>Taschenrechner</title>
    </head>

    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <input type="number" step="any" name="op1" value="0"> Erster Operant <br>
            <input type="number" step="any" name="op2" value="0"> Zweiter Operant <br>
        
            <input type="submit" name="+" value="Addieren">
            <input type="submit" name="-" value="Subtrahieren">
        </form>

        <?php
            if (isset($_GET["+"]) or isset($_GET["-"])){
                $op1 = $_GET["op1"];
                $op2 = $_GET["op2"];

                if(isset($_GET["+"])){
                    $ergebnis = $op1 + $op2;
                    echo $ergebnis;
                } elseif (isset($_GET["-"])) {
                    $ergebnis = $op1 - $op2;
                    echo $ergebnis;
                }
            }
        ?>
    </body>
</html>