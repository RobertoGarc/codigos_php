<?php 

    if($_POST){
        $valorA=$_POST['valorA'];
        $valorB=$_POST['valorB'];
        if($valorA==$valorB)
        {
            $resultado=$valorA+$valorB;
        }else{
            $resultado=$valorA-$valorB;
        }
        

        echo $resultado;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="9_IfAnidado.php" method="post">
        <label for="">Valor A</label>
        <input type="number" name="valorA">
        <br>
        <label for="">Valor B</label>
        <input type="number" name="valorB">
        <br>
        <input type="submit" value="Calcular">
    </form>
    
</html>