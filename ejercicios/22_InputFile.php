
<?php

    if($_POST){
        print_r($_FILES['archivo']['name']);
        move_uploaded_file($_FILES['archivo']['tmp_name'],"img/".$_FILES['archivo']['name']);
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
    <form action="22_InputFile.php" method="post" enctype="multipart/form-data">
        <input type="file" name="archivo" id="archivo">
        <input type="submit" value="Enviar" name="Enviar">
    </form>
</body>
</html>