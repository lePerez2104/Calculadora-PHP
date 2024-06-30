<?php

    function somar ($n1, $n2)
    {
        return $n1 + $n2;
    }

    function subtrair ($n1, $n2)
    {
        return $n1 - $n2;
    }

    function multiplicar ($n1, $n2)
    {
        return $n1 * $n2;
    }
    
    function dividir ($n1, $n2)
    {
        return $n1 / $n2;
    }

    $n1 = $_POST["num1"];
    $n2 = $_POST["num2"];
    $oper = $_POST["operacao"];

    switch($oper)
    {
        case 1: 
            $resultado = somar($n1, $n2);
            break;
        case 2:
            $resultado = subtrair($n1, $n2);
            break;
        case 3:
            $resultado = multiplicar($n1, $n2);
            break;
        case 4:
            $resultado = dividir($n1, $n2);
            break;
        default:
    };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Calculadora</h1>
    <form action="" method="POST">
        <label for="num1">Digite um valor:</label>
        <input type="number" name="num1"> <br><br>
        <label for="num2">Digite outro valor:</label>
        <input type="number" name="num2"> <br><br>
        <label for="operacao">Digite o código da operação:</label>
        <input type="number" name="operacao">
        <p>1 - Somar <br> 
        2 - Subtrair <br>
        3 - Multiplicar <br>
        4 - Dividir </p>
        <button type="submit">Calcular</button>
    </form>
    <?php
    echo "<br> <br> <h2>Resultado</h2><p> $resultado</p>";
    ?>

</body>
</html>