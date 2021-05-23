<?php

require 'logic.php';

if (file_exists('./visits.txt')) {
    $c = file_get_contents('./visits.txt');
    $c++;

} else {
    $c = 'Error, el archivo visits.txt no existe';
}


?>

<!DOCTYPE html>
<html lang="en">
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
            <h2 class="amount"><?php echo $c ?></h2>
</div>
</div>
</body>
</html>

<?php

if (file_exists('./visits.txt')) {
    file_put_contents('./visits.txt', $c);
}
?>