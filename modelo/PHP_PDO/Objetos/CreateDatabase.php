<?php

include "../Connection/PDOCreateDatabase.php";

$base = "maildb";

try {
  $origen = new PDOCreateDatabase();
  $origen->action($base);
  $origen = null;
  echo "Se creo la base de datos: " . $base;
} catch(PDOException $e) {
  echo "Connection failed: ";
  echo $e->getMessage();
}







































?>
