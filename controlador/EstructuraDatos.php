<?php
/**
 * Necesario
 */

// define variables and set to empty values
$nameErr = $emailErr = $websiteErr = $commentErr = $genderErr = "";
$name = $email = $website = $comment = $gender = "";

$dataCamp = [
	[$name, "name", "String"],
	[$email, "email", "email"],
	[$website, "website", "URL"],
	[$comment, "comment", "Free"],
	[$gender, "gender", "NA"]
];

$dataRequired = [
	[$name, "El campo nombre es obligatorio."],
	[$email, "El campo Email es obligatorio."],
	[$website, "El campo website es opcional."],
	[$comment, ""],
	[$gender, "El campo genero es obligatorio."]
];

$dataTest = [
	[$name, ""],
	[$email, ""],
	[$website, ""],
	[$comment, ""],
	[$gender, ""]
];

$dataError = [
	[$name, ""],
	[$email, ""],
	[$website, ""],
	[$comment, ""],
	[$gender, ""]
];
?>