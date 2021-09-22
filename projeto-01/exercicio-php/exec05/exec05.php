<?php
    require_once "form05.php";

        $val1 = $_POST['valor1'];
        $val2 = $_POST['valor2'];
     
        $valorQua1 = $val1**2;
        $valorQua2 = $val2 * $val2;

        $somaQua = $valorQua1 + $valorQua2;

   
        
        echo "Soma do guadrados: " . round($somaQua,2);

?>