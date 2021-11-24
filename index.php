<?php require 'logic.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de visitas</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="normalize.css">
</head>
<body>
    <div class="blue-circle">
        <div class="gray-rectangle">
            <h2 class="visits">VISITAS</h2>
            <?php 

                if(!$tooBig) {
                    echo $allRight;
                } else {
                    echo $alert;
                    $c = 0;
                }

            ?>
        </div>
    </div>
    <a href="./definer.html"><button>
        Definir la cantidad de visitas
    </button></a>
</body>
</html>

<?php actualizeNumber($c); ?>