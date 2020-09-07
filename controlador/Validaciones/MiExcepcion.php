<?php
/**
 * Necesario
 */
 
/**
 * Definir una clase de excepción personalizada
 */
class MiExcepcion extends Exception{
    // Redefinir la excepción, por lo que el mensaje no es opcional
    public function __construct($message, $code = 0, Exception $previous = null) {
        // algo de código
    
        // asegúrese de que todo está asignado apropiadamente
        parent::__construct($message, $code, $previous);
    }

    // representación de cadena personalizada del objeto
    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }

    public function funcionPersonalizada() {
        echo "<br><br>";
		/*echo "-----------------------------------------------<br>";
		echo "Una función personalizada                      <br>";
		echo "para este tipo de excepción                    <br>";
		echo "-----------------------------------------------<br>";
		echo "<br><br>";*/
    }
}
?>