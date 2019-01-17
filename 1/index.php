<?php
       
    $a = $_POST["val_a"];
    $b = $_POST["val_b"];
    $method = $_POST["method"];
    
    switch ($method) {
        case '*':
            $res = $a * $b;
            break;
        case '+':
            $res = $a + $b;
            break;
        case '%':
            if ($b == 0) {
                $res = "Ошибка: деление на ноль";
            }
            else {
                $res = $a % $b;
            }
            break;
        default:
            
            break;
    }
    echo $res;

?>