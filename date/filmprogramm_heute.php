<html>
    <head>
        <title>Filmprogramm heute</title>
    </head>

    <body>
        <?php
            echo"<b>Filmprogram am </b>";
            echo date("d.m.Y");
        ?>

        <br><br>

        <table border="3">
            <colgroup>
                <col width="100">
                <col width="220">
                <col width="220">
            </colgroup>

            <tr>
                <th>Uhrzeit</th>
                <th>Film</th>
                <th>Dauer</th>
            </tr>

            <tr>
                <td>1</td>
                <td>Yellowstone River</td>
                <td>135 min</td>
            </tr>

            <tr>
                <td>6</td>
                <td>Vor langer Zeit</td>
                <td>90 min</td>
            </tr>

            <tr>
                <td>3</td>
                <td>Geheimnis des &Auml;quator</td>
                <td>120 min</td>
            </tr>
        </table>
    </body>
</html>