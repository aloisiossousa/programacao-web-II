<?php
    require_once "exercicio-01.php";

        @$num1 = $_POST['num1'];
        @$num2 = $_POST['num2'];

        @$result = ($num1 + $num2) * $num1;
        
        echo "O resultado: " . @$result;

?>