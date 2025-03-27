<html>
	<body>
		<?php
			$gewinn = 1000;

			for ($stufe = 1; $stufe <= 5; $stufe++) {
				echo "Stufe {$stufe}: {$gewinn} Eur<br>";
    			$gewinn = $gewinn * 1.5;
			}
		?>
	</body>
</html>