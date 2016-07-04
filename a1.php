<?php 
	header("content-type:text/html;charset=utf-8");
	$days=31;
	echo "<table width='700px' border='1px'>";
	
	for($i=1;$i<=$days;){
		echo "<tr>";
		for ($j=0; $j <7 ; $j++) { 
			if($i>$days){
			echo "<td>&nbsp;</td>";

			} else
			echo "<td>{$i}</td>";
			$i++;
		}
		echo "</tr>";
	}
	
	echo "</table>";
	

	


?>
