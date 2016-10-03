<?php
/**
 * Created by PhpStorm.
 * User: 1313823
 * Date: 03/10/2016
 * Time: 14:41
 */

$age = 21;
$wantedgood = "mugs";
$provisionedActivities = array("Specs",	"Mugs","Sausage rolls");

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

    echo "</br>";
    switch ($wantedgood){

        case "specs":
            echo "You have to be over 16 to buy specs";
            break;

        case "mugs":
            echo "You have to be over 18 to buy mugs";
            break;

        case "sausage rolls":
            echo "You have to be over 21 to but sausage rolls";
            break;

    }

    echo "</br>";

    foreach($provisionedActivities as $x){
        if($x == "Mugs"){
            print "<p>Hugs</p>";
        }elseif($x == "Sausage rolls"){
            print "";
        }else{
            print "<p>$x</p>";
        }

    }

    ?>

</p>

</body>
</html>