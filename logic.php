<?php


if (file_exists('./visits.txt')) {
    $c = file_get_contents('./visits.txt');
    $c++;

} else {
    $c = 'Error, el archivo visits.txt no existe';
}

$tooBig = false;
$allRight = '<h2 class="amount">' . $c  . '</h2>';
$alert = '<h2 class="alert">!!!</h2>';

if ($c > 9999) {
    $tooBig = true;
}



function actualizeNumber($c) {
    
    if (file_exists('./visits.txt')) {
        file_put_contents('./visits.txt', $c);
    }
}

function checkNumber($c) {
    require './messages_and_variables.php';


}

?>