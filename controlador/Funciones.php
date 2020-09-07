<?php
/**
 * Necesario
 */

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

function test_Format($data) {
	// check if name only contains letters and whitespace
	if (!preg_match("/^[a-zA-Z-' ]*$/",$data)) {
	  return $nameErr = "Only letters and white space allowed";
	}else{
	  return $nameErr = "";
	}
}

function test_Email($data) {
	if (!filter_var($data, FILTER_VALIDATE_EMAIL)) {
		return $emailErr = "Invalid email format";
	}else{
		return $emailErr = "";
	}
}

function test_URL($data) {
	// check if URL address syntax is valid
	$Caracters = "/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i";
	if (!preg_match($Caracters, $data)) {
		return $websiteErr = "Invalid URL";
	}else{
		return $websiteErr = "";
	}   
}
// ojo: modificar de manera que todo sea por POST
function Genero($genero){
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(empty($_POST["gender"])){
			echo "";
		}else{
			$gender = $_POST['gender'];
			if($gender == $genero){
				echo "checked";
			}			
		}
	}elseif(isset($gender) && $gender == $genero){
		echo "checked";
	}else{
		$gender = "";
	}
}

function Evaluar($variable){
	switch ($variable) {
		case ""  : $rrr = 1; break;
		default  : $rrr = 0; break;
	}
	return $rrr;
}

function Evaluar222($variable){
	$rrr = 0;
	
	for($i=0; count($variable) > $i; $i++){
		$rrr += Evaluar($variable[$i]);
	}
	
	if($rrr > 0){
		$rrr = 1;
	}		
	return $rrr;
}

function EvaluarError($variable){
	switch ($variable) {
		case ""  : $rrr = 0; break;
		default  : $rrr = 1; break;
	}
	return $rrr;
}

function CheckError($variable){
	$rrr = 0;
	
	for($i=0; count($variable) > $i; $i++){
		$rrr += EvaluarError($variable[$i]);
	}
	
	if($rrr > 0){
		$rrr = 1;
	}		
	return $rrr;
}






?>