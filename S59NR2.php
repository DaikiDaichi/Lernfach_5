<html>
	<body>
		<?php
            $m_temp=0;
        	
			$temp_meas=[
				12,
				14,
				10,
				15,
                5,
                19,
                14,
			];
            
            $t_temp=$temp_meas[0];
            $h_temp=$temp_meas[0];
			
			foreach ($temp_meas as $key => $temp) {
            	$day=$key+1;
				
                if ($temp < $t_temp){
                	$t_temp = $temp;
                }
                
                if($temp > $h_temp){
                	$h_temp = $temp;
                }
                
                $m_temp+=$temp;
			}
            
            $m_temp=$m_temp/count($temp_meas);
            $m_temp = number_format($m_temp, 2, ",", " ");
            
            echo"Hoechste Temperatur: {$h_temp}<br>Niedrigste Temperatur: {$t_temp}<br>Mittlere Temperatur: {$m_temp}";
            
		?>
	</body>
</html>