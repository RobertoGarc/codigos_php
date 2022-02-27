<?php 

    $nombre="";
    $lenguaje="";
    $chk_laravel="";
    $chk_mysql="";
    $chk_bootstrap="";
    $banda="";
    $duda="";
    if($_POST){
        $nombre=(isset($_POST['nombre'])) ? $_POST['nombre'] : "" ;
        $lenguaje=(isset($_POST['lenguaje'])) ? $_POST['lenguaje'] : "" ;
        $chk_laravel=(isset($_POST['chk_laravel']) && $_POST['chk_laravel']=='si') ? "checked" :"";
        $chk_mysql=(isset($_POST['chk_mysql']) && $_POST['chk_mysql']=='si') ? "checked" :"";
        $chk_bootstrap=(isset($_POST['chk_bootstrap']) && $_POST['chk_bootstrap']=='si') ? "checked" :"";
        $banda=(isset($_POST['banda'])) ? $_POST['banda'] : "";
        $duda=(isset($_POST['duda'])) ? $_POST['duda'] : "";
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
    <?php if($_POST){ ?>
        Hola, soy <?php echo $nombre ?>
        <br>
        , me gusta <?php echo $lenguaje ?>
        <br>
        , estoy aprendiendo
        <?php echo ($chk_laravel=="checked") ? "Laravel" : ""?>
        <?php echo ($chk_mysql=="checked") ? "Mysql" : ""?>
        <?php echo ($chk_bootstrap=="checked") ? "Bootstrap" : ""?>
        <br>
        , me gusta la banda <?php echo $banda ?>
        <br>
        Tu mensaje es: <?php echo $duda; ?> 
    <?php } ?>
    

    <form action="21_ValoresInput.php" method="post">
        <label for="nombre">Nombre: </label>
        <input value="<?php echo $nombre ?>" type="text" name="nombre" id="nombre">
        <input type="submit" value="Enviar">
        <br>
        <span>¿Que lenguaje te gusta?: </span>
        <br>
        <label for="php">PHP</label>
        <input type="radio" name="lenguaje" <?php echo ($lenguaje=="PHP") ? "checked": "" ?> value="PHP" id="php">
        <label for="html">HTML</label>
        <input type="radio" name="lenguaje" <?php echo ($lenguaje=="HTML") ? "checked": "" ?> value="HTML" id="html">
        <label for="css">CSS</label>
        <input type="radio" name="lenguaje" <?php echo ($lenguaje=="CSS") ? "checked": "" ?> value="CSS" id="css">
        <br>
        <span>¿Estas aprendiendo?: </span>
        <br>
        <label for="laravel">Laravel</label>
        <input type="checkbox" name="chk_laravel" <?php echo $chk_laravel ?> value="si" id="laravel">
        <label for="mysql">MySQL</label>
        <input type="checkbox" name="chk_mysql" <?php echo $chk_mysql ?> value="si" id="mysql">
        <label for="bootstrap">Bootstrap</label>
        <input type="checkbox" name="chk_bootstrap" <?php echo $chk_bootstrap ?> value="si" id="bootstrap">
        <br>
        <label for="banda">¿Que banda te gusta?</label>
        <select name="banda" id="banda">
            <option value="Parcels" <?php echo ($banda=="Parcels")?"selected":""?>>Parcels</option>
            <option value="Queen" <?php echo ($banda=="Queen")?"selected":""?>>Queen</option>
            <option value="Toto" <?php echo ($banda=="Toto")?"selected":""?>>Toto</option>
            <option value="Chic" <?php echo ($banda=="Chic")?"selected":""?>>Chic</option>
        </select>
        <br>
        <label for="">¿Tienes alguna duda?</label>
        <br>
        <textarea name="duda" id="duda" cols="30" rows="10">
            <?php echo $duda ?>
        </textarea>
    </form>
</body>
</html>