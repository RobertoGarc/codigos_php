<?php

    if($_POST){
        $boton=$_POST['btn_submit'];
        switch ($boton) {
            case 1:
                echo "Presionó el botón 1";
                break;
            case 2:
                echo "Presionó el botón 2";
                break;
            case 3:
                echo "Presionó el botón 3";
                break;
            default:
                # code...
                break;
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
    <form action="10_Switch.php" method="post">
        <input type="submit" value="1" name="btn_submit">
        <input type="submit" value="2" name="btn_submit">
        <input type="submit" value="3" name="btn_submit">
    </form>
</body>
</html>