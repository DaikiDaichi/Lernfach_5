<html>
    <head>
        <title>Praemie</title>
    </head>

    <body>
        <?php
            $jahre = $_GET["jahre"];
            $preamie = "Keine Praemie";

            switch ($jahre) {
                case 10: $preamie = "400 Euro";
                    break;
                case 20: $preamie = "1 Urlaubstag + 200 Euro";
                    break;
                case 30: $preamie = "2 Urlaubstage";
                    break;
            }

            echo "Ihre Praemie: $preamie"
        ?>
    </body>
</html>