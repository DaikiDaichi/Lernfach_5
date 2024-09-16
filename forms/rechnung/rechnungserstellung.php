<html>
    <head>
        <title>Rechnung</title>
    </head>

    <body>
        <?php
            $net_preis = $_GET["net_preis"];
            $anzahl = $_GET["anzahl"];
            $mwst = $_GET["mwst"];

            $total_net_preis = $net_preis * $anzahl;
            $mwst_betrag = $total_net_preis * $mwst/100;
            $brutto_preis = $total_net_preis + $mwst_betrag;

            echo "<table border=2>
                <colgroup>
                    <col width = 220>
                    <col width = 220>
                    <col width = 220>
                </colgroup>

                <tr>
                    <th>Einzelpreis (netto)</th>
                    <th>St&uuml;ckzahl</th>
                    <th>Preis (netto)</th>
                </tr>

                <tr>
                    <td>$net_preis</td>
                    <td>$anzahl</td>
                    <td>$total_net_preis</td>
                </tr>

                <tr>
                    <th>Preis (netto)</th>
                    <th>Mehrwersteuer $mwst%</th>
                    <th>Preis (brutto)</th>
                </tr>

                <tr>
                    <td>$total_net_preis</td>
                    <td>$mwst_betrag</td>
                    <td>$brutto_preis</td>
            </table>"
        ?>
    </body>
</html>