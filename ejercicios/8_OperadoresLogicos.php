<?php 

    if($_POST){
        $valorA=$_POST['valorA'];
        $valorB=$_POST['valorB'];

        if(($valorA!=$valorB) && $valorA==2){
            echo "Valor A es diferente de B y es igual a 2";
        }else{
            echo "Valor A no es diferente de B y no es igual a 2";
        }

        
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
    <form action="8_OperadoresLogicos.php" method="post">
        <label for="">Valor A</label>
        <input type="number" name="valorA">
        <br>
        <label for="">Valor B</label>
        <input type="number" name="valorB">
        <br>
        <input type="submit" value="Calcular">
    </form>
    
</html>