<?php
    require_once "form07.php";

        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        $imc = $peso / ($altura ^ 2);
    
        echo "Resultado: " . round($imc,2);

?>