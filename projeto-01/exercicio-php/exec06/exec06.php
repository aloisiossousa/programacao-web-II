<?php
    require_once "form07.php";

        $peso = $_POST['velox'];
        $altura = $_POST['velox'];

        $imc = $peso / ($altura ^ 2);
    
        echo "Resultado: " . $imc;

?>