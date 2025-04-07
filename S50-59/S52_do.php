<html>
	<body>
		<?php
			$gewinn = 1000;
            $stufe = 1;

			do {
				echo "Stufe {$stufe}: {$gewinn} Eur<br>";
    			$gewinn = $gewinn * 1.5;
                $stufe += 1;
			} while ($stufe <= 5);
		?>
	</body>
</html>