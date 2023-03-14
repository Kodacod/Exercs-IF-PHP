<?php
    $n1 = 'sexo';
    
    $result = '';
    $calc = 'verificar';

    if(isset($_POST['verificar']))
    {   
        $n1 = (string)$_POST['n1'];
        $calc = $_POST['verificar'];         
    
        if($n1 == 'M')
        {
            $result = "Sexo masculino";
        }

        elseif($n1 == 'F')
        {
            $result = "Sexo feminino";
        }

        else
        {
            $result = "Sexo invalido";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade_3</title>
</head>
<body>
    <form method="post">
        Insira M ou F<br>
        <input type="text" name="n1" <?= $n1 ?>> <br> <br>
        <input type="submit" name="verificar" value="verificar">
        <br> <br>
        <p>O sexo e: <?= $result?></p>
    </form>
</body>
</html>