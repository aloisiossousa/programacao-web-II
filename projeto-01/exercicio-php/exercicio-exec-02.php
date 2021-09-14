<?php
    require_once "exercicio-02.php";

        $val1 = $_POST['num1'];
        $val2 = $_POST['num2'];
        $val2 = $_POST['num2'];

        $media = ($val1 + $val2 + $val3)/3 ;
        
        echo "O resultado: " . round($media, 2);

?>