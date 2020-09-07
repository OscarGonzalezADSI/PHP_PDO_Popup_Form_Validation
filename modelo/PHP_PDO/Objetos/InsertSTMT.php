<?php

include "../Connection/PDOInsertSTMT.php";

$origen = new PDOInsertSTMT();

$base = "maildb";
$nameTable = "message";
$SqlInsertPrepared = "INSERT INTO ".$nameTable." (
                      id, name, email, website, comment, gender
					  ) VALUES (:id, :name, :email, :website, :comment, :gender)";							

$name = "";
$email = "";
$website = "";
$comment = "";
$gender = "";
						
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST["nameEnv"];
	$email = $_POST["emailEnv"];
	$website = $_POST["websiteEnv"];
	$comment = $_POST["commentEnv"];
	$gender = $_POST["genderEnv"];
	
	$Data =[
	   [NULL, $name, $email, $website, $comment, $gender]
	];
		
	try {
		$origen->action($base, $SqlInsertPrepared, $Data);
		$origen = null;
		echo "OK. Insert Prepared Statements.";
	} catch(PDOException $e) {
		echo $SqlInsertPrepared . "<br>" . $e->getMessage();
	}
	
	$clave = $_POST["llaveEnv"];
	if($clave == ""){
		header("location: ../../../Vista/Formulario.php");
	}else{
		header("location: $clave");		
	}
}

?>