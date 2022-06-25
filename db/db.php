<?php
    $db__address = "127.0.0.1";
    $db__connect = "root";
    $db__pass = "";
    $db__name = "Shop";

    $db = mysqli_connect($db__address,$db__connect,$db__pass,$db__name);

    if($db == false){
        echo "Ошибка";
    }

?>