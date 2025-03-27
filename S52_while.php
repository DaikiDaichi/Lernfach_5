<html>
	<body>
		<?php
			$gewinn = 1000;
			$stufe= 1;

			while ($stufe <= 5) {
				echo "Stufe {$stufe}: {$gewinn} Eur<br>";
				$stufe += 1;
				$gewinn = $gewinn * 1.5;
			}
		?>
	</body>
</html>