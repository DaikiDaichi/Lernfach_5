<html>
	<body>
		<?php
        	$h_umsatz=0;
            $h_quartal=0;
        	
			$umsaetze=[
				12000,
				14000,
				10000,
				15000,
			];
			
			foreach ($umsaetze as $key => $umsatz) {
            	$key=$key+1;
				echo"{$key}.Quartal: {$umsatz} Euro<br>";
                
                if ($umsatz > $h_umsatz){
                	$h_umsatz = $umsatz;
                    $h_quartal = $key;
                }
			}
            
            echo"Hoechster Umsatz: {$h_umsatz} im {$h_quartal}.Quartal"
            
		?>
	</body>
</html>