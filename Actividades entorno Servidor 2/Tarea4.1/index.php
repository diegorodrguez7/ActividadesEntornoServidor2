<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $espaniol = array(
        "lunes", "martes", "miercoles", "jueves", "viernes",
        "sabado", "domingo"
    );
    $ingles = array(
        "monday", "tuesday", "wednesday", "thursday", "friday",
        "saturday", "sunday"
    );
    $frances = array(
        "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi",
        "dimanche"
    );
    $italiano = array(
        "lunedi", "martedi", "mercoledì", "giovedì", "venerdì",
        "sabato", "domenica"
    );

    $dia = $_POST["dia"];
    $idioma = $_POST["idioma"];

    ?>
</body>

</html>