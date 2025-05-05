<html>
	<body>
		<?php
			$temp_meas=[
				12,
				14,
				10,
				15,
                5,
                19,
                14,
			];
            
            $m_temp=$temp_meas[0];
            $key = 0;

			while ($key < count($temp_meas)) {
            	$m_temp+=$temp_meas[$key];
                $key += 1;
            }
            
            $m_temp/=count($temp_meas);

            
            echo"Mittlere Temperatur: {$m_temp}";
            
		?>
	</body>
</html>