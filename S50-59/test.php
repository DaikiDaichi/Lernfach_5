<html>
    <body>
        <?php
            $array = array();
            $array[3] = 1;
            $array[100] = 2;
            foreach ($array as $key => $value) {
                echo "Key: {$key} Value: {$value}<br>";
            }
            var_dump($array);
            echo "<br>";
            echo count($array);
        ?>
    </body>
</html>