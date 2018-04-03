<!-- array -->
<!DOCTYPE html>
<html>
<body>
	<?php
		$cars = array("volvo","mercedes");
		//echo var_dump($cars);
		$new = $_POST["Cars"];
		array_push($cars, $new); 
		foreach ($cars as $value) {
			echo $value . "<br>";
		}	
	?>
	<form action="index.php">
		<button type="submit" value"AddnewCar"></button>
	</form>

</body>
</html>