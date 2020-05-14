<?php
$title='Exercice n°5 (Itérations)';
include "include/header.php";
include "include/functions.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Ex5</title>
		<meta charset="UTF-8">
	</head>
	<body>
	<?php
	include("index.php");
	?>

<?php
$size = $_GET['size'] ?? 10;
$color = $_GET['nbColonnes'] ?? 'nbColonnes';
$message = $_GET['nbLignes'] ?? 'nbLignes';
$update = $_GET['Créer le tableau'] ?? null;
	<h2> Création d'un tableau :</h2>

	?>
<hr>
	<form method="GET">
		<label for="Lignes">Lignes : </label>
		<input type="number" value="<?=$message?>" name="Lignes" id="nbLignes">
		<label for="size">Size : </label>
		<input type="number" value="<?=$size?>" name="Colonnes" id="nbColonnes">
		<input type="submit" value="Créer le tableau">
	<form method="POST" >
		<label for="ligne">Lignes : </label>
		<input type="number" value="" name="ligne">
		<label for="col">Colonnes : </label>
		<input type="number" value="" name="col">
		<input type="submit" value="Crée tab">
	</form>
	<br>

	<?php
		$nbLigne=$_POST["ligne"]??10;
		$nbColones=$_POST["col"]??10;
		createHtmlTables($nbLigne,$nbColones);
	?>

</hr>

$nbLignes=$_GET["l"]??10;
$nbColonnes=$_GET["c"]??10;
echo "<h2>Tableau de $nbLignes par $nbColonnes</h2>";
createHtmlTable($nbLignes,$nbColonnes);
?>
<table border='1'>
    <tbody>
        <?php for($i=0;$i<$nbLignes;$i++){
            $gras=($i%2==0)?"bold":"normal";
            ?>
        <tr>
        <?php for($j=0;$j<$nbColonnes;$j++){?>
              <td style="font-weight: <?=$gras ?>"><?="$i - $j"?></td>
        <?php }?>
        </tr>
      <?php }?>
    </tbody>
</table>
<?php
include "include/footer.php";
 ?>
	</body>
</html>