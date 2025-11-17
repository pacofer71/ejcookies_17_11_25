<?php
//Ejemplo con cookies para recordar la ultima vez que accedi a la página
//$fechaActual=date('d/m/Y H:i:s');
if(isset($_COOKIE['fecha'])){
    $mensaje="Bienvienido de nuevo tu última visita fue:<i> ".$_COOKIE['fecha']."</i>";
}else{
    $mensaje="Bienvenido, es la primera vez que vistas nuestra página";
}
$fechaActual=date('d/m/Y H:i:s');
setcookie('fecha', $fechaActual, time()+(7*24*60*60));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?= $mensaje; ?></p>
</body>
</html>