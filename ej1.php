<?php
// Ejemplo cookie contador de visitas
//setcookie('contador', 1, time()+(30*24*60*60), '/') asi se crea una cookies
//if(isset($_COOKIE['contador])){} asi comprobamos si existe en este caso $_COOKIE['contador']=1
//setcookie('contador', '', -3600, '/') //eliminamos la cookie contador
if (isset($_POST['btn_reset'])) {
    setcookie('contador', '', time()-3600);
    header("Location:ej1.php");
    exit;
}
if (isset($_COOKIE['contador'])) {
    //ya hemos visitado la pagina
    $visitas = (int)$_COOKIE['contador'] + 1;
} else {
    //primera vez que visito la página
    $visitas = 1;
}
setcookie('contador', $visitas, time() + (7 * 24 * 60 * 60));
$mensaje = ($visitas == 1) ? "Es la Primera vez que visita nuestra página"
    : "Ha visitado nuestra página:<b> $visitas</b> veces";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?= $mensaje ?>
    <br>
    <form action="ej1.php" method="POST">
        <input type="submit" name="btn_reset" value="RESET">
    </form>
</body>

</html>