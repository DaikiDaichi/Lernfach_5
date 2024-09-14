<html>
    <head>
        <title>Wochenendprogramm</title>
    </head>

    <body>
        <b>Das Programm am Wochenende</b><br>
        
        <?php
            date_default_timezone_set("CET");
            echo date("l d.F.Y, H:i");
        ?>
        <br><br>

        <table border="3">
            <colgroup>
                <col width=100>
                <col width=220>
                <col width=220> 
                <col width=220> 
            </colgroup>

            <tr>
                <th>Uhrzeit</th>
                <th>Freitag</th>
                <th>Samstag</th>
                <th>Sonntag</th>
            </tr>

            <tr>
                <td>15 Uhr</td>
                <td>Vor langer Zeit</td>
                <td>Vor langer Zeit</td>
                <td>Vor langer Zeit</td>
            </tr>

            <tr>
                <td>18 Uhr</td>
                <td>Geheimnis des Aequators</td>
                <td>Geheimnis des Aequators</td>
                <td>Geheimnis des Aequators</td>
            </tr>

            <tr>
                <td>20 Uhr</td>
                <td>Yellowstone River</td>
                <td>Yellowstone River</td>
                <td>Yellowstone River</td>
            </tr>
        </table>
    </body>
</html>