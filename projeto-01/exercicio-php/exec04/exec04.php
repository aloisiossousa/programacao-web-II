<?php
    require_once "form04.php";

        $val = $_POST['valor'];
        $valor = $val * 0.05;
        $valorMet = $val * 0.50;
        
        echo "O resultado: 5% - " . round($valor, 2) . " e valor de 50% - " . round($valorMet,2);

?>