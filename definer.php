<?php

$visitas = htmlspecialchars($_POST['visitas']);

function backToLife() {
    header('Location: ./definer.html');
}

if (!isset($visitas)) {
    backToLife();
}

if ($visitas >= 0 && $visitas <= 9999) {
    file_put_contents('./visits.txt', $visitas - 1);
    header('Location: ./index.php');
} else {
    backToLife();
}

?>