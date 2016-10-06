<?php 
require_once 'resources/Analizer.php';
 ?>
<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='UTF-8'>
	<title>Lexical Analizer</title>
</head>
<body>

<h1>Analizador léxico para paréntesis :^)</h1>
	<form action='' method='POST' id="form">
		Expresión:
		<input type="text" name="expression"><br>
		<input type="submit" value="Analizar">
	</form>
<?php

if (isset($_POST["expression"])) {
	$expression = $_POST["expression"];
	$analize = new Analizer($expression);
	if ($analize->isParenthesisValid()) {
		echo "<p>La expresión << $expression >> es válida</p>";
	} else {
		echo "<p>La expresión << $expression >> NO es válida</p>";
	}
}
 ?>

</body>
</html>