<?php
/**
 * Necesario
 */


/*-------------------------------------------------------------
  Recepcion de datos del formulario
//-------------------------------------------------------------*/
$name = $dataTest[0][1];
$email = $dataTest[1][1];
$website = $dataTest[2][1];
$comment = $dataTest[3][1];
$gender = $dataTest[4][1];

$nameErr = $dataError[0][1];
$emailErr = $dataError[1][1];
$websiteErr = $dataError[2][1];
$commentErr = $dataError[3][1];
$genderErr = $dataError[4][1];	

/*-------------------------------------------------------------
  valida campos obligatorios e
  impide envio de datos con excepciones personalizadas
//-------------------------------------------------------------*/	
$variable[0] = $name;
$variable[1] = $email;
$variable[2] = $gender;

$Error[0] = $nameErr;	
$Error[1] = $emailErr;	
$Error[2] = $websiteErr;
$Error[3] = $commentErr;
$Error[4] = $genderErr;

$rrr = Evaluar222($variable);
$errores = CheckError($Error);

try {
	// valida que los campos obligatorios no esten vacios

	$ooo = new ProbarExcepcion($rrr);
	$yyy = new ProbarExcepcion($errores);
	/* -----------------------------------------------------------
	Si todo esta "OK" hasta aqui, envia los datos.
	// ----------------------------------------------------------*/
?>
	<form class="form" method="post" action="../modelo/PHP_PDO/Objetos/InsertSTMT.php">  
	<input type="hidden" name="nameEnv" value="<?php echo $name;?>">
	<input type="hidden" name="emailEnv" value="<?php echo $email;?>">
	<input type="hidden" name="websiteEnv" value="<?php echo $website;?>">
	<input type="hidden" name="commentEnv" value="<?php echo $comment;?>">
	<input type="hidden" name="genderEnv" value="<?php echo $gender;?>">
	<input type="hidden" name="llaveEnv" value="<?php echo $llave;?>">
	<input id="registar" class="btn btn-primary" type="submit" name="submit" value="Submit">
	</form>

	<script>

	function ocultar() {
	  document.getElementById("registar").style.display = "none";
	}

	function ejecutar() {
		document.getElementById("registar").click();
	}

	ocultar();
	ejecutar();

	</script>
	<?php
} catch (MiExcepcion $e) {
	/*echo "<br>";
	echo "<br>-----------------------------------------------<br>";
	echo "Atrapada MiExcepcion";
	echo "<br>".$e;
	echo "<br>-----------------------------------------------<br>";
	echo "<br>";*/
	if($errores > 0){
	?>
		<div class="alert alert-warning"> 
			<?php
			if($nameErr !== ""){ ?> <br/><strong>Warning!</strong>
			<?php echo $nameErr;
			}
			if($emailErr !== ""){ ?> <br/><strong>Warning!</strong>
			<?php echo $emailErr;
			}
			if($websiteErr !== ""){ ?> <br/><strong>Warning!</strong>
			<?php echo $websiteErr;
			}
			if($commentErr !== ""){ ?> <br/><strong>Warning!</strong>
			<?php echo $commentErr;
			}
			if($genderErr !== ""){ ?> <br/><strong>Warning!</strong>
			<?php echo $genderErr;
			}
			?>
		</div>
	<?php
	}
	$e->funcionPersonalizada();
} catch (Exception $e) {        // Skipped
	echo "<br>";
	echo "<br>-----------------------------------------------<br>";
	echo "Atrapada la Excepción Predeterminada\n", $e;
	echo "<br>-----------------------------------------------<br>";
	echo "<br><br><br>";
}
?>