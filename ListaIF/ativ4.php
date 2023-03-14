<?php
    $n1 = 0;
    $n2 = 0;
    $result = 0;
    $calc = 'media';

    if(isset($_POST['media']))
    {   
        $n1 = (int)$_POST['n1'];
        $n2 = (int)$_POST['n2'];
        $calc = $_POST['media'];         
    
        if((($n1 + $n2) / 2 >= 7) && (($n1 + $n2) / 2 < 10))
        {
            $result = "Aprovado";
        }

        elseif(($n1 + $n2) / 2 < 7)
        {
            $result = "Reprovado";
        }

        elseif(($n1 + $n2) / 2 == 10)
        {
            $result = "Aprovado com distincao";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade_4</title>
</head>
<body>
    <form method="post">
        Primeiro valor<br>
        <input type="number" name="n1" <?= $n1 ?>> <br>
        Segundo Valor <br>
        <input type="number" name="n2" <?= $n2 ?>> <br>
        <br> <br>
        <input type="submit" name="media" value="media">
        <br> <br>
        <p>Calculo da media, você foi: <?= $result?></p>
    </form>
</body>
</html>