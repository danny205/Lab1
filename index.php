<?php
/**
 * Created by PhpStorm.
 * User: 1313823
 * Date: 03/10/2016
 * Time: 14:41
 */

$age = 21;
$product = "mugs"
?>
<!DOCTYPE html>
<html>
<head></head>
<body>

<p>

    <?php

    if($age >= 16 AND $age <= 18){

        echo "You can buy specs";

    }elseif($age >= 18 AND $age < 21){

        echo "You can buy specs and mugs";

    }elseif($age >= 21){

        echo "You can buy specs, mugs and sausage rolls";

    }


    switch ($age){
        case "specs":
            echo "You have to be over 16 to buy specs";
            break;
        case "mugs":
            echo "You have tobe over 18 to buy mugs";
            break;
        case "sausage rolls":
            echo "You have to be over 21 to but sausage rolls";
            break;
    }

    ?>

</p>

</body>
</html>