<html>
	<body>
    	<form action="<?php echo $_SERVER['PHP_SELF']?>" method=get>
        
        	Anfangskapital <br>
            <input type=number step=0.01 name="kapital" value=1> <br>
            Zinsfuss p in Prozent<br>
            <input type=number step=any name="zinsfuss" value=1> <br>
            Laufzeit in Jahren <br>
            <input type=number step=1 name="jahre" value=1> <br>
            <input type=submit value="Berechnen" name="submit"> <br>
        
        </form>
    
		<?php
        	if (isset($_GET["submit"])) {
            	$jahre=$_GET["jahre"];
                $zinsfuss=$_GET["zinsfuss"];
                $kapital = $_GET["kapital"];
                
                for ($jahr_counter=0; $jahr_counter<=$jahr; $jahr_counter++) {
                	$kapital=$kapital*(1+$zinsfuss/100);
                }
                echo "Nach {$jahre} Jahre ist Ihr kapital bei {$kapital}";
            }
		?>
	</body>
</html>