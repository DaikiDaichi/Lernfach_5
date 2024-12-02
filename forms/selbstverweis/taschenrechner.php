<html>
    <head>
        <title>Taschenrechner</title>
    </head>

    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <input type="number" step="any" name="op1" value="0"> Erster Operant <br>
            <input type="number" step="any" name="op2" value="0"> Zweiter Operant <br>
            <input type="radio" name="operator" value="+" checked> addieren
            <input type="radio" name="operator" value="-"> subtrahieren <br>
            <input type="radio" name="operator" value="*"> multiplizieren
            <input type="radio" name="operator" value="/"> dividieren <br>
            <input type="submit" name="submit" value="Berechnen">
        </form>

        <?php
            if(isset($_GET["submit"])){
                $op1 = $_GET["op1"];
                $op2 = $_GET["op2"];
                $operator = $_GET["operator"];

                switch ($operator){
                    case "+":   $ergebnis = $op1 + $op2;
                                number_format($ergebnis, "4", ","," ");
                                echo "$op1 + $op2 = $ergebnis";
                        break;
                    case "-":   $ergebnis = $op1 - $op2;
                                number_format($ergebnis, "4", ","," ");
                                echo "$op1 - $op2 = $ergebnis";
                        break;
                    case "*":  $ergebnis = $op1 * $op2;
                                number_format($ergebnis, "4", ","," ");
                                echo "$op1 * $op2 = $ergebnis";
                        break;
                    case "/":   $ergebnis = $op1 / $op2;
                                number_format($ergebnis, "4", ","," ");
                                echo "$op1 / $op2 = $ergebnis";
                        break;
                }
            }
        ?>
    </body>
</html>