<?php
include_once './includes/header.php';
?>


<?php

$frutas2 = ["manzana ", "naranja ", "melon ", "uvas"];


for ($i = 0; $i < count($frutas2); $i++) {


    echo $frutas2[$i] . "<br />";
}


foreach ($frutas2 as $fruta) {

    echo $fruta . "<br/>";
}



?>
