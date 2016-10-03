<?php
/**
 * Created by PhpStorm.
 * User: 1313823
 * Date: 03/10/2016
 * Time: 14:41
 */

$age = 21;
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

    ?>

</p>

</body>
</html>