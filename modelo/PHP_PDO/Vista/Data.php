<?php
include "../Connection/PDOSelectSTMT.php";
?>

<form method="post" action="../../../Vista/Formulario.php">
<input type="hidden" name="llave" value="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<input class="btn btn-primary" type="submit" name="submit" value="Enviar">  
</form>

<table class="table table-condensed">
<tr>
	<th>Id</th>
	<th>name</th>
	<th>email</th>
	<th>website</th>
	<th>comment</th>
	<th>gender</th>
</tr>
<?php
$dbname = "maildb";
$SqlSelect = "SELECT * FROM message";
try {
  $origen = new PDOSelectSTMT();
  $origen -> action($dbname, $SqlSelect);
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$origen = null;
?>
</table>