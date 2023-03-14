<?php
    $n1 = 0;
    $result = '';
    $calc = 'verificar';

    if(isset($_POST['verificar']))
    {   
        $n1 = (int)$_POST['n1'];
        $calc = $_POST['verificar'];         
    
        if($n1 > 0)
        {
            $result = "Positivo";
        }

        else
        {
            $result = "Negativo";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade_2</title>
</head>
<body>
    <form method="post">
        Insira o valor<br>
        <input type="number" name="n1" <?= $n1 ?>> 
        <br> <br>
        <input type="submit" name="verificar" value="verificar">
        <br> <br>
        <p>O numero e: <?= $result?></p>
    </form>
</body>
</html>