<?php
if (isset($_POST['enviar'])){
	function factorial($number){
	if ($number==0){
		return 1;
	}else{
		return $number*factorial($number-1);
	}
}
echo "El factorial es: ".factorial($_POST['number']);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Factorial: </title>
</head>
<body>
	<form action="factorial.php" method="post">
		<label>Factorial de : </label>
		<input type="number" name="number" required>
		<input type="submit" name="enviar" value="enviar">
	</form>

</body>
</html>
