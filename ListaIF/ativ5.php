<?php
    $n1 = 0;
    $n2 = 0;
    $n3 = 0;
    $result = 0;
    $calc = 'maior';

    if(isset($_POST['maior']))
    {   
        $n1 = (int)$_POST['n1'];
        $n2 = (int)$_POST['n2'];
        $n3 = (int)$_POST['n3'];
        $calc = $_POST['maior'];         
    
        if(($n1 > $n2) && ($n1 > $n3))
        {
            $result = $n1;
        }

        elseif(($n2 > $n1) && ($n2 > $n3))
        {
            $result = $n2;
        }
        else
        {
            $result = $n3;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade_5</title>
</head>
<body>
    <form method="post">
        Primeiro valor<br>
        <input type="number" name="n1" <?= $n1 ?>> <br>
        Segundo Valor <br>
        <input type="number" name="n2" <?= $n2 ?>> <br>
        Terceiro Valor <br>
        <input type="number" name="n3" <?= $n3 ?>> <br>
        <br> <br>
        <input type="submit" name="maior" value="maior">
        <br> <br>
        <p>O maior numero e: <?= $result?></p>
    </form>
</body>
</html>