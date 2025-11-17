<?php
// ejemplo para estilos con cookies, en este caso color de fondo
//haremos una página web donde con un form y un radio button
//con los valores green y silver
if (isset($_POST['btn_enviar'])) {
    if (isset($_POST['color'])) {
        $color = $_POST['color'];
        setcookie('color', $color, time() + (7 * 24 * 3600));
    }
} else {
    $color = $_COOKIE['color'] ?? 'white';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color:<?= $color ?>">
    <h3>
        <center>COLOR DE FONDO CON COOKIES</center>
    </h3>
    <form method="POST" action="ej3.php">
        Elije Color:<br>
        <input type='radio' name="color" value="gray" />GRIS<br>
        <input type='radio' name="color" value="green" />VERDE<br>
        <input type="submit" name="btn_enviar" value="GUARDAR PREFERENCIA" />
    </form>
</body>

</html>