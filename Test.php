<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document</title>
</head>

<body>
    
<form method="GET">
	<label for="size">size :  </form>
	<input type="number" value="15" name="size" id="size">
	<input type="submit" name="Valider">
	<label for="color">color : </label>
	<input type="letter" value="red" name="color" id="color">
	<label for="message">message : </label>
	<input type="letter" value="test" name="message" id="message">
</form>

<?php
echo 'div style="font-size: ' .$_GET["size"].'px;color:'.$_GET["color"].'">'.$_GET["message"].'</div>';
?>

</body>
</html>