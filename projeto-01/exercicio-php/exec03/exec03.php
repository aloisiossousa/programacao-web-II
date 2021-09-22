<?php
    require_once "form03.php";

        $val = $_POST['valor'];
        $valor = $val * 0.15 ;
        
        echo "O resultado: " . round($valor, 2);

?>