<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    echo "<h1>Opciones elegidas:</h1><br>";

    echo "<h3>Nombre del cliente</h3><br>";
    $nombre=$_POST['nombre'] ?? [];
        echo $nombre;

    echo "<h3>Correo del cliente</h3><br>";
    $correo=$_POST['correo'] ?? [];
        echo $correo;    

    echo "<h3>Destino elegido</h3><br>";
    $destino=$_POST['destino'] ?? [];
    foreach($destino as $ds){
        echo $ds . "<br>";
    }

    echo "<h3>Actividades adicionales</h3><br>";
    $act=$_POST['actividad'] ?? [];
    foreach($act as $ac){
        echo $ac . "<br>";
    }

    echo "<h3>Servicios adicionales</h3><br>";
    $serv=$_POST['servicios'] ?? [];
    foreach($serv as $sr){
        echo $sr . "<br>";
    }

?>
</body>
</html>
